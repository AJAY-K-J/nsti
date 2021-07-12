<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmittedStudentsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admitted_students_details', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->string('username')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phonenumber')->nullable();
            $table->string('tradeName')->nullable();
            $table->string('itiPassed')->nullable();
            $table->string('isDiplomaHolder')->nullable();
            $table->date('dob')->format('d.m.Y')->nullable();
            $table->string('fatherGuardianName')->nullable();
            $table->string('motherName')->nullable();
            $table->string('gender')->nullable();
            $table->string('category')->nullable();
            $table->string('physicallyHandicapped')->nullable();
            $table->string('traineeType')->nullable();
            $table->string('employeeCodePEN')->nullable();
            $table->string('aadharNumber')->nullable();
            $table->string('maritalStatus')->nullable();
            $table->string('address')->nullable();
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
        Schema::dropIfExists('admitted_students_details');
    }
}
