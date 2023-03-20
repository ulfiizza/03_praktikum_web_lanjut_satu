<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profile')->insert([
            'nama' => 'Ulfi Mustatiq Abidatul Izza',
            'nim' => '2141720052',
            'kelas' => 'TI-2H',
            'jurusan' => 'Telnologi Informasi',
            'nomorAbsen' => 29
        ]);
    }
}
