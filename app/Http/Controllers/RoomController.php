<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
//roomテーブルのデーターすべて取得
    public function index() {
        $posts = Room::all();
        return view('room.index', compact('posts'));
    }

    public function create() {
        return view('room.create');
    }
    public function store(Request $request) {
        $post = Room::create([
        'room_type_master_id' => $request->room_type_master_id,
        'room_number' => $request->room_number
        ]);
        $request->session()->flush('message', '保存しました');
        return back()->with('message','保存しました');
    }
}
