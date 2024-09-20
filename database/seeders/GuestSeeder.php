<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     \App\Models\Guest::create ([
        'username' => 'testtest',
        'address' => 'testtest',
        'tel' => 000-000-0000,
     ]);
     
    }
}
