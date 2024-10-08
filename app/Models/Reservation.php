<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        //外部キーid
        'guest_id',

        'number',
        'inday',
        'outday',
        'reservation_id',
        'room_id',
        'stay_day',
        'stay_prisc',
    ];
    //リレーションの設定guest
    public function guest()
    {
        return $this->belongsTo(Guest::class);
    }
    //roomとの多対多のリレーション
    public function rooms()
    {
        return $this->belongsToMany('App\Models\Room', 'reserv_details', 'reservation_id', 'room_id')->withPivot('stay_day', 'stay_price');
    }
    
}
