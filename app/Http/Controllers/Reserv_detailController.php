<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserv_detail;

class Reserv_detailController extends Controller
{
    //一覧表ですべてのデータ取得
public function index(){
    $posts = Reserv_detail::all();
    return view('reserv_detail.index', compact('posts'));
}

    public function create() {
        return view('reserv_detail.create');
    }
    public function store(Request $request) {
        $post = Reserv_detail::create([
            'reservation_id' => $request->reservation_id,
            //'reservid' => $request->reservid,
            'room_id' => $request->room_id,
            'stay_day' => $request->stay_day,
            'stay_price' => $request->stay_price
        ]);
        $request->session()->flush('massage','保存しました');
        return back()->with('message','保存しました');
    }
}
