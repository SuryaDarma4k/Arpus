<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VisitorByGenderSeeder extends Seeder
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
                'laki_laki' => 289,
                'perempuan' => 345,
                'total' => 634,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'bulan' => 'Februari',
                'tahun' => 2025,
                'laki_laki' => 184,
                'perempuan' => 282,
                'total' => 466,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'bulan' => 'Maret',
                'tahun' => 2025,
                'laki_laki' => 167,
                'perempuan' => 259,
                'total' => 426,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Trimester II 2025
            [
                'bulan' => 'April',
                'tahun' => 2025,
                'laki_laki' => 155,
                'perempuan' => 229,
                'total' => 384,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'bulan' => 'Mei',
                'tahun' => 2025,
                'laki_laki' => 187,
                'perempuan' => 318,
                'total' => 505,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'bulan' => 'Juni',
                'tahun' => 2025,
                'laki_laki' => 414,
                'perempuan' => 698,
                'total' => 1112,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('visitor_by_genders')->insert($data);
    }
}
