<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbltBatchSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblt__batch_settings', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('FIDBatch')->unsigned();
            $table->foreign('FIDBatch')
                ->references('ID')
                ->on('tblt__batches')
                ->onDelete('cascade');
            $table->integer('FIDSetting')->unsigned();
            $table->foreign('FIDSetting')
                    ->references('ID')
                    ->on('tblm_batch_setting_param')
                    ->onDelete('cascade');
            $table->char('Value', 30);
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
        Schema::dropIfExists('tblt__batch_settings');
    }
}
