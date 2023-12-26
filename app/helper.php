<?php 
use App\Models\Schedule;

 function eticket_stations(){
    $stations = [
        [
        "name"=>"Dhaka",
        "address"=>"Dhaka",
        "lat"=>23.777176,
        "lon"=>90.399452
        ],
        [
        "name"=>"Comilla",
        "address"=>"Comilla",
        "lat"=>23.450001,
        "lon"=>91.199997
        ],
        [
        "name"=>"Chittagong",
        "address"=>"Chittagong",
        "lat"=> 22.341900,
        "lon"=>91.815536
        ],
        [
        "name"=>"Cox's bazar",
        "address"=>"Cox's bazar",
        "lat"=>21.56406260,
        "lon"=>92.02821290
        ],
    ];

    return $stations;

}

function eticket_bus(){
    return [
        [
            "name"=>"BUS-001",
            "date"=>"2023-12-26",
            "home_station_id"=>1,
            "start_time"=>"08:00",

        ],
        [
            "name"=>"BUS-002",
            "date"=>"2023-12-26",
            "home_station_id"=>1,
            "start_time"=>"12:00",

        ],
    ];
}

function eticket_seat(){
    return [
        [
            "name"=>"A-1",
            "bus_id"=> 1
        ],
        [
            "name"=>"A-2",
            "bus_id"=> 1
        ],
        [
            "name"=>"A-3",
            "bus_id"=> 1
        ],
        [
            "name"=>"A-4",
            "bus_id"=> 1
        ],
        [
            "name"=>"B-1",
            "bus_id"=> 1
        ],
        [
            "name"=>"B-2",
            "bus_id"=> 1
        ],
        [
            "name"=>"B-3",
            "bus_id"=> 1
        ],
        [
            "name"=>"B-4",
            "bus_id"=> 1
        ],
        [
            "name"=>"C-1",
            "bus_id"=> 1
        ],
        [
            "name"=>"C-2",
            "bus_id"=> 1
        ],
        [
            "name"=>"C-3",
            "bus_id"=> 1
        ],
        [
            "name"=>"C-4",
            "bus_id"=> 1
        ],
        [
            "name"=>"D-1",
            "bus_id"=> 1
        ],
        [
            "name"=>"D-2",
            "bus_id"=> 1
        ],
        [
            "name"=>"D-3",
            "bus_id"=> 1
        ],
        [
            "name"=>"D-4",
            "bus_id"=> 1
        ],
        [
            "name"=>"E-1",
            "bus_id"=> 1
        ],
        [
            "name"=>"E-2",
            "bus_id"=> 1
        ],
        [
            "name"=>"E-3",
            "bus_id"=> 1
        ],
        [
            "name"=>"E-4",
            "bus_id"=> 1
        ],
        [
            "name"=>"F-1",
            "bus_id"=> 1
        ],
        [
            "name"=>"F-2",
            "bus_id"=> 1
        ],
        [
            "name"=>"F-3",
            "bus_id"=> 1
        ],
        [
            "name"=>"F-4",
            "bus_id"=> 1
        ],
        [
            "name"=>"G-1",
            "bus_id"=> 1
        ],
        [
            "name"=>"G-2",
            "bus_id"=> 1
        ],
        [
            "name"=>"G-3",
            "bus_id"=> 1
        ],
        [
            "name"=>"G-4",
            "bus_id"=> 1
        ],
        [
            "name"=>"H-1",
            "bus_id"=> 1
        ],
        [
            "name"=>"H-2",
            "bus_id"=> 1
        ],
        [
            "name"=>"H-3",
            "bus_id"=> 1
        ],
        [
            "name"=>"H-4",
            "bus_id"=> 1
        ],
        [
            "name"=>"I-1",
            "bus_id"=> 1
        ],
        [
            "name"=>"I-2",
            "bus_id"=> 1
        ],
        [
            "name"=>"I-3",
            "bus_id"=> 1
        ],
        [
            "name"=>"I-4",
            "bus_id"=> 1
        ],
        [
            "name"=>"A-1",
            "bus_id"=> 2
        ],
        [
            "name"=>"A-2",
            "bus_id"=> 2
        ],
        [
            "name"=>"A-3",
            "bus_id"=> 2
        ],
        [
            "name"=>"A-4",
            "bus_id"=> 2
        ],
        [
            "name"=>"B-1",
            "bus_id"=> 2
        ],
        [
            "name"=>"B-2",
            "bus_id"=>2
        ],
        [
            "name"=>"B-3",
            "bus_id"=> 2
        ],
        [
            "name"=>"B-4",
            "bus_id"=> 2
        ],
        [
            "name"=>"C-1",
            "bus_id"=> 2
        ],
        [
            "name"=>"C-2",
            "bus_id"=> 2
        ],
        [
            "name"=>"C-3",
            "bus_id"=> 2
        ],
        [
            "name"=>"C-4",
            "bus_id"=> 2
        ],
        [
            "name"=>"D-1",
            "bus_id"=> 2
        ],
        [
            "name"=>"D-2",
            "bus_id"=> 2
        ],
        [
            "name"=>"D-3",
            "bus_id"=> 2
        ],
        [
            "name"=>"D-4",
            "bus_id"=> 2
        ],
        [
            "name"=>"E-1",
            "bus_id"=> 2
        ],
        [
            "name"=>"E-2",
            "bus_id"=> 2
        ],
        [
            "name"=>"E-3",
            "bus_id"=> 2
        ],
        [
            "name"=>"E-4",
            "bus_id"=> 2
        ],
        [
            "name"=>"F-1",
            "bus_id"=> 2
        ],
        [
            "name"=>"F-2",
            "bus_id"=> 2
        ],
        [
            "name"=>"F-3",
            "bus_id"=> 2
        ],
        [
            "name"=>"F-4",
            "bus_id"=> 2
        ],
        [
            "name"=>"G-1",
            "bus_id"=> 2
        ],
        [
            "name"=>"G-2",
            "bus_id"=> 2
        ],
        [
            "name"=>"G-3",
            "bus_id"=> 2
        ],
        [
            "name"=>"G-4",
            "bus_id"=> 2
        ],
        [
            "name"=>"H-1",
            "bus_id"=> 2
        ],
        [
            "name"=>"H-2",
            "bus_id"=> 2
        ],
        [
            "name"=>"H-3",
            "bus_id"=> 2
        ],
        [
            "name"=>"H-4",
            "bus_id"=> 2
        ],
        [
            "name"=>"I-1",
            "bus_id"=> 2
        ],
        [
            "name"=>"I-2",
            "bus_id"=> 2
        ],
        [
            "name"=>"I-3",
            "bus_id"=> 2
        ],
        [
            "name"=>"I-4",
            "bus_id"=> 2
        ],
        
        
    ];
}

