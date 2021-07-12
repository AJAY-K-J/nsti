<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMultipleColumns2ToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('fatherGuardianName')->nullable();
            $table->string('motherName')->nullable();
            $table->string('gender')->nullable();
            $table->string('category')->nullable();
            $table->string('physicallyHandicapped')->nullable();
            $table->string('traineeType')->nullable();
            $table->string('employeeCodePEN')->nullable();
            $table->string('aadharNumber')->nullable();
            $table->string('maritalStatus')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['fatherGuardianName','motherName','gender','category','physicallyHandicapped','traineeType','employeeCodePEN','aadharNumber','maritalStatus',]);
        });
    }
}
