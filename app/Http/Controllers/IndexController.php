<?php

namespace App\Http\Controllers;

use App\Models\Location;

class IndexController extends Controller
{
    public function allLocations()
    {

        $locations = Location::all();

        return view("index", ['locations' => $locations]);
    }
}
