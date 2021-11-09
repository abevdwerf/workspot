<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomsController extends Controller
{
    public function findRoom(Request $request)
    {
        $id = $request->route('id');
        $room = Room::find($id);
        return view("workspace", ['room' => $room]);
    }

    public function findRooms()
    {
        //TODO hier moeten nog de gekozen filters bij komen.
        $rooms = Room::all();
        return view("rooms", ['rooms' => $rooms]);
    }
}
