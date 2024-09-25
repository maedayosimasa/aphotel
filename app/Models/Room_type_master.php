<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room_type_master extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_type',
        'room_name',
        'stay_number',
    ];
}
