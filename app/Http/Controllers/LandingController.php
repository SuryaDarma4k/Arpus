<?php

namespace App\Http\Controllers;

use App\Models\MembershipRegistration;
use App\Models\VisitorByGender;
use App\Models\VisitorByBookType;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $totalPengunjung = VisitorByGender::sum('total');
        $totalBukuPinjam = VisitorByBookType::sum('jumlah');
        $totalAnggotaBaru = MembershipRegistration::sum('jumlah');

        // Ambil data pengunjung laki-laki & perempuan per bulan
        $genderMonthly = VisitorByGender::orderByRaw("
            FIELD(bulan, 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 
                          'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember')
        ")->get(['bulan', 'laki_laki', 'perempuan']);

        // Pisahkan label dan data ke dalam array untuk Chart.js
        $chartLabels = $genderMonthly->pluck('bulan');
        $chartLaki = $genderMonthly->pluck('laki_laki');
        $chartPerempuan = $genderMonthly->pluck('perempuan');


        return view('landing', [
            'totalPengunjung' => $totalPengunjung,
            'totalBukuPinjam' => $totalBukuPinjam,
            // 'totalAnggotaBaru' => $totalAnggotaBaru,

            'chartLabels' => $chartLabels,
            'chartLaki' => $chartLaki,
            'chartPerempuan' => $chartPerempuan,
        ]);
    }
}
