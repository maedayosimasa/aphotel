<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
  use HasFactory;

  protected $fillable = [
    'username',
    'address',
    'tel',
  ];
//リレーションの設定
  public function reservations()
  {
    return $this->hasMany(Reservation::class);
  }
}
