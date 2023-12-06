<?php

namespace Database\Seeders;

use App\Models\Identitassekolah;
use Illuminate\Database\Seeder;

class IdentitassekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Identitassekolah::create([
            "npsn" => 12345,
            "nama_sekolah" => "SMKN 1 DENPASAR",
            "alamat_jalan" => "Jl. Cokroaminoto No.84, Pemecutan Kaja, Kec. Denpasar Utara, Kota Denpasar, Bali 80116",
            "desa" => "Pemecutan Kaja",
            "kecamatan" => "Denpasar Utara",
            "kabupaten" => "Kota Denpasar",
            "kepala_sekolah" => "I Wayan Mustika, S.Pd., M.Pd.",
            "nip" => 54321,
        ]);
    }
}
