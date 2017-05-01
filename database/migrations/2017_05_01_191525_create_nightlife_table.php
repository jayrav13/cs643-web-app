<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNightlifeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create("nightlife", function(Blueprint $table) {

            $table->increments("id");
            $table->dateTime("timestamp");
            $table->float("latitude", 8, 6);
            $table->float("longitude", 8, 6);
            $table->bigInteger("count")->default(0);
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

        Schema::dropIfExists("nightlife");

    }
}
