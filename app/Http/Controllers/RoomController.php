<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function create() {
        return view('room.create');
    }
    public function store(Request $request) {
        $post = Room::create([
        'roomid' => $request->roomid,
        'room_typeid' => $request->room_typeid,
        'room_number' => $request->room_number
        ]);
        return back();
    }
}
