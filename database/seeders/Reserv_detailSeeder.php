<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Reserv_detailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Resrv_detail::create([
            'reserv_detail' => 000,
            'reservid' => 000,
            'roomid' => 000,
            'stay_day' => 2019_08_19,
            'stay_praice' => 000,

        ]);
    }
}
