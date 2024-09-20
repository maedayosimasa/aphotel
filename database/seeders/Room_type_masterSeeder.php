<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Room_type_masterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Room_type_master::create([
            'room_type' => 'test',
            'room_name' => 'test',
            'stay_number' => 0,
        ]);
    }
}
