<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Perawat>
 */
class PerawatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_user' => fake()->randomDigit(),
            'nama' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'jenisKelamin' => '1',
            'tempatLahir' => fake()->city(),
            'tanggalLahir' => fake()->date(),
            'umur' => fake()->randomDigit(),
            'agama' => 'Hindu',
            'nomorTelepon' => fake()->phoneNumber(),
            'alamat' => fake()->address(),
            'pendidikan' => fake()->company(),
            'foto' => fake()->image(),
            'status' => 'Aktif',
        ];
    }
}
