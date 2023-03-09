<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pasien>
 */
class PasienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_rekamMedis' => fake()->randomDigit(),
            'nama' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'jenisKelamin' => '1',
            'tempatLahir' => fake()->city(),
            'tanggalLahir' => fake()->date(),
            'umur' => fake()->randomDigit(),
            'nomorTelepon' => fake()->phoneNumber(),
            'alamat' => fake()->address(),
            'pekerjaan' => fake()->company(),
            'kunjungan' => fake()->randomDigit(),
        ];
    }
}
