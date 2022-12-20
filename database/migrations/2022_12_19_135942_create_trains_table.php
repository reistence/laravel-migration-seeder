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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 50);
            $table->string('departure_station', 80);
            $table->string('arrival_station', 80);
            $table->dateTime('departures_schedule')->format('hh:mm');
            $table->dateTime('arrivals_schedule');
            $table->string('train_code');
            $table->integer('coaches_nr')->unsigned();
            $table->tinyInteger('on_schedule')->unsigned()->default(1);
            $table->tinyInteger('canceled')->unsigned()->default(0);
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
        Schema::dropIfExists('trains');
    }
};
