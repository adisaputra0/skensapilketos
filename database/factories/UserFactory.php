<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nisn = random_int(100000, 999999);
        $jk = ['laki-laki', 'perempuan'];
        $kelas = ['X RPL 1', 'XI RPL 1', 'XII RPL 1'];
        return [
            'nama' => fake()->name(),
            'username' => $nisn,
            'username_verified_at' => now(),
            'password' => Hash::make($nisn),
            'jenis_kelamin' => $jk[mt_rand(0, 1)],
            'kelas' => $kelas[mt_rand(0, 2)],
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's username address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'username_verified_at' => null,
        ]);
    }
}
