<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbltReviewResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblt__review_results', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('FIDReviewerAssignment')->unsigned();
            $table->foreign('FIDReviewerAssignment')
                ->references('ID')
                ->on('tblt__proposals')
                ->onDelete('cascade');
            $table->text('Remarks', 30);
            $table->integer('FIDStatus')->unsigned();
            $table->foreign('FIDStatus')
                ->references('ID')
                ->on('tblm_statuses')
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
        Schema::dropIfExists('tblt__review_results');
    }
}
