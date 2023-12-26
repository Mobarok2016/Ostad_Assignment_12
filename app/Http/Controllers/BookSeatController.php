<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Seat;
use Illuminate\Http\Request;

class BookSeatController extends Controller
{
    public function bookSeat(Request $request)

    {

        $bus_name= $request->bus_id;
        $request->validate([
            'bus_id' => 'required',
        ]);

        $bus = Bus::where('name',$bus_name)->first();
        $bus_id= $bus->id;

        // Find an available seat
        $availableSeat = Seat::where('bus_id', $bus_id)
            ->where('booked', 0)
            ->first();
            

        if ($availableSeat) {
            // Book the seat
            $availableSeat->booked = 1;
            $availableSeat->save();

            
            return view('success');
            

        }

        
     }
}
