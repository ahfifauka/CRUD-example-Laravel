<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jurusans = [
            [
                "kode_jurusan"  => "JRG001",
                "nama_jurusan"  => "TKJ",
                "kapasitas_jurusan" => 40
            ],
            [
                "kode_jurusan"  => "JRG021",
                "nama_jurusan"  => "RPL",
                "kapasitas_jurusan" => 40
            ],
            [
                "kode_jurusan"  => "JRG025",
                "nama_jurusan"  => "SI",
                "kapasitas_jurusan" => 30
            ],
        ];

        foreach ($jurusans as $key => $value) {
            Jurusan::create([
                "kode_jurusan"  => $value["kode_jurusan"],
                "nama_jurusan"  => $value["nama_jurusan"],
                "kapasitas_jurusan" => $value["kapasitas_jurusan"],
            ]);
        }
    }
}
