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
        Schema::create('committees', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('committee_first_name');
            $table->string('committee_last_name');
            $table->string('committee_email');
            $table->string('committee_mobile_no');
            $table->string('committee_address');
            $table->string('committee_city');
            $table->string('committee_state');
            $table->string('committee_zipcode');
            $table->string('committee_course');
            $table->string('committee_year');
            $table->string('committee_semester');
            $table->string('committee_picture');
            $table->string('committee_position');
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
        Schema::dropIfExists('committees');
    }
};
