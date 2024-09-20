<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Reservation::create([
        'userid' => 0000,
        'number' => 0000,
        'inday' => '2024-08-28',
        'outday' => '2024-08-28',
     ]);
    }
}
