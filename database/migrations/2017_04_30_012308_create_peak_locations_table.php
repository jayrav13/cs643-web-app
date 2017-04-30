<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeakLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create("peak_locations", function(Blueprint $table) {

            $table->increments("id");
            $table->float("latitude", 8, 6);
            $table->float("longitude", 8, 6);
            $table->integer("count");
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

        Schema::dropIfExists("peak_locations");

    }
}
