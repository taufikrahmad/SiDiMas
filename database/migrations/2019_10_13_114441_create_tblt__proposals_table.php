<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbltProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblt__proposals', function (Blueprint $table) {
            $table->increments('ID');
            $table->char('RequestorID', 30)->unsigned();
            $table->foreign('RequestorID')
                ->references('NIDN')
                ->on('tblm_dosen')
                ->onDelete('cascade');
            $table->char('Judul', 100);
            $table->char('ProvinsiLokasi', 100);
            $table->char('KabupatenLokasi', 100);
            $table->char('KecamatanLokasi', 100);
            $table->integer('JarakLokasi');
            $table->integer('Durasi');
            $table->char('SatuanDurasi',30);
            $table->integer('FIDBatch')->unsigned();
            $table->foreign('FIDBatch')
                ->references('ID')
                ->on('tblt__batches')
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
        Schema::dropIfExists('tblt__proposals');
    }
}
