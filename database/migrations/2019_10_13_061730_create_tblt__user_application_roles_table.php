<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbltUserApplicationRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblt__user_application_roles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('FIDUser')->unsigned();
            $table->foreign('FIDUser')
                ->references('ID')
                ->on('tblm__users')
                ->onDelete('cascade');
            $table->integer('FIDApplicationRole')->unsigned();
            $table->foreign('FIDApplicationRole')
                ->references('ID')
                ->on('tblm_application_roles')
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
        Schema::dropIfExists('tblt__user_application_roles');
    }
}
