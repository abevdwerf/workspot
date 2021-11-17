<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Room;

class IndexController extends Controller
{
    public function beforeIndex()
    {
        $locations = Location::all();
        $rooms = Room::all();

        $data = array(
            'locations' => $locations,
            'rooms' => $rooms
        );
        // dd($rooms);
        return view("index")->with($data);
    }
}
