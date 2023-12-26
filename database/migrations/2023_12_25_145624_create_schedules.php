<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bus_id');
            $table->unsignedBigInteger('home_station_id');
            $table->unsignedBigInteger('destination_station_id');
            $table->time('time');
            $table->float('price')->nullable();
            
            $table->timestamps();

            $table->foreign('bus_id')->references('id')->on('buses');
            $table->foreign('home_station_id')->references('id')->on('stations');
            $table->foreign('destination_station_id')->references('id')->on('stations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
