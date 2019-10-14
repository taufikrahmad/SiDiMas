<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblmDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblm_dosen', function (Blueprint $table) {
            $table->increments('ID');
            $table->char('NIDN', 30)->unique();
            $table->char('NIP', 30);
            $table->char('FirstName', 30);
            $table->char('MiddleName', 30);
            $table->char('LastName', 30);
            $table->integer('FIDFakultas')->unsigned();
            $table->foreign('FIDFakultas')
                ->references('ID')
                ->on('tblm_fakultas')
                ->onDelete('cascade');
            $table->integer('FIDJfa')->unsigned();
            $table->foreign('FIDJfa')
                ->references('ID')
                ->on('tblm_jfas')
                ->onDelete('cascade');
            $table->char('Phone', 20);
            $table->char('Email', 50);
            $table->integer('FIDEducation')->unsigned();
            $table->foreign('FIDEducation')
                ->references('ID')
                ->on('tblm_education_levels')
                ->onDelete('cascade');
            $table->char('BankName', 30);
            $table->char('BankBranch', 100);
            $table->char('BankAccountNumber', 100);
            $table->integer('FIDGrade')->unsigned();
            $table->foreign('FIDGrade')
                ->references('ID')
                ->on('tblm_grade_dosens')
                ->onDelete('cascade');
            $table->char('Status', 3);
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
        Schema::dropIfExists('tblm__dosen');
    }
}
