<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbltBatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblt__batches', function (Blueprint $table) {
            $table->increments('ID');
            $table->char('BatchType', 30);
            $table->char('TahunAjaran', 30);
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
        Schema::dropIfExists('tblt__batches');
    }
}
