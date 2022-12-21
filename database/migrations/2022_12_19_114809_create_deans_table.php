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
        Schema::create('deans', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('dean_first_name');
            $table->string('dean_last_name');
            $table->string('dean_email');
            $table->string('dean_mobile_no');
            $table->string('dean_office_level');
            $table->string('dean_office_wing');
            $table->string('dean_picture');
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
        Schema::dropIfExists('deans');
    }
};
