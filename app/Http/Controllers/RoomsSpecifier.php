<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Location;

class RoomsSpecifier extends Controller
{
    public function specifyRooms ()
    {
        $rooms = Room::all();
        $locations = Location::all();

        $locationId =  $_GET["location"];
        $numberOfPeople = $_GET["numberOfPeople"];

        $filterDeskSpace = $_GET["filterDeskPlace"];
        $filterSilentRoom = $_GET["filterSilentRoom"];
        $filterMeetingRoom = $_GET["filterMeetingRoom"];

        $filters = [
            0 => $filterDeskSpace,
            1 => $filterSilentRoom,
            2 => $filterMeetingRoom
        ];
        $specifiedRooms = array();

        foreach ($rooms as $key => $room) {
            if (in_array($room["type"], $filters)) {
                if ($room["location_id"] == $locationId) {
                    array_push($specifiedRooms, $room);
                }
            }
        }

        echo json_encode($specifiedRooms);
    }
}
?>