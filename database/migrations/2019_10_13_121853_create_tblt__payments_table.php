<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbltPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblt__payments', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('FIDProposal')->unsigned();
            $table->foreign('FIDProposal')
                ->references('ID')
                ->on('tblt__proposals')
                ->onDelete('cascade');
            $table->char('BankName', 30);
            $table->char('AccountNumber', 30);
            $table->decimal('TransferAmount');
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
        Schema::dropIfExists('tblt__payments');
    }
}
