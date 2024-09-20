<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Room extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    \app\Models\Room::create([
        'roomid' => 000,
        'room_typeid' => 000,
        'room_number' => 000,
    ]);
    }
}
