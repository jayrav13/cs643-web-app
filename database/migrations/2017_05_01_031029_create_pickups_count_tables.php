<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePickupsCountTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create("uber_pickups_dates", function(Blueprint $table) {

            $table->increments("id");
            $table->dateTime("timestamp");
            $table->bigInteger("count")->default(0)->unsigned();
            $table->timestamps();

        });

        Schema::create("lyft_pickups_dates", function(Blueprint $table) {

            $table->increments("id");
            $table->dateTime("timestamp");
            $table->bigInteger("count")->default(0)->unsigned();
            $table->timestamps();

        });

        Schema::create("fhv_pickups_dates", function(Blueprint $table) {

            $table->increments("id");
            $table->dateTime("timestamp");
            $table->bigInteger("count")->default(0)->unsigned();
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

        Schema::dropIfExists("uber_pickups_dates");
        Schema::dropIfExists("lyft_pickups_dates");
        Schema::dropIfExists("fhv_pickups_dates");

    }
}
