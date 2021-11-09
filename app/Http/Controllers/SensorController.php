<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sensor;

class SensorController extends Controller
{
    public function updateMovement(Request $request, $id)
    {
        // dd($request->input('movement'));

        $value = $request->input('movement');
        $sensor = Sensor::find($id);
        $sensor->movement = $value;
        $sensor->save();

        return "gelukt";
    }
}
