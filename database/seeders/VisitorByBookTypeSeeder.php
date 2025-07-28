<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VisitorByBookTypeSeeder extends Seeder
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
                '000' => 7,
                '100' => 7,
                '200' => 10,
                '300' => 17,
                '400' => 6,
                '500' => 5,
                '600' => 9,
                '700' => 38,
                '800' => 82,
                '900' => 5,
                'fiksi' => 1,
                'jumlah' => 187,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'bulan' => 'Februari',
                'tahun' => 2025,
                '000' => 5,
                '100' => 6,
                '200' => 14,
                '300' => 13,
                '400' => 2,
                '500' => 5,
                '600' => 6,
                '700' => 23,
                '800' => 58,
                '900' => 5,
                'fiksi' => 4,
                'jumlah' => 141,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'bulan' => 'Maret',
                'tahun' => 2025,
                '000' => 7,
                '100' => 3,
                '200' => 17,
                '300' => 8,
                '400' => 3,
                '500' => 4,
                '600' => 5,
                '700' => 19,
                '800' => 46,
                '900' => 9,
                'fiksi' => 4,
                'jumlah' => 125,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Trimester II 2025
            [
                'bulan' => 'April',
                'tahun' => 2025,
                '000' => 0,
                '100' => 16,
                '200' => 19,
                '300' => 12,
                '400' => 3,
                '500' => 2,
                '600' => 4,
                '700' => 11,
                '800' => 53,
                '900' => 6,
                'fiksi' => 0,
                'jumlah' => 126,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'bulan' => 'Mei',
                'tahun' => 2025,
                '000' => 3,
                '100' => 5,
                '200' => 17,
                '300' => 29,
                '400' => 7,
                '500' => 14,
                '600' => 18,
                '700' => 25,
                '800' => 67,
                '900' => 7,
                'fiksi' => 1,
                'jumlah' => 193,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'bulan' => 'Juni',
                'tahun' => 2025,
                '000' => 2,
                '100' => 13,
                '200' => 14,
                '300' => 40,
                '400' => 6,
                '500' => 12,
                '600' => 17,
                '700' => 32,
                '800' => 81,
                '900' => 17,
                'fiksi' => 0,
                'jumlah' => 234,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('visitor_by_book_types')->insert($data);
    }
}
