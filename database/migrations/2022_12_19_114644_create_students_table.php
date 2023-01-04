<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('student_first_name')->nullable();
            $table->string('student_last_name')->nullable();
            $table->string('student_email');
            $table->string('student_mobile_no');
            $table->string('student_address')->nullable();
            $table->string('student_city')->nullable();
            $table->string('student_state')->nullable();
            $table->string('student_country')->nullable();
            $table->string('student_zipcode')->nullable();
            $table->string('student_course')->nullable();
            $table->string('student_year')->nullable();
            $table->string('student_semester')->nullable();
            $table->string('student_picture')->nullable();
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
        Schema::dropIfExists('students');
    }
};
