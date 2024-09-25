<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room_type_master;

class Room_type_masterController extends Controller
{
    public function create() {
        return view('room_type_master.create');
    }

    public function store(Request $request) {
        $post = Room_type_master::create([
            'room_type' => $request->room_type,
            'room_name' => $request->room_name,
            'stay_number' => $request->stay_number
        ]);

        return back();
    }
}
