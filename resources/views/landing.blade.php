<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silver Arpus - Sistem Arsip dan Perpustakaan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-gradient-to-br from-slate-50 to-slate-200 min-h-screen">
    <!-- Navigation -->
    <nav class="bg-gradient-to-r from-slate-800 to-slate-700 shadow-xl sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-3">
                    <div class="bg-gradient-to-br from-slate-400 to-slate-600 p-2 rounded-lg">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold text-white">Silver Arpus</h1>
                        <p class="text-slate-300 text-sm">Sistem Arsip dan Perpustakaan</p>
                    </div>
                </div>
                <div class="hidden md:flex space-x-6">
                    <a href="#dashboard" class="text-slate-300 hover:text-white transition-colors">Dashboard</a>
                    <a href="#statistics" class="text-slate-300 hover:text-white transition-colors">Statistik</a>
                    <a href="#reports" class="text-slate-300 hover:text-white transition-colors">Laporan</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="py-20 bg-gradient-to-r from-slate-800 via-slate-700 to-slate-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-5xl font-bold text-white mb-6">
                Selamat Datang di <span class="text-slate-300">Silver Arpus</span>
            </h2>
            <p class="text-xl text-slate-200 mb-8 max-w-3xl mx-auto">
                Platform digital yang memudahkan pengelolaan arsip dan perpustakaan dengan teknologi modern.
                Pantau statistik pengunjung, kelola koleksi buku, dan analisis data secara real-time.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-12 mx-auto">
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20">
                    <div class="text-4xl font-bold text-slate-200 mb-2">
                        {{ number_format($totalPengunjung) }}
                    </div>
                    <div class="text-slate-300">Total Pengunjung</div>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20">
                    <div class="text-4xl font-bold text-slate-200 mb-2">
                        {{ number_format($totalBukuPinjam) }}
                    </div>
                    <div class="text-slate-300">Buku Dipinjam</div>
                </div>
                {{-- <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20">
                    <div class="text-4xl font-bold text-slate-200 mb-2">
                        {{ number_format($totalAnggotaBaru) }}
                    </div>
                    <div class="text-slate-300">Anggota Baru</div>
                </div> --}}
            </div>
        </div>
    </section>

    <!-- Statistics Dashboard -->
    <section id="dashboard" class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h3 class="text-4xl font-bold text-slate-800 mb-4">Dashboard Statistik</h3>
                <p class="text-xl text-slate-600">Data pengunjung perpustakaan periode Januari - Maret 2025</p>
            </div>

            <!-- Chart Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
                <!-- Visitor by Gender -->
                <div class="bg-white rounded-2xl shadow-xl p-6 border border-slate-200">
                    <h4 class="text-lg font-semibold text-slate-800 mb-4">Pengunjung Berdasarkan Jenis Kelamin</h4>
                    <div class="h-48 flex items-center justify-center">
                        <canvas id="genderChart" class="max-w-48 max-h-48"></canvas>
                    </div>
                </div>

                <!-- Monthly Visitors -->
                <div class="bg-white rounded-2xl shadow-xl p-6 border border-slate-200">
                    <h4 class="text-lg font-semibold text-slate-800 mb-4">Tren Pengunjung Bulanan</h4>
                    <div class="h-48 flex items-center justify-center">
                        <canvas id="monthlyChart" class="w-full max-h-48"></canvas>
                    </div>
                </div>

                <!-- Visitor by Job -->
                <div class="bg-white rounded-2xl shadow-xl p-6 border border-slate-200">
                    <h4 class="text-lg font-semibold text-slate-800 mb-4">Pengunjung Berdasarkan Pekerjaan</h4>
                    <div class="h-48 flex items-center justify-center">
                        <canvas id="jobChart" class="w-full max-h-48"></canvas>
                    </div>
                </div>

                <!-- Book Categories -->
                <div class="bg-white rounded-2xl shadow-xl p-6 border border-slate-200">
                    <h4 class="text-lg font-semibold text-slate-800 mb-4">Kategori Buku Terpopuler</h4>
                    <div class="h-48 flex items-center justify-center">
                        <canvas id="bookChart" class="max-w-48 max-h-48"></canvas>
                    </div>
                </div>
            </div>

            <!-- Service Stats -->
            <div class="bg-gradient-to-r from-slate-700 to-slate-600 rounded-2xl p-8 text-white">
                <h4 class="text-3xl font-bold mb-8 text-center">Layanan Perpustakaan</h4>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <div class="text-center">
                        <div class="text-3xl font-bold mb-2">71</div>
                        <div class="text-slate-300">Titik Layanan</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold mb-2">15</div>
                        <div class="text-slate-300">Anggota Baru</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold mb-2">10,423</div>
                        <div class="text-slate-300">Total Pengunjung</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold mb-2">11,552</div>
                        <div class="text-slate-300">Buku Dibaca</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h3 class="text-4xl font-bold text-slate-800 mb-4">Fitur Unggulan</h3>
                <p class="text-xl text-slate-600">Kemudahan dalam mengelola perpustakaan modern</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div
                    class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-shadow border border-slate-200">
                    <div
                        class="bg-gradient-to-br from-slate-500 to-slate-600 w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-semibold text-slate-800 mb-4">Analisis Real-time</h4>
                    <p class="text-slate-600">Pantau statistik pengunjung dan peminjaman buku secara langsung dengan
                        visualisasi data yang interaktif.</p>
                </div>

                <div
                    class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-shadow border border-slate-200">
                    <div
                        class="bg-gradient-to-br from-slate-500 to-slate-600 w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-semibold text-slate-800 mb-4">Manajemen Koleksi</h4>
                    <p class="text-slate-600">Kelola ribuan koleksi buku dengan sistem kategorisasi yang mudah dan
                        pencarian yang cepat.</p>
                </div>

                <div
                    class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-shadow border border-slate-200">
                    <div
                        class="bg-gradient-to-br from-slate-500 to-slate-600 w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-semibold text-slate-800 mb-4">Keanggotaan Digital</h4>
                    <p class="text-slate-600">Sistem pendaftaran anggota yang terintegrasi dengan layanan peminjaman
                        dan riwayat kunjungan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-800 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="bg-gradient-to-br from-slate-400 to-slate-600 p-2 rounded-lg">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold">Silver Arpus</h3>
                    </div>
                    <p class="text-slate-400">Platform digital untuk manajemen arsip dan perpustakaan yang modern dan
                        efisien.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Layanan</h4>
                    <ul class="space-y-2 text-slate-400">
                        <li>Manajemen Pengunjung</li>
                        <li>Sistem Peminjaman</li>
                        <li>Analisis Data</li>
                        <li>Laporan Statistik</li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Kontak</h4>
                    <p class="text-slate-400 mb-2">Dinas Arsip dan Perpustakaan</p>
                    <p class="text-slate-400 mb-2">Kota Semarang</p>
                    <p class="text-slate-400">© 2025 Silver Arpus. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        window.chartData = {
            totalLaki: {{ $totalLaki ?? 0 }},
            totalPerempuan: {{ $totalPerempuan ?? 0 }}
        };
    </script>
    <script>
        window.genderBarChart = {
            labels: @json($chartLabels),
            laki: @json($chartLaki),
            perempuan: @json($chartPerempuan),
        };
    </script>
    <script src="{{ asset('customjs/landing.js') }}"></script>
</body>

</html>
