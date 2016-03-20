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

    /*


{
    "c01": "1",
    "c02": "2",
    "c03": "3",
    "c04": "4",
    "c05": "5",
    "c06": "6",
    "c07": "7",
    "c08": "8",
    "c09": "9",
    "c10": "10",
    "c11": "11"
}




{
  "e01": "21",
  "e02": "22",
  "e03": "23",
  "e04": "12",
  "e05": "12",
  "e06": "12",
  "e07": "12",
  "e08": "12",
  "e09": "12",
  "e10": "12",
  "e11": "12",
  "e12": "12",
  "e13": "12",
  "e14": "12",
  "e15": "12",
  "e16": "234",
  "e17": "234",
  "e18": "242",
  "e19": "2423",
  "e20": "242",
  "e21": "244",
  "e22": "234",
  "e23": "244",
  "e24": "234",
  "e25": "24",
  "e26": "24",
  "e27": "234",
  "e28": "24",
  "e29": "24",
  "e30": "234",
  "e31": "234",
  "e32": "234",
  "e33": "23"
}

     * */
}
