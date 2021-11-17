<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sensor;
use App\Models\Table;
use App\Models\Room;

class SensorController extends Controller
{
    public function updateMovement(Request $request, $id)
    {
        // dd($request->input('movement'));

        $value = $request->input('movement');
        $sensor = Sensor::find($id);
        $sensor->movement = $value;
        $sensor->save();

        $this->updateTableAvailable($value, $sensor);

        return "gelukt";
    }

    public function updateTableAvailable($value, $sensor)
    {
        // dd($sensor->table_id);
        $table = Table::find($sensor->table_id);
        $room = Room::find($table->room_id);
        $available = $room->seats_available;
        // dd($available);
        if($value) {
            $room->seats_available = $available - 1;
        }
        else {
            $room->seats_available = $room->seats_available + 1;
        }

        $room->save();
    }
}
