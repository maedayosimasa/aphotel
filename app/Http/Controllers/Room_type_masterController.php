<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Room_type_masterController extends Controller
{
    public function create() {
        return view('room_type_master.create');
    }
}
