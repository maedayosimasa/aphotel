<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;
//use App\Models\Guest;

class GuestController extends Controller
{
    //一覧画面作成
    public function index(){
        $posts = Guest::all();
        return view('guest.index', compact('posts'));
    }

    public function create()
    {
        return view('guest.create');
    }
    public function store(Request $request) {
        $post = Guest::create([
            'username' => $request->username,
            'address' => $request->address,
            'tel' => $request->tel
        ]);
        return back();
    }
}
