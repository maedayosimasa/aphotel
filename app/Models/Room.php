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
    public function Room_type_master(){
        return $this->belongsTo(Room_type_master::class);
    }
}
