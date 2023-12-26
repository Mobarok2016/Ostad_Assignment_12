<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Seat;
use App\Models\Schedule;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function check(Request $request){
        $request->validate([
            "from"=>"required",
            "to"=>"required",
            "doj"=>"required",
        ]);
        


        $data = [];
        

        $buses = Bus::where('date',$request->doj)->get();
        foreach($buses as $bus ){
            // checking available schedule
            $schedule = Schedule::where('home_station_id',$request->from)->where('destination_station_id',$request->to)->where("bus_id",$bus->id)->first();

            // checking available seats

            $seatsAvailable = Seat::where('bus_id',$bus->id)
                ->where('booked',0)->get();

            // checking bus fare

            $fare = Schedule::select('price')->where('home_station_id',$request->from)->where('destination_station_id',$request->to)->first();
            
            if(!empty($schedule)){
                $data[] = [
                    "bus_name"=> $bus->name,
                    "bus_route"=> "test route",
                    "dep_time"=> date("F j,Y",strtotime($bus->date))."-".date("h:i:a",strtotime($schedule->time)),
                    "seats_available"=> count($seatsAvailable),
                    "fare"=>$fare->price
                    
                ];

            

            }
        }

        



        
        return view('show',compact('data'));
    }

    
}
