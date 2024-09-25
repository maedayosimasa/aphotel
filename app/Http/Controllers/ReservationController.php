<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
//  \reservatuonテーブルのデータをすべて取得
    public function index() {
        $post=Reservation::all();
        return view('reservation.index', compact('reservations'));
    }
    public function create(){
        return view('reservation.create');
    }
    public function store(Request $request) {
        $post = Reservation::create([
            'userid' => $request->userid,
            'number' => $request->number,
            'inday' => $request->inday,
            'outday' => $request->outday
        ]);
      //  $validated['userid'] = auth()->id();
    }
}
