<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MembershipRegistrationSeeder extends Seeder
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
                'laki_laki' => 27,
                'perempuan' => 7,
                'jumlah' => 34,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'bulan' => 'Februari',
                'tahun' => 2025,
                'laki_laki' => 60,
                'perempuan' => 16,
                'jumlah' => 76,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'bulan' => 'Maret',
                'tahun' => 2025,
                'laki_laki' => 11,
                'perempuan' => 29,
                'jumlah' => 40,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Trimester II 2025
            [
                'bulan' => 'April',
                'tahun' => 2025,
                'laki_laki' => 12,
                'perempuan' => 13,
                'jumlah' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'bulan' => 'Mei',
                'tahun' => 2025,
                'laki_laki' => 26,
                'perempuan' => 20,
                'jumlah' => 46,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'bulan' => 'Juni',
                'tahun' => 2025,
                'laki_laki' => 12,
                'perempuan' => 13,
                'jumlah' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('membership_registrations')->insert($data);
    }
}
