<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\Reserv_detail;
use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\User;

class ReservationController extends Controller
{
    //  一覧表reservatuonテーブルのデータをすべて取得
    public function index()
    {
        $posts = Reservation::all();
        return view('reservation.index', compact('posts'));
    }


    public function create()
    {
        return view('reservation.create');
    }
    public function store(Request $request)
    {
        $post = Reservation::create([
            'guest_id' => $request->guest_id,
            'number' => $request->number,
            'inday' => $request->inday,
            'outday' => $request->outday
        ]);
        $request->session()->flush('message','保存しました');
        return back()->with('message','保存しました');
    }

      //予約管理表の入力設定management
    public function management(){
   
        $user = User::find(auth()->id());
        // dump($user->name);
        return view('reservation.management', ['guest_id' => $user->name]);
    }
    public function store_manag(Request $request){
        $post = Reservation::create([
            //'guest_id' => $request->guest_id,
            'number' => $request->number,
            'inday' => $request->inday,
            'outday' => $request->outday
        ]);
        $post = Reserv_detail::create([
            'reservation_id' =>$request->reservation_id,
            'room_id' =>$request->room_id,
            'stay_day' =>$request->stay_day,
            'stay_price' =>$request->stay_price
        ]);
        
        $request->session()->flush('message', '保存しました');
        return back()->with('message', '保存しました');
        }
        

}
