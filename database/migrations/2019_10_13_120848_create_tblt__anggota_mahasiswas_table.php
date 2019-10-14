<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbltAnggotaMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblt__anggota_mahasiswas', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('FIDProposal')->unsigned();
            $table->foreign('FIDProposal')
                ->references('ID')
                ->on('tblt__proposals')
                ->onDelete('cascade');
            $table->integer('FIDMahasiswa')->unsigned();
            $table->foreign('FIDMahasiswa')
                ->references('ID')
                ->on('tblm_mahasiswas')
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
        Schema::dropIfExists('tblt__anggota_mahasiswas');
    }
}
