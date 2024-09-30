<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room_type_master;

class Room_type_masterController extends Controller
{
    //一覧表すべてのデータ取得
    public function index(){
        $posts = Room_type_master::all();
        return view('room_type_master.index', compact('posts'));
    }

    
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
