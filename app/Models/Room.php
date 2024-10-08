<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_type_master_id',
        'room_number',
    ];
    //リレーションの設定Room_type_master
    public function Room_type_master()
    {
        return $this->belongsTo(Room_type_master::class);
    }
    //reservationとの多対多のリレーション
    public function Reservations()
    {
        return $this->belongsToMany('App\Models\Reservation', 'reserv_details', 'room_id', 'reservation_id')->withPivot('stay_day', 'stay_price');
    }
}
