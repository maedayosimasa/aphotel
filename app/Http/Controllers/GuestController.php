<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;
//use App\Models\Guest;

class GuestController extends Controller
{
    public function create()
    {
        return view('guest.create');
    }
    public function store(Request $request) {
        $post = Guest::create([
            'username' => $request->username,
            'address' => $request->address,
            'tel' => $request->tel,
        ]);
        return back();
    }
}
