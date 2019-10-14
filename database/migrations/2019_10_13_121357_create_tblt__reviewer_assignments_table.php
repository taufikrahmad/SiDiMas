<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbltReviewerAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblt__reviewer_assignments', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('FIDProposal')->unsigned();
            $table->foreign('FIDProposal')
                ->references('ID')
                ->on('tblt__proposals')
                ->onDelete('cascade');
            $table->char('Reviewer1', 30);
            $table->char('Reviewer2', 30);
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
        Schema::dropIfExists('tblt__reviewer_assignments');
    }
}
