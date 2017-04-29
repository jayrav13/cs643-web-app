<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('rides', function(Blueprint $table) {

            $table->increments('id');
            $table->string("name");
            $table->string("base");
            $table->string("type");
            $table->dateTime("timestamp");
            $table->float("latitude", 8, 6);
            $table->float("longitude", 8, 6);
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

        Schema::dropIfExists("rides");

    }
}
