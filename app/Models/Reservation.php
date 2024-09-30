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
    ];
//リレーションの設定
    public function guest() {
        return $this->belongsTo(Guest::class);
    }
}
