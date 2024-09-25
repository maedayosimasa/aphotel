<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserv_detail;

class Reserv_detailController extends Controller
{
    public function create() {
        return view('reserv_detail.create');
    }
    public function store(Request $request) {
        $post = Reserv_detail::create([
            'reserv_detail' => $request->reserv_detail,
            'reservid' => $request->reservid,
            'roomid' => $request->roomid,
            'stay_day' => $request->stay_day,
            'stay_price' => $request->stay_price
        ]);
    }
}
