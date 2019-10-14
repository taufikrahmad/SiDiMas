<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblmBatchSettingParamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblm_batch_setting_param', function (Blueprint $table) {
            $table->increments('ID');
            $table->char('Description', 100);    
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
        Schema::dropIfExists('tblm_batch_setting_param');
    }
}
