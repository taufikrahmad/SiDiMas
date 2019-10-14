<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbltUserJobRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblt_user_job_roles', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('FIDUser')->unsigned();
            $table->foreign('FIDUser')
                ->references('ID')
                ->on('tblm__users')
                ->onDelete('cascade');
            $table->integer('FIDJobRole')->unsigned();
            $table->foreign('FIDJobRole')
                ->references('ID')
                ->on('tblm_job_roles')
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
        Schema::dropIfExists('tblt_user_job_roles');
    }
}
