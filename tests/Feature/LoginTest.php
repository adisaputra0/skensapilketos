<?php

namespace Tests\Feature;

use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     */

    // use RefreshDatabase;
    // use WithFaker;
    // public function setUp(): void
    // {
    //     parent::setUp();
    //     Countdown::create([
    //         "bulan" => "June",
    //         "tanggal" => 19,
    //         "tahun" => 2023,
    //     ]);
    //     Datapilketos::create([
    //         "tahun_ajaran" => 2022,
    //         "tanggal_dimulai" => "2023-04-29",
    //     ]);
    //     Identitassekolah::create([
    //         "npsn" => 12345,
    //         "nama_sekolah" => "SMKN 1 DENPASAR",
    //         "alamat_jalan" => "Jl. Cokroaminoto No.84, Pemecutan Kaja, Kec. Denpasar Utara, Kota Denpasar, Bali 80116",
    //         "desa" => "Pemecutan Kaja",
    //         "kecamatan" => "Denpasar Utara",
    //         "kabupaten" => "Kota Denpasar",
    //         "kepala_sekolah" => "I Wayan Mustika, S.Pd., M.Pd.",
    //         "nip" => 54321,
    //     ]);
    //     Kandidat::create([
    //         "nisn" => 29689,
    //         "no" => 1,
    //         "nama" => "I Putu Adi Saputra",
    //         "foto" => "adi.jpg",
    //         "dipilih" => 0,
    //         "nama_panggilan" => "Adi",
    //         "visi_misi" => "Halo",
    //     ]);
    //     // $admin = User::create([
    //     //     'name' => 'Adi Saputra',
    //     //     'email' => 'adi@gmail.com',
    //     //     'password' => '12345678',
    //     //     'role' => 1,
    //     // ]);
    //     // $this->actingAs($admin);
    // }

    // //Akses Halaman login
    // public function test_can_access_login_admin_page(): void
    // {
    //     $response = $this->get('/login_admin');
    //     $response->assertStatus(200);
    // }
    // public function test_can_access_login_user_page(): void
    // {
    //     $response = $this->get('/login_user');
    //     $response->assertStatus(200);
    // }

    // //Login
    // public function test_can_login_as_admin(): void
    // {
    //     $user = User::create([
    //         'nama' => "test",
    //         'username' => "test",
    //         'username_verified_at' => now(),
    //         'password' => Hash::make("testjaya"),
    //         'jenis_kelamin' => "-",
    //         'kelas' => "-",
    //         'role' => "1",
    //         "hadir" => "-",
    //         'remember_token' => Str::random(10),
    //     ]);
    //     $value = [
    //         "username" => $user->username,
    //         "password" => $user->password,
    //     ];
    //     $response = $this->post('/login_admin', $value);
    //     $response->assertStatus(302);
    // }
}
