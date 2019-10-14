<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblmProdisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblm_prodis', function (Blueprint $table) {
            $table->increments('ID');
            $table->char('Description', 100);
            $table->integer('FIDFakultas')->unsigned();
            $table->foreign('FIDFakultas')
                ->references('ID')
                ->on('tblm_fakultas')
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
        Schema::dropIfExists('tblm_prodis');
    }
}
