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
        // $validated = $request->validate([
        //     'username' => 'required|max:20',
        //     'address' => 'required|max20',
        //     'tel' => 'required|max20',
        // ]);
        // $post = Guest::create($validated);
        
        $post = Guest::create([
            'username' => $request->username,
            'address' => $request->address,
            'tel' => $request->tel
        ]);
        $request->session()->flash('message', '保存しました');
        return back()->with('message','保存しました');
    }
}
