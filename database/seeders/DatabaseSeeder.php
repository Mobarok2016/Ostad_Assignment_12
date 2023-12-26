<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Bus;
use App\Models\Seat;
use App\Models\Station;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // foreach(eticket_stations() as $item){
        //     $station = new Station;
        //     $station->name = $item['name'];
        //     $station->address = $item['address'];
        //     $station->lat = $item['lat'];
        //     $station->lon = $item['lon'];
        //     $station->save();
        // }
        // foreach(eticket_bus() as $item){
        //     $bus = new Bus;
        //     $bus->name = $item['name'];
        //     $bus->date = date('y-m-d',strtotime($item['date']));
        //     $bus->home_station_id = $item['home_station_id'];
        //     $bus->start_time = date('h:i:s',strtotime($item['start_time']));
            
        //     $bus->save();
        // }
        foreach(eticket_seat() as $item){
            $seat = new Seat;
            $seat->name = $item['name'];
            $seat->bus_id = $item['bus_id'];
            
            
            $seat->save();
        }


    }
}
