<?php

namespace Database\Seeders;

use App\Models\Datapilketos;
use Illuminate\Database\Seeder;

class DatapilketosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Datapilketos::create([
            "tahun_ajaran" => 2022,
            "tanggal_dimulai" => "2023-04-29",
        ]);
    }
}
