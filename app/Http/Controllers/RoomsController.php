<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Location;

class RoomsController extends Controller
{
    public function findRoom(Request $request)
    {
        $id = $request->route('id');
        $room = Room::find($id);
        return view("workspace", ['room' => $room]);
    }

    public function findRooms (Request $request) {
        $rooms = Room::all();
        $locations = Location::all();

        $locationId =  $request->input('locationId');
        $numberOfPeople = $request->input('numberOfPeople');

        $filters = [
            0 => $request->input('filter-desk'),
            1 => $request->input('filter-silent'),
            2 => $request->input('filter-meeting')
        ];
        $specifiedRooms = array();

        foreach ($rooms as $key => $room) {
            if ($room["location_id"] == $locationId) {
                if (in_array($room["type"], $filters)) {
                    if ($room["seats_available"] >= $numberOfPeople) {
                        array_push($specifiedRooms, $room);
                    }
                }
            }
        }

        return view("rooms", ['rooms' => $specifiedRooms]);
    }

    public function specifyRooms ()
    {
        $rooms = Room::all();
        $locations = Location::all();

        $locationId =  $_GET["location"];
        $numberOfPeople = $_GET["numberOfPeople"];

        $filters = [
            0 => $_GET["filterDeskPlace"],
            1 => $_GET["filterSilentRoom"],
            2 => $_GET["filterMeetingRoom"]
        ];
        $specifiedRooms = array();

        foreach ($rooms as $key => $room) {
            if ($room["location_id"] == $locationId) {
                if (in_array($room["type"], $filters)) {
                    if ($room["seats_available"] >= $numberOfPeople) {
                        array_push($specifiedRooms, $room);
                    }
                }
            }
        }

        echo json_encode($specifiedRooms);
    }
}
