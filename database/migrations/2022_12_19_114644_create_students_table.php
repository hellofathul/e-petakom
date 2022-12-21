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
            $table->string('student_first_name');
            $table->string('student_last_name');
            $table->string('student_email');
            $table->string('student_mobile_no');
            $table->string('student_address');
            $table->string('student_city');
            $table->string('student_state');
            $table->string('student_zipcode');
            $table->string('student_course');
            $table->string('student_year');
            $table->string('student_semester');
            $table->string('student_picture');
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
