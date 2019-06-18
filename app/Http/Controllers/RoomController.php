<?php

namespace App\Http\Controllers;

use App\Room;
use App\Http\Requests\RoomRequest;

class RoomController extends Controller
{
    public function create(RoomRequest $request) {
        $room = new Room();
        $room->room_name = $request->room_name;
        $room->category = $request->category;
        $room->thumbnail = $request->thubnail;
        $room->administrator = Auth::usre()->id;

        $room->save();

        return redirect()->route('/');
    }
}
