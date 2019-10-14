<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblmMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblm_mahasiswas', function (Blueprint $table) {
            $table->increments('ID');
            $table->char('NIM',30);
            $table->char('Name',50);
            $table->char('Gender',10);
            $table->integer('FIDProdi')->unsigned();
            $table->foreign('FIDProdi')
                ->references('ID')
                ->on('tblm_prodis')
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
        Schema::dropIfExists('tblm_mahasiswas');
    }
}
