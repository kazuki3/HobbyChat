<?php

namespace App\Http\Controllers;

use App\Room;
use App\Contribution;
use Illuminate\Http\Request;
use App\Http\Requests\RoomRequest;
use Illuminate\Support\Facades\Auth;

class RoomController extends Controller
{
    public function index() {
        $rooms = Room::all();
        return view('top', ['rooms' => $rooms]);
    }
    
    public function show($id) {
        $contributions = Contribution::where('room_id', $id)->orderBy('created_at', 'asc')->get();
        return view('thread-space', compact('id'), ['contributions' => $contributions]);
    }

    public function create(RoomRequest $request) {
        $room = new Room();
        $room->room_name = $request->room_name;
        $room->category = $request->category;
        $room->thumbnail = $request->thumbnail->storeAs('public/room_images', Auth::user()->id . '.jpg');
        $room->administrator_id = Auth::user()->id;

        $room->save();

        return redirect('/');
    }
}
