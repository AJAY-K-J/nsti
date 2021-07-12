<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQualificationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualification_details', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->string('nameOfExamination')->nullable();
            $table->string('nameOfUniversityOrBoard')->nullable();
            $table->string('tradeOrSubject')->nullable();
            $table->string('yearOfPassing')->nullable();
            $table->string('certificateNumber')->nullable();
            $table->string('duration')->nullable();
            $table->string('percentageOfMarks')->nullable();
            $table->string('technicalOrAcademic')->nullable();

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
        Schema::dropIfExists('qualification_details');
    }
}
