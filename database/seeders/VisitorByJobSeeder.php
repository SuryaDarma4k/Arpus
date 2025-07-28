<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VisitorByJobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Trimester I 2025
            [
                'bulan' => 'Januari',
                'tahun' => 2025,
                'pelajar' => 97,
                'mahasiswa' => 296,
                'pns' => 56,
                'umum' => 104,
                'lainnya' => 81,
                'jumlah' => 634,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'bulan' => 'Februari',
                'tahun' => 2025,
                'pelajar' => 98,
                'mahasiswa' => 218,
                'pns' => 23,
                'umum' => 74,
                'lainnya' => 53,
                'jumlah' => 466,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'bulan' => 'Maret',
                'tahun' => 2025,
                'pelajar' => 56,
                'mahasiswa' => 174,
                'pns' => 42,
                'umum' => 125,
                'lainnya' => 29,
                'jumlah' => 426,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Trimester II 2025
            [
                'bulan' => 'April',
                'tahun' => 2025,
                'pelajar' => 68,
                'mahasiswa' => 183,
                'pns' => 30,
                'umum' => 63,
                'lainnya' => 40,
                'jumlah' => 384,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'bulan' => 'Mei',
                'tahun' => 2025,
                'pelajar' => 93,
                'mahasiswa' => 200,
                'pns' => 45,
                'umum' => 124,
                'lainnya' => 43,
                'jumlah' => 505,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'bulan' => 'Juni',
                'tahun' => 2025,
                'pelajar' => 269,
                'mahasiswa' => 341,
                'pns' => 107,
                'umum' => 175,
                'lainnya' => 220,
                'jumlah' => 1112,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('visitor_by_jobs')->insert($data);
    }
}
