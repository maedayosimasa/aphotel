<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;



class GuestController extends Controller
{
    //一覧画面作成
    public function index()
    {
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
        $request->session()->flush('message', '保存しました');
        return back()->with('message','保存しました');
    }

    //managementからguest_id入力時guestへ移動し、入力を返す
    public function select(){
        $guests = Guest::all();
        return view('guest.create', ['guests'=> $guests]);
        
    }
}
