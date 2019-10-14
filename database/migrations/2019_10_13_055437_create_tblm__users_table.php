<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblmUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblm__users', function (Blueprint $table) {
            $table->increments('ID');
            $table->char('UserID', 10);
            $table->char('Password', 100);
            $table->integer('FIDPersonType')->unsigned();
            $table->foreign('FIDPersonType')
                ->references('ID')
                ->on('tblm__person_types')
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
        Schema::dropIfExists('tblm__users');
    }
}

