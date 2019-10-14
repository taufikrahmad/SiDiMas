<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbltTargetProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblt_target_proposals', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('FIDProposal')->unsigned();
            $table->foreign('FIDProposal')
                ->references('ID')
                ->on('tblt__proposals')
                ->onDelete('cascade');
            $table->integer('FIDTarget')->unsigned();
            $table->foreign('FIDTarget')
                ->references('ID')
                ->on('tblm_target_rencana_luaran')
                ->onDelete('cascade');
            $table->char('CreatedBy', 30);
            $table->char('ModifiedBy', 30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblt_target_proposals');
    }
}
