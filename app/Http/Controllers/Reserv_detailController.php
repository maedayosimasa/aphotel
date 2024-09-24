<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Reserv_detailController extends Controller
{
    public function create() {
        return view('reserv_detail.create');
    }
}
