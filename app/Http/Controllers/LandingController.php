<?php

namespace App\Http\Controllers;

use App\Models\DirectVisitor;
use App\Models\MembershipRegistration;
use App\Models\VisitorByGender;
use App\Models\VisitorByBookType;
use App\Models\VisitorByJob;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $triwulan = request('triwulan', 1); // default: triwulan 1

        $bulanPerTriwulan = [
            1 => ['Januari', 'Februari', 'Maret'],
            2 => ['April', 'Mei', 'Juni'],
            3 => ['Juli', 'Agustus', 'September'],
            4 => ['Oktober', 'November', 'Desember'],
        ];

        $bulanFilter = $bulanPerTriwulan[$triwulan] ?? $bulanPerTriwulan[1];

        $totalPengunjung = VisitorByGender::sum('total');
        $totalBukuPinjam = VisitorByBookType::sum('jumlah');
        $totalAnggotaBaru = MembershipRegistration::sum('jumlah');

        // Ambil data pengunjung laki-laki & perempuan per bulan
        $genderMonthly = VisitorByGender::whereIn('bulan', $bulanFilter)
            ->orderByRaw("FIELD(bulan, 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 
                          'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember')")
            ->get(['bulan', 'laki_laki', 'perempuan']);

        // Pisahkan label dan data ke dalam array untuk Chart.js
        $chartLabels = $genderMonthly->pluck('bulan');
        $chartLaki = $genderMonthly->pluck('laki_laki');
        $chartPerempuan = $genderMonthly->pluck('perempuan');

        $jobMonthly = VisitorByJob::whereIn('bulan', $bulanFilter)
            ->orderByRaw("FIELD(bulan, 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                  'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember')")
            ->get(['bulan', 'pelajar', 'mahasiswa', 'pns', 'umum', 'lainnya']);

        $bookMonthly = VisitorByBookType::whereIn('bulan', $bulanFilter)
            ->orderByRaw("FIELD(bulan, 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                  'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember')")
            ->get(['bulan', '000', '100', '200', '300', '400', '500', '600', '700', '800', '900', 'fiksi']);

        $liveMonthly = DirectVisitor::whereIn('bulan', $bulanFilter)
            ->orderByRaw("FIELD(bulan, 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                  'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember')")
            ->get(['bulan', 'titik_layanan', 'anggota_baru', 'pengunjung', 'buku_yang_dibaca']);

        $memberMonthly = MembershipRegistration::whereIn('bulan', $bulanFilter)
            ->orderByRaw("FIELD(bulan, 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 
                          'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember')")
            ->get(['bulan', 'laki_laki', 'perempuan']);
        $memberLabels = $memberMonthly->pluck('bulan');
        $memberLaki = $memberMonthly->pluck('laki_laki');
        $memberPerempuan = $memberMonthly->pluck('perempuan');

        $monthlyVisitors = VisitorByGender::whereIn('bulan', $bulanFilter)
            ->orderByRaw("FIELD(bulan, 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
          'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember')")
          ->get(['bulan', 'total']);

        return view('landing', [
            'totalPengunjung' => $totalPengunjung,
            'totalBukuPinjam' => $totalBukuPinjam,
            // 'totalAnggotaBaru' => $totalAnggotaBaru,

            'chartLabels' => $chartLabels,
            'chartLaki' => $chartLaki,
            'chartPerempuan' => $chartPerempuan,

            'jobLabels' => $jobMonthly->pluck('bulan'),
            'jobPelajar' => $jobMonthly->pluck('pelajar'),
            'jobMahasiswa' => $jobMonthly->pluck('mahasiswa'),
            'jobPns' => $jobMonthly->pluck('pns'),
            'jobUmum' => $jobMonthly->pluck('umum'),
            'jobLainnya' => $jobMonthly->pluck('lainnya'),

            'bookLabels' => $bookMonthly->pluck('bulan'),
            'book000' => $bookMonthly->pluck('000'),
            'book100' => $bookMonthly->pluck('100'),
            'book200' => $bookMonthly->pluck('200'),
            'book300' => $bookMonthly->pluck('300'),
            'book400' => $bookMonthly->pluck('400'),
            'book500' => $bookMonthly->pluck('500'),
            'book600' => $bookMonthly->pluck('600'),
            'book700' => $bookMonthly->pluck('700'),
            'book800' => $bookMonthly->pluck('800'),
            'book900' => $bookMonthly->pluck('900'),
            'bookFiksi' => $bookMonthly->pluck('fiksi'),

            'liveLabels' => $liveMonthly->pluck('bulan'),
            'liveTitikLayanan' => $liveMonthly->pluck('titik_layanan'),
            'liveAnggotaBaru' => $liveMonthly->pluck('anggota_baru'),
            'livePengunjung' => $liveMonthly->pluck('pengunjung'),
            'liveUmum' => $liveMonthly->pluck('umum'),
            'liveBukuYangDibaca' => $liveMonthly->pluck('buku_yang_dibaca'),

            'memberLabels' => $memberLabels,
            'memberLaki' => $memberLaki,
            'memberPerempuan' => $memberPerempuan,

            'monthlyLabels' => $monthlyVisitors->pluck('bulan'),
            'monthlyTotals' => $monthlyVisitors->pluck('total'),
        ]);
    }
}
