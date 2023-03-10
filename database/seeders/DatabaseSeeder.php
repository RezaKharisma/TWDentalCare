<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Diagnosis;
use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Perawat;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'username' => 'rezaKP',
            'email' => 'reza@gmail.com',
            'password' => bcrypt('12345'),
            'level' => 'Admin'
        ]);

        Dokter::factory(5)->create();
        Perawat::factory(5)->create();
        Pasien::factory(10)->create();
        Diagnosis::factory(20)->create();
    }
}
