<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\JadwalPerkuliahan;

class JadwalPerkuliahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jadwal_perkuliahan')->insert([
            [
                'id' => 1,
                'namaMatkul' => 'Analisis dan Desain Berorientasi Objek',
                'namaDosen' => 'Eka Larasati Amalia, S.ST., MT.',
                'hari' => 'Rabu',
            ],
            [
                'id' => 2,
                'namaMatkul' => 'Bussiness Intelligence',
                'namaDosen' => 'Banni Satria Andoko, S.Kom., M.MSI., Dr.Eng.',
                'hari' => 'Kamis',
            ],
            [
                'id' => 3,
                'namaMatkul' => 'Jaringan Komputer',
                'namaDosen' => 'Arief Prasetyo, S.Kom., M.Kom.',
                'hari' => 'Senin',
            ],
            [
                'id' => 4,
                'namaMatkul' => 'Kewarganegaraan',
                'namaDosen' => 'Widaningsih Condrowardhani, SH, MH.',
                'hari' => 'Selasa',
            ],
            [
                'id' => 5,
                'namaMatkul' => 'Manajemen Proyek',
                'namaDosen' => 'Candrasena Setiadai, ST., M.MT',
                'hari' => 'Selasa',
            ],
            [
                'id' => 6,
                'namaMatkul' => 'Pemrograman Web Lanjut',
                'namaDosen' => 'Endah Septa Sintiya. Spd., MKom.',
                'hari' => 'Kamis',
            ],
            [
                'id' => 7,
                'namaMatkul' => 'Praktikum Jaringan Komputer',
                'namaDosen' => 'Arief Prasetyo, S.Kom., M.Kom',
                'hari' => 'Kamis',
            ],
            [
                'id' => 8,
                'namaMatkul' => 'Proyek 1',
                'namaDosen' => 'Luqman Affandi, S.Kom., MMSI',
                'hari' => 'Senin',
            ],
            [
                'id' => 9,
                'namaMatkul' => 'Statistik Komputasi',
                'namaDosen' => 'Septian Enggar Sukmana, S.Pd., M.T',
                'hari' => 'Kamis',
            ]
        ]);
    }
}
