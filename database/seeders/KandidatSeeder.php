<?php

namespace Database\Seeders;

use App\Models\Kandidat;
use Illuminate\Database\Seeder;

class KandidatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kandidat::create([
            "nisn" => 29689,
            "no" => 1,
            "nama" => "I Putu Adi Saputra",
            "foto" => "adi.jpg",
            "dipilih" => 0,
            "nama_panggilan" => "Adi",
            "visi_misi" => "Halo",
        ]);
        Kandidat::create([
            "nisn" => 29686,
            "no" => 2,
            "nama" => "I Kadek Laba Adi Pramana",
            "foto" => "labe.jpg",
            "dipilih" => 0,
            "nama_panggilan" => "Laba",
            "visi_misi" => "Halo",
        ]);
    }
}
