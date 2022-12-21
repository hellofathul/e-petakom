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
        Schema::create('lecturers', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('lecturer_first_name');
            $table->string('lecturer_last_name');
            $table->string('lecturer_email');
            $table->string('lecturer_mobile_no');
            $table->string('lecturer_office_level');
            $table->string('lecturer_office_wing');
            $table->string('lecturer_picture');
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
        Schema::dropIfExists('lecturers');
    }
};
