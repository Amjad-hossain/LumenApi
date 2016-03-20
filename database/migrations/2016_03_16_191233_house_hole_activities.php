<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HouseHoleActivities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('house_hold_activities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('household_unique_code')->unique();
            $table->string('name');
            $table->string('sex');
            $table->timestamp('date_of_birth');
            $table->string('maritial_status');
            $table->string('education');
            $table->string('relation_with_hh');
            $table->string('occupasion');
            $table->string('smoking');
            $table->string('bettle_nut_chew');
            $table->string('swimming');
            $table->string('responder');
            $table->string('injury_last_six');
            $table->string('how_many_injury_last_six');
            $table->string('interviewer_code');
            $table->string('c01');
            $table->string('c02');
            $table->string('c03');
            $table->string('c04');
            $table->string('c05');
            $table->string('c06');
            $table->string('c07');
            $table->string('c08');
            $table->string('c09');
            $table->string('c10');
            $table->string('c11');
            $table->string('e01');
            $table->string('e02');
            $table->string('e03');
            $table->string('e04');
            $table->string('e05');
            $table->string('e06');
            $table->string('e07');
            $table->string('e08');
            $table->string('e09');
            $table->string('e10');
            $table->string('e11');
            $table->string('e12');
            $table->string('e13');
            $table->string('e14');
            $table->string('e15');
            $table->string('e16');
            $table->string('e17');
            $table->string('e18');
            $table->string('e19');
            $table->string('e20');
            $table->string('e21');
            $table->string('e22');
            $table->string('e23');
            $table->string('e24');
            $table->string('e25');
            $table->string('e26');
            $table->string('e27');
            $table->string('e28');
            $table->string('e29');
            $table->string('e30');
            $table->string('e31');
            $table->string('e32');
            $table->string('e33');
            $table->string('g01');
            $table->string('g02');
            $table->string('g03');
            $table->primary('id');
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
        Schema::drop('house_hold_activities');
    }
}
