<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DirectVisitorSeeder extends Seeder
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
                'titik_layanan' => 24,
                'anggota_baru' => 0,
                'pengunjung' => 4350,
                'buku_yang_dibaca' => 4672,
                'jumlah' => 9046,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'bulan' => 'Februari',
                'tahun' => 2025,
                'titik_layanan' => 34,
                'anggota_baru' => 8,
                'pengunjung' => 4228,
                'buku_yang_dibaca' => 5267,
                'jumlah' => 9537,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'bulan' => 'Maret',
                'tahun' => 2025,
                'titik_layanan' => 13,
                'anggota_baru' => 7,
                'pengunjung' => 1845,
                'buku_yang_dibaca' => 1613,
                'jumlah' => 3478,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Trimester II 2025
            [
                'bulan' => 'April',
                'tahun' => 2025,
                'titik_layanan' => 19,
                'anggota_baru' => 7,
                'pengunjung' => 2774,
                'buku_yang_dibaca' => 3012,
                'jumlah' => 5812,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'bulan' => 'Mei',
                'tahun' => 2025,
                'titik_layanan' => 26,
                'anggota_baru' => 12,
                'pengunjung' => 2703,
                'buku_yang_dibaca' => 2927,
                'jumlah' => 5668,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'bulan' => 'Juni',
                'tahun' => 2025,
                'titik_layanan' => 12,
                'anggota_baru' => 3,
                'pengunjung' => 1815,
                'buku_yang_dibaca' => 2124,
                'jumlah' => 3954,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('direct_visitors')->insert($data);
    }
}
