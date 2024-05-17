<?php

namespace Database\Seeders;

use App\Models\Pendaftaran;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $faker = Faker::create('id_Id');
        for ($i = 0; $i <= 30; $i++) {
            $name = $faker->firstName() . " " . $faker->lastName();
            Pendaftaran::create([
                "nama_lengkap"  => $name,
                "sekolah_asal"  => "SMK " . $faker->sentence(1),
                "alamat"        => $faker->address(),
                "jurusan"       => "SI"
            ]);
        }
    }
}
