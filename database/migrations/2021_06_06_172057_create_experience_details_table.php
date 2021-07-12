<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperienceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experience_details', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->string('nameOfEmployer')->nullable();
            $table->string('natureOfJob')->nullable();
            $table->date('fromDate')->nullable();
            $table->date('toDate')->nullable();
            $table->string('designation')->nullable();
            $table->string('currentEmployerStatus')->nullable();
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
        Schema::dropIfExists('experience_details');
    }
}
