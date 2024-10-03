<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserv_detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'reservation_id',
        'room_id',
        'stay_day',
        'stay_price',
    ];
    //
}
