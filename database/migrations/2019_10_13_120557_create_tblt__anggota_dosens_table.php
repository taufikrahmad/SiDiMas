<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbltAnggotaDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblt__anggota_dosens', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('FIDProposal')->unsigned();
            $table->foreign('FIDProposal')
                ->references('ID')
                ->on('tblt__proposals')
                ->onDelete('cascade');
            $table->integer('FIDDosen')->unsigned();
            $table->foreign('FIDDosen')
                ->references('ID')
                ->on('tblm_dosen')
                ->onDelete('cascade');
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
        Schema::dropIfExists('tblt__anggota_dosens');
    }
}
