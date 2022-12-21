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
        Schema::create('coordinators', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('coordinator_first_name');
            $table->string('coordinator_last_name');
            $table->string('coordinator_email');
            $table->string('coordinator_mobile_no');
            $table->string('coordinator_office_level');
            $table->string('coordinator_office_wing');
            $table->string('coordinator_picture');
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
        Schema::dropIfExists('coordinators');
    }
};
