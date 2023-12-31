<?php

namespace Database\Seeders;

use App\Models\Countdown;
use Illuminate\Database\Seeder;

class CountdownSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Countdown::create([
            "bulan" => "June",
            "tanggal" => 19,
            "tahun" => 2023,
        ]);
    }
}
