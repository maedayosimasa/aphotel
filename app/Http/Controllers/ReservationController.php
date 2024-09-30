<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    //  reservatuonテーブルのデータをすべて取得
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
        return back();
    }
}
