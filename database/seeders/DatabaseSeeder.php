<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'nama' => "admin",
            'username' => "admin",
            'username_verified_at' => now(),
            'password' => Hash::make("skensajaya"),
            'jenis_kelamin' => "-",
            'kelas' => "-",
            'role' => "1",
            "hadir" => "-",
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nama' => "admin2",
            'username' => "admin2",
            'username_verified_at' => now(),
            'password' => Hash::make("skensajaya"),
            'jenis_kelamin' => "-",
            'kelas' => "-",
            'role' => "1",
            "hadir" => "-",
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nama' => "admin3",
            'username' => "admin3",
            'username_verified_at' => now(),
            'password' => Hash::make("skensajaya"),
            'jenis_kelamin' => "-",
            'kelas' => "-",
            'role' => "1",
            "hadir" => "-",
            'remember_token' => Str::random(10),
        ]);
        User::factory(10)->create();
        $this->call(CountdownSeeder::class);
        $this->call(KandidatSeeder::class);
        $this->call(KelasSeeder::class);
        $this->call(IdentitassekolahSeeder::class);
    }
}
