<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silver Arpus</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'fade-in-up': 'fadeInUp 0.8s ease-out',
                        'fade-in-left': 'fadeInLeft 0.8s ease-out',
                        'fade-in-right': 'fadeInRight 0.8s ease-out',
                        'float': 'float 3s ease-in-out infinite',
                        'pulse-glow': 'pulseGlow 2s ease-in-out infinite alternate',
                    },
                    keyframes: {
                        fadeInUp: {
                            '0%': {
                                opacity: '0',
                                transform: 'translateY(30px)'
                            },
                            '100%': {
                                opacity: '1',
                                transform: 'translateY(0)'
                            }
                        },
                        fadeInLeft: {
                            '0%': {
                                opacity: '0',
                                transform: 'translateX(-30px)'
                            },
                            '100%': {
                                opacity: '1',
                                transform: 'translateX(0)'
                            }
                        },
                        fadeInRight: {
                            '0%': {
                                opacity: '0',
                                transform: 'translateX(30px)'
                            },
                            '100%': {
                                opacity: '1',
                                transform: 'translateX(0)'
                            }
                        },
                        float: {
                            '0%, 100%': {
                                transform: 'translateY(0px)'
                            },
                            '50%': {
                                transform: 'translateY(-10px)'
                            }
                        },
                        pulseGlow: {
                            '0%': {
                                boxShadow: '0 0 20px rgba(59, 130, 246, 0.3)'
                            },
                            '100%': {
                                boxShadow: '0 0 40px rgba(59, 130, 246, 0.6)'
                            }
                        }
                    },
                    backdropBlur: {
                        xs: '2px',
                    }
                }
            }
        }
    </script>
    <style>
        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .card-hover {
            transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        .bg-pattern {
            background-image:
                radial-gradient(circle at 25% 25%, rgba(255, 255, 255, 0.1) 2px, transparent 2px),
                radial-gradient(circle at 75% 75%, rgba(255, 255, 255, 0.1) 2px, transparent 2px);
            background-size: 60px 60px;
        }

        .nav-link {
            position: relative;
            transition: all 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #667eea, #764ba2);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .chart-container {
            position: relative;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.9) 0%, rgba(255, 255, 255, 0.7) 100%);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
    </style>
</head>

<body class="bg-gradient-to-br from-indigo-900 via-purple-900 to-pink-900 min-h-screen overflow-x-hidden">
    <!-- Animated Background Elements -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-purple-300 rounded-full opacity-20 animate-pulse"></div>
        <div class="absolute top-40 -left-32 w-64 h-64 bg-indigo-300 rounded-full opacity-20 animate-float"></div>
        <div class="absolute bottom-40 right-20 w-48 h-48 bg-pink-300 rounded-full opacity-20 animate-pulse"></div>
    </div>

    <!-- Navigation -->
    <nav class="z-50 bg-white/10 backdrop-blur-md border-b border-white/20 sticky top-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center space-x-4 animate-fade-in-left">
                    <div
                        class="bg-gradient-to-br from-indigo-500 to-purple-600 p-3 rounded-2xl shadow-lg animate-pulse-glow">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold text-white gradient-text">Silver Arpus</h1>
                        {{-- <p class="text-indigo-200 text-sm font-medium">Sistem Arsip dan Perpustakaan</p> --}}
                    </div>
                </div>
                <div class="hidden md:flex space-x-8 animate-fade-in-right">
                    <a href="/" class="nav-link text-white/80 hover:text-white font-medium">Dashboard</a>
                    <a href="{{ route('layanan') }}"
                        class="nav-link text-white/80 hover:text-white font-medium">Layanan</a>
                    {{-- <a href="#features" class="nav-link text-white/80 hover:text-white font-medium">Fitur</a> --}}
                    <a href="{{ route('kontak') }}"
                        class="nav-link text-white/80 hover:text-white font-medium">Kontak</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative py-32 bg-pattern">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="animate-fade-in-up">
                <h2 class="text-6xl md:text-7xl font-bold text-white mb-8 leading-tight">
                    Selamat Datang di <br>
                    <span
                        class="gradient-text bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent">Silver
                        Arpus</span>
                </h2>
                <p class="text-2xl text-indigo-100 mb-12 max-w-4xl mx-auto leading-relaxed">
                    Platform digital revolusioner yang menghadirkan pengalaman pengelolaan arsip dan perpustakaan dengan
                    teknologi canggih.
                    Nikmati analisis real-time, visualisasi data interaktif, dan manajemen koleksi yang efisien.
                </p>
                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    <button onclick="scrollToSection('dashboard')"
                        class="bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700 text-white text-xl font-bold py-4 px-12 rounded-full shadow-2xl hover:shadow-cyan-500/25 transition-all duration-300 transform hover:scale-105 animate-pulse-glow">
                        Jelajahi Dashboard
                    </button>
                    <button onclick="scrollToSection('services')"
                        class="bg-gradient-to-r from-purple-500 to-pink-600 hover:from-purple-600 hover:to-pink-700 text-white text-xl font-bold py-4 px-12 rounded-full shadow-2xl hover:shadow-purple-500/25 transition-all duration-300 transform hover:scale-105">
                        Layanan Digital
                    </button>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-20 max-w-4xl mx-auto">
                <div class="glass-effect rounded-3xl p-8 card-hover animate-fade-in-left">
                    <div
                        class="text-6xl font-bold text-transparent bg-gradient-to-br from-cyan-400 to-blue-600 bg-clip-text mb-4">
                        12,847
                    </div>
                    <div class="text-white text-xl font-medium">Total Pengunjung</div>
                    <div class="w-full bg-white/20 rounded-full h-2 mt-4">
                        <div class="bg-gradient-to-r from-cyan-400 to-blue-600 h-2 rounded-full w-3/4 animate-pulse">
                        </div>
                    </div>
                </div>
                <div class="glass-effect rounded-3xl p-8 card-hover animate-fade-in-right">
                    <div
                        class="text-6xl font-bold text-transparent bg-gradient-to-br from-purple-400 to-pink-600 bg-clip-text mb-4">
                        8,932
                    </div>
                    <div class="text-white text-xl font-medium">Buku Dipinjam</div>
                    <div class="w-full bg-white/20 rounded-full h-2 mt-4">
                        <div class="bg-gradient-to-r from-purple-400 to-pink-600 h-2 rounded-full w-2/3 animate-pulse">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Digital Services Section -->
    <section id="services" class="relative py-24 bg-gradient-to-b from-white/5 to-transparent">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 animate-fade-in-up">
                <h3 class="text-5xl font-bold text-white mb-6">Layanan Digital Terpadu</h3>
                <p class="text-2xl text-indigo-200 max-w-4xl mx-auto">Akses koleksi digital dan layanan perpustakaan
                    modern dalam satu platform terintegrasi</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Si Booky Card -->
                <div
                    class="glass-effect rounded-3xl p-10 card-hover animate-fade-in-left shadow-2xl relative overflow-hidden">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-purple-400/20 to-pink-400/20 rounded-full -translate-y-16 translate-x-16">
                    </div>
                    <div class="relative z-10">
                        <div class="flex items-center space-x-4 mb-8">
                            <div
                                class="bg-gradient-to-br from-purple-500 to-pink-600 w-20 h-20 rounded-2xl flex items-center justify-center animate-float">
                                <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-3xl font-bold text-white mb-2">Si Booky</h4>
                                <p class="text-purple-200 text-lg">Perpustakaan Digital Kota Semarang</p>
                            </div>
                        </div>

                        <div class="space-y-4 mb-8">
                            <div class="flex items-center space-x-3 text-white">
                                <div class="w-2 h-2 bg-gradient-to-r from-purple-400 to-pink-600 rounded-full"></div>
                                <span class="text-lg">Lebih dari <strong>1,500+ koleksi E-Book</strong></span>
                            </div>
                            <div class="flex items-center space-x-3 text-white">
                                <div class="w-2 h-2 bg-gradient-to-r from-purple-400 to-pink-600 rounded-full"></div>
                                <span class="text-lg">Berbagai kategori: Fiksi, Sains, Sejarah, dll</span>
                            </div>
                            <div class="flex items-center space-x-3 text-white">
                                <div class="w-2 h-2 bg-gradient-to-r from-purple-400 to-pink-600 rounded-full"></div>
                                <span class="text-lg">Akses 24/7 dari smartphone Anda</span>
                            </div>
                            <div class="flex items-center space-x-3 text-white">
                                <div class="w-2 h-2 bg-gradient-to-r from-purple-400 to-pink-600 rounded-full"></div>
                                <span class="text-lg">Sistem DRM untuk keamanan konten</span>
                            </div>
                        </div>

                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="https://sibooky.semarangkota.go.id/" target="_blank"
                                class="flex-1 bg-gradient-to-r from-purple-500 to-pink-600 hover:from-purple-600 hover:to-pink-700 text-white text-lg font-bold py-4 px-8 rounded-2xl shadow-xl hover:shadow-purple-500/25 transition-all duration-300 transform hover:scale-105 text-center">
                                <div class="flex items-center justify-center space-x-2">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" />
                                    </svg>
                                    <span>Akses Si Booky</span>
                                </div>
                            </a>
                            <a href="https://play.google.com/store/apps/details?id=semarangkota.sibooky" target="_blank"
                                class="flex-1 bg-white/20 backdrop-blur-md hover:bg-white/30 text-white text-lg font-bold py-4 px-8 rounded-2xl border border-white/30 hover:border-white/50 transition-all duration-300 transform hover:scale-105 text-center">
                                <div class="flex items-center justify-center space-x-2">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M3,20.5V3.5C3,2.91 3.34,2.39 3.84,2.15L13.69,12L3.84,21.85C3.34,21.61 3,21.09 3,20.5M16.81,15.12L6.05,21.34L14.54,12.85L16.81,15.12M20.16,10.81C20.5,11.08 20.75,11.5 20.75,12C20.75,12.5 20.53,12.9 20.18,13.18L17.89,14.5L15.39,12L17.89,9.5L20.16,10.81M6.05,2.66L16.81,8.88L14.54,11.15L6.05,2.66Z" />
                                    </svg>
                                    <span>Download App</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Portal Perpustakaan Card -->
                <div
                    class="glass-effect rounded-3xl p-10 card-hover animate-fade-in-right shadow-2xl relative overflow-hidden">
                    <div
                        class="absolute top-0 left-0 w-32 h-32 bg-gradient-to-br from-cyan-400/20 to-blue-400/20 rounded-full -translate-y-16 -translate-x-16">
                    </div>
                    <div class="relative z-10">
                        <div class="flex items-center space-x-4 mb-8">
                            <div class="bg-gradient-to-br from-cyan-500 to-blue-600 w-20 h-20 rounded-2xl flex items-center justify-center animate-float"
                                style="animation-delay: 0.5s;">
                                <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-3xl font-bold text-white mb-2">Portal Perpustakaan</h4>
                                <p class="text-cyan-200 text-lg">Sistem Informasi Perpustakaan</p>
                            </div>
                        </div>

                        <div class="space-y-4 mb-8">
                            <div class="flex items-center space-x-3 text-white">
                                <div class="w-2 h-2 bg-gradient-to-r from-cyan-400 to-blue-600 rounded-full"></div>
                                <span class="text-lg">Katalog Online (OPAC) lengkap</span>
                            </div>
                            <div class="flex items-center space-x-3 text-white">
                                <div class="w-2 h-2 bg-gradient-to-r from-cyan-400 to-blue-600 rounded-full"></div>
                                <span class="text-lg">Pendaftaran keanggotaan online</span>
                            </div>
                            <div class="flex items-center space-x-3 text-white">
                                <div class="w-2 h-2 bg-gradient-to-r from-cyan-400 to-blue-600 rounded-full"></div>
                                <span class="text-lg">Layanan peminjaman & pengembalian</span>
                            </div>
                            <div class="flex items-center space-x-3 text-white">
                                <div class="w-2 h-2 bg-gradient-to-r from-cyan-400 to-blue-600 rounded-full"></div>
                                <span class="text-lg">Statistik dan laporan real-time</span>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <a href="https://perpustakaan.semarangkota.go.id/" target="_blank"
                                class="bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700 text-white text-lg font-bold py-4 px-6 rounded-2xl shadow-xl hover:shadow-cyan-500/25 transition-all duration-300 transform hover:scale-105 text-center">
                                <div class="flex items-center justify-center space-x-2">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 2L3 7v11a1 1 0 001 1h12a1 1 0 001-1V7l-7-5z" />
                                    </svg>
                                    <span>Portal</span>
                                </div>
                            </a>
                            <button
                                class="bg-white/20 backdrop-blur-md hover:bg-white/30 text-white text-lg font-bold py-4 px-6 rounded-2xl border border-white/30 hover:border-white/50 transition-all duration-300 transform hover:scale-105">
                                <div class="flex items-center justify-center space-x-2">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                    </svg>
                                    <span>Bantuan</span>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Access Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mt-16">
                <div class="glass-effect rounded-2xl p-6 card-hover animate-fade-in-up shadow-xl"
                    style="animation-delay: 0.1s;">
                    <div class="text-center">
                        <div
                            class="bg-gradient-to-br from-green-500 to-teal-600 w-16 h-16 rounded-xl flex items-center justify-center mb-4 mx-auto">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h5 class="text-xl font-bold text-white mb-2">OPAC</h5>
                        <p class="text-indigo-200 text-sm">Katalog Online</p>
                    </div>
                </div>

                <div class="glass-effect rounded-2xl p-6 card-hover animate-fade-in-up shadow-xl"
                    style="animation-delay: 0.2s;">
                    <div class="text-center">
                        <div
                            class="bg-gradient-to-br from-yellow-500 to-orange-600 w-16 h-16 rounded-xl flex items-center justify-center mb-4 mx-auto">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6z" />
                            </svg>
                        </div>
                        <h5 class="text-xl font-bold text-white mb-2">Keanggotaan</h5>
                        <p class="text-indigo-200 text-sm">Daftar Online</p>
                    </div>
                </div>

                <div class="glass-effect rounded-2xl p-6 card-hover animate-fade-in-up shadow-xl"
                    style="animation-delay: 0.3s;">
                    <div class="text-center">
                        <div
                            class="bg-gradient-to-br from-red-500 to-pink-600 w-16 h-16 rounded-xl flex items-center justify-center mb-4 mx-auto">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4zM18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" />
                            </svg>
                        </div>
                        <h5 class="text-xl font-bold text-white mb-2">Peminjaman</h5>
                        <p class="text-indigo-200 text-sm">Self Service</p>
                    </div>
                </div>

                <div class="glass-effect rounded-2xl p-6 card-hover animate-fade-in-up shadow-xl"
                    style="animation-delay: 0.4s;">
                    <div class="text-center">
                        <div
                            class="bg-gradient-to-br from-indigo-500 to-purple-600 w-16 h-16 rounded-xl flex items-center justify-center mb-4 mx-auto">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z" />
                            </svg>
                        </div>
                        <h5 class="text-xl font-bold text-white mb-2">Statistik</h5>
                        <p class="text-indigo-200 text-sm">Data Real-time</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dashboard Section -->
        <section id="dashboard" class="relative py-24 bg-gradient-to-b from-transparent to-white/5">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16 animate-fade-in-up">
                    <h3 class="text-5xl font-bold text-white mb-6">Dashboard Analitik</h3>
                    <p class="text-2xl text-indigo-200 mb-8">Visualisasi data pengunjung perpustakaan dengan teknologi
                        terdepan</p>

                    <!-- Triwulan Selector -->
                    <div class="inline-block glass-effect rounded-2xl p-6">
                        <form method="GET" class="flex items-center space-x-4">
                            <label class="text-white font-semibold text-lg">Periode Data:</label>
                            <select name="triwulan" id="triwulan" onchange="this.form.submit()"
                                class="bg-white/20 backdrop-blur-md border border-white/30 rounded-xl px-6 py-3 text-white font-medium focus:outline-none focus:ring-2 focus:ring-cyan-400 transition-all">
                                <option value="1" class="text-gray-800">Triwulan 1 (Jan–Mar)</option>
                                <option value="2" class="text-gray-800">Triwulan 2 (Apr–Jun)</option>
                                <option value="3" class="text-gray-800">Triwulan 3 (Jul–Sep)</option>
                                <option value="4" class="text-gray-800">Triwulan 4 (Okt–Des)</option>
                            </select>
                        </form>
                    </div>
                </div>

                <!-- Charts Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 mb-16">
                    <!-- Gender Chart -->
                    <div class="chart-container rounded-3xl p-8 card-hover animate-fade-in-left shadow-2xl">
                        <div class="flex items-center space-x-3 mb-6">
                            <div class="bg-gradient-to-br from-pink-500 to-rose-600 p-3 rounded-xl">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z" />
                                </svg>
                            </div>
                            <h4 class="text-2xl font-bold text-gray-800">Distribusi Gender</h4>
                        </div>
                        <div class="h-64 flex items-center justify-center">
                            <canvas id="genderChart" class="max-w-64 max-h-64"></canvas>
                        </div>
                    </div>

                    <!-- Monthly Trend Chart -->
                    <div class="chart-container rounded-3xl p-8 card-hover animate-fade-in-right shadow-2xl">
                        <div class="flex items-center space-x-3 mb-6">
                            <div class="bg-gradient-to-br from-blue-500 to-indigo-600 p-3 rounded-xl">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                                </svg>
                            </div>
                            <h4 class="text-2xl font-bold text-gray-800">Tren Bulanan</h4>
                        </div>
                        <div class="h-64">
                            <canvas id="monthlyChart" class="w-full h-full"></canvas>
                        </div>
                    </div>

                    <!-- Job Distribution Chart -->
                    <div class="chart-container rounded-3xl p-8 card-hover animate-fade-in-left shadow-2xl">
                        <div class="flex items-center space-x-3 mb-6">
                            <div class="bg-gradient-to-br from-green-500 to-teal-600 p-3 rounded-xl">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                                </svg>
                            </div>
                            <h4 class="text-2xl font-bold text-gray-800">Kategori Pekerjaan</h4>
                        </div>
                        <div class="h-64">
                            <canvas id="jobChart" class="w-full h-full"></canvas>
                        </div>
                    </div>

                    <!-- Book Categories Chart -->
                    <div class="chart-container rounded-3xl p-8 card-hover animate-fade-in-right shadow-2xl">
                        <div class="flex items-center space-x-3 mb-6">
                            <div class="bg-gradient-to-br from-purple-500 to-violet-600 p-3 rounded-xl">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z" />
                                </svg>
                            </div>
                            <h4 class="text-2xl font-bold text-gray-800">Kategori Buku Populer</h4>
                        </div>
                        <div class="h-64">
                            <canvas id="bookChart" class="w-full h-full"></canvas>
                        </div>
                    </div>

                    <!-- Mobile Library Status -->
                    <div class="chart-container rounded-3xl p-8 card-hover animate-fade-in-left shadow-2xl">
                        <div class="flex items-center space-x-3 mb-6">
                            <div class="bg-gradient-to-br from-orange-500 to-red-600 p-3 rounded-xl">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                    <path
                                        d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1V8a1 1 0 00-1-1h-3z" />
                                </svg>
                            </div>
                            <h4 class="text-2xl font-bold text-gray-800">Mobil Pintar</h4>
                        </div>
                        <div class="h-64">
                            <canvas id="liveChart" class="w-full h-full"></canvas>
                        </div>
                    </div>

                    <!-- Member Registration -->
                    <div class="chart-container rounded-3xl p-8 card-hover animate-fade-in-right shadow-2xl">
                        <div class="flex items-center space-x-3 mb-6">
                            <div class="bg-gradient-to-br from-cyan-500 to-blue-600 p-3 rounded-xl">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                                </svg>
                            </div>
                            <h4 class="text-2xl font-bold text-gray-800">Pendaftaran Anggota</h4>
                        </div>
                        <div class="h-64">
                            <canvas id="memberChart" class="w-full h-full"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section id="features" class="py-24 bg-gradient-to-b from-white/5 to-white/10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-20 animate-fade-in-up">
                    <h3 class="text-5xl font-bold text-white mb-6">Fitur Unggulan</h3>
                    <p class="text-2xl text-indigo-200 max-w-3xl mx-auto">Teknologi terdepan untuk mengelola
                        perpustakaan digital masa depan</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                    <div class="glass-effect rounded-3xl p-10 card-hover animate-fade-in-left shadow-2xl">
                        <div
                            class="bg-gradient-to-br from-cyan-500 to-blue-600 w-20 h-20 rounded-2xl flex items-center justify-center mb-8 animate-float">
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z" />
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z" />
                            </svg>
                        </div>
                        <h4 class="text-2xl font-bold text-white mb-4">Analisis Real-time</h4>
                        <p class="text-indigo-200 text-lg leading-relaxed">Pantau statistik pengunjung dan peminjaman
                            buku secara langsung dengan visualisasi data yang interaktif dan dashboard yang responsif.
                        </p>
                    </div>

                    <div class="glass-effect rounded-3xl p-10 card-hover animate-fade-in-up shadow-2xl">
                        <div class="bg-gradient-to-br from-purple-500 to-violet-600 w-20 h-20 rounded-2xl flex items-center justify-center mb-8 animate-float"
                            style="animation-delay: 0.5s;">
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z" />
                            </svg>
                        </div>
                        <h4 class="text-2xl font-bold text-white mb-4">Manajemen Koleksi</h4>
                        <p class="text-indigo-200 text-lg leading-relaxed">Kelola ribuan koleksi buku dengan sistem
                            kategorisasi yang cerdas, pencarian AI, dan manajemen digital yang efisien.</p>
                    </div>

                    <div class="glass-effect rounded-3xl p-10 card-hover animate-fade-in-right shadow-2xl">
                        <div class="bg-gradient-to-br from-pink-500 to-rose-600 w-20 h-20 rounded-2xl flex items-center justify-center mb-8 animate-float"
                            style="animation-delay: 1s;">
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                            </svg>
                        </div>
                        <h4 class="text-2xl font-bold text-white mb-4">Keanggotaan Digital</h4>
                        <p class="text-indigo-200 text-lg leading-relaxed">Sistem pendaftaran anggota terintegrasi
                            dengan layanan peminjaman digital, riwayat kunjungan, dan notifikasi pintar.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-black/20 backdrop-blur-md border-t border-white/10 text-white py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                    <div class="animate-fade-in-left">
                        <div class="flex items-center space-x-4 mb-6">
                            <div class="bg-gradient-to-br from-indigo-500 to-purple-600 p-3 rounded-2xl">
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3z" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold gradient-text">Silver Arpus</h3>
                        </div>
                        <p class="text-indigo-200 leading-relaxed">Platform digital revolusioner untuk manajemen arsip
                            dan
                            perpustakaan yang modern, efisien, dan berkelanjutan.</p>
                    </div>

                    <div class="animate-fade-in-up">
                        <h4 class="text-xl font-bold mb-6 text-white">Navigasi</h4>
                        <ul class="space-y-3 text-indigo-200">
                            <li><a href="{{ url('/') }}" class="hover:text-white transition-colors">Beranda</a>
                            </li>
                            {{-- <li><a href="{{ url('/#dashboard') }}"
                                class="hover:text-white transition-colors">Dashboard</a></li> --}}
                            <li><a href="{{ url('/#services') }}"
                                    class="hover:text-white transition-colors">Layanan</a>
                            </li>
                            <li><a href="{{ url('/kontak') }}" class="hover:text-white transition-colors">Kontak</a>
                            </li>
                        </ul>
                    </div>

                    <div class="animate-fade-in-up">
                        <h4 class="text-xl font-bold mb-6 text-white">Layanan</h4>
                        <ul class="space-y-3 text-indigo-200">
                            <li><a href="https://sibooky.semarangkota.go.id/" target="_blank"
                                    class="hover:text-white transition-colors">Si Booky</a></li>
                            <li><a href="https://perpustakaan.semarangkota.go.id/" target="_blank"
                                    class="hover:text-white transition-colors">Portal Perpustakaan</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">OPAC</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Mobil Pintar</a></li>
                        </ul>
                    </div>

                    <div class="animate-fade-in-right">
                        <h4 class="text-xl font-bold mb-6 text-white">Kontak</h4>
                        <div class="space-y-3 text-indigo-200">
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-cyan-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fillRule="evenodd"
                                        d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                        clipRule="evenodd" />
                                </svg>
                                <span class="text-sm">Jl. Prof. Sudarto No.116 , Sumurboto , Kec. Banyumanik, Kota
                                    Semarang, Jawa Tengah 50269</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-purple-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                </svg>
                                <span class="text-sm">WhatsApp : +6281222233860</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-pink-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
                                <span class="text-sm">dinas_arpus@semarangkota.go.id</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border-t border-white/20 mt-12 pt-8 text-center">
                    <p class="text-indigo-200">© 2025 Silver Arpus. Hak Cipta Dilindungi. Dikembangkan dengan ❤️ untuk
                        masa
                        depan perpustakaan digital.</p>
                </div>
            </div>
        </footer>

        <!-- Chart.js Scripts -->
        <script>
            // Sample data for demonstration
            window.chartData = {
                totalLaki: 5420,
                totalPerempuan: 7427
            };

            window.genderBarChart = {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
                laki: [450, 520, 480, 600, 580, 650],
                perempuan: [620, 580, 700, 750, 680, 720],
            };

            window.jobChart = {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
                pelajar: [200, 220, 250, 280, 260, 300],
                mahasiswa: [350, 380, 400, 420, 400, 450],
                pns: [150, 160, 140, 180, 170, 190],
                umum: [320, 340, 390, 470, 430, 470],
                lainnya: [50, 60, 80, 100, 90, 110],
            };

            window.bookChart = {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
                b000: [50, 60, 55, 70, 65, 80],
                b100: [80, 90, 85, 100, 95, 110],
                b200: [120, 130, 140, 150, 145, 160],
                b300: [200, 220, 210, 240, 230, 250],
                b400: [90, 100, 95, 110, 105, 120],
                b500: [110, 120, 115, 130, 125, 140],
                b600: [70, 80, 75, 90, 85, 100],
                b700: [160, 170, 180, 190, 185, 200],
                b800: [140, 150, 145, 160, 155, 170],
                b900: [100, 110, 105, 120, 115, 130],
                fiksi: [250, 270, 280, 300, 290, 320],
            };

            window.liveChart = {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
                titik_layanan: [12, 12, 13, 13, 14, 15],
                anggota_baru: [25, 30, 28, 35, 32, 40],
                pengunjung: [850, 920, 980, 1050, 1020, 1100],
                buku_yang_dibaca: [950, 1020, 1080, 1150, 1120, 1200],
            };

            window.memberBarChart = {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
                laki: [12, 15, 18, 20, 22, 25],
                perempuan: [13, 16, 19, 22, 24, 28],
            };

            window.monthlyChart = {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
                totals: [1070, 1140, 1190, 1320, 1290, 1370],
            };
        </script>

        <script>
            // Initialize Charts with modern styling
            document.addEventListener('DOMContentLoaded', function() {
                // Gender Distribution Pie Chart
                const genderCtx = document.getElementById('genderChart').getContext('2d');
                new Chart(genderCtx, {
                    type: 'doughnut',
                    data: {
                        labels: ['Laki-laki', 'Perempuan'],
                        datasets: [{
                            data: [window.chartData.totalLaki, window.chartData.totalPerempuan],
                            backgroundColor: [
                                'rgba(59, 130, 246, 0.8)',
                                'rgba(236, 72, 153, 0.8)'
                            ],
                            borderColor: [
                                'rgba(59, 130, 246, 1)',
                                'rgba(236, 72, 153, 1)'
                            ],
                            borderWidth: 3,
                            hoverOffset: 10
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                position: 'bottom',
                                labels: {
                                    font: {
                                        size: 14,
                                        weight: 'bold'
                                    },
                                    padding: 20,
                                    usePointStyle: true,
                                    pointStyle: 'circle'
                                }
                            }
                        },
                        cutout: '60%'
                    }
                });

                // Monthly Trend Line Chart
                const monthlyCtx = document.getElementById('monthlyChart').getContext('2d');
                new Chart(monthlyCtx, {
                    type: 'line',
                    data: {
                        labels: window.monthlyChart.labels,
                        datasets: [{
                            label: 'Total Pengunjung',
                            data: window.monthlyChart.totals,
                            borderColor: 'rgba(59, 130, 246, 1)',
                            backgroundColor: 'rgba(59, 130, 246, 0.1)',
                            borderWidth: 4,
                            fill: true,
                            tension: 0.4,
                            pointBackgroundColor: 'rgba(59, 130, 246, 1)',
                            pointBorderColor: '#fff',
                            pointBorderWidth: 3,
                            pointRadius: 8,
                            pointHoverRadius: 12
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                display: false
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true,
                                grid: {
                                    color: 'rgba(0, 0, 0, 0.1)'
                                },
                                ticks: {
                                    font: {
                                        weight: 'bold'
                                    }
                                }
                            },
                            x: {
                                grid: {
                                    display: false
                                },
                                ticks: {
                                    font: {
                                        weight: 'bold'
                                    }
                                }
                            }
                        }
                    }
                });

                // Job Distribution Bar Chart
                const jobCtx = document.getElementById('jobChart').getContext('2d');
                new Chart(jobCtx, {
                    type: 'bar',
                    data: {
                        labels: window.jobChart.labels,
                        datasets: [{
                                label: 'Pelajar',
                                data: window.jobChart.pelajar,
                                backgroundColor: 'rgba(34, 197, 94, 0.8)',
                                borderColor: 'rgba(34, 197, 94, 1)',
                                borderWidth: 2
                            },
                            {
                                label: 'Mahasiswa',
                                data: window.jobChart.mahasiswa,
                                backgroundColor: 'rgba(59, 130, 246, 0.8)',
                                borderColor: 'rgba(59, 130, 246, 1)',
                                borderWidth: 2
                            },
                            {
                                label: 'PNS',
                                data: window.jobChart.pns,
                                backgroundColor: 'rgba(147, 51, 234, 0.8)',
                                borderColor: 'rgba(147, 51, 234, 1)',
                                borderWidth: 2
                            },
                            {
                                label: 'Umum',
                                data: window.jobChart.umum,
                                backgroundColor: 'rgba(236, 72, 153, 0.8)',
                                borderColor: 'rgba(236, 72, 153, 1)',
                                borderWidth: 2
                            },
                            {
                                label: 'Lainnya',
                                data: window.jobChart.lainnya,
                                backgroundColor: 'rgba(249, 115, 22, 0.8)',
                                borderColor: 'rgba(249, 115, 22, 1)',
                                borderWidth: 2
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                position: 'bottom',
                                labels: {
                                    font: {
                                        size: 12,
                                        weight: 'bold'
                                    },
                                    padding: 15,
                                    usePointStyle: true
                                }
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true,
                                grid: {
                                    color: 'rgba(0, 0, 0, 0.1)'
                                },
                                ticks: {
                                    font: {
                                        weight: 'bold'
                                    }
                                }
                            },
                            x: {
                                grid: {
                                    display: false
                                },
                                ticks: {
                                    font: {
                                        weight: 'bold'
                                    }
                                }
                            }
                        }
                    }
                });

                // Book Categories Radar Chart
                const bookCtx = document.getElementById('bookChart').getContext('2d');
                new Chart(bookCtx, {
                    type: 'polarArea',
                    data: {
                        labels: ['000-Komputer', '100-Filsafat', '200-Agama', '300-Sosial', '400-Bahasa',
                            '500-Sains', '600-Teknologi', '700-Seni', '800-Sastra', '900-Sejarah', 'Fiksi'
                        ],
                        datasets: [{
                            data: [80, 110, 160, 250, 120, 140, 100, 200, 170, 130, 320],
                            backgroundColor: [
                                'rgba(239, 68, 68, 0.7)',
                                'rgba(245, 158, 11, 0.7)',
                                'rgba(34, 197, 94, 0.7)',
                                'rgba(59, 130, 246, 0.7)',
                                'rgba(147, 51, 234, 0.7)',
                                'rgba(236, 72, 153, 0.7)',
                                'rgba(20, 184, 166, 0.7)',
                                'rgba(249, 115, 22, 0.7)',
                                'rgba(168, 85, 247, 0.7)',
                                'rgba(14, 165, 233, 0.7)',
                                'rgba(244, 63, 94, 0.7)'
                            ],
                            borderColor: [
                                'rgba(239, 68, 68, 1)',
                                'rgba(245, 158, 11, 1)',
                                'rgba(34, 197, 94, 1)',
                                'rgba(59, 130, 246, 1)',
                                'rgba(147, 51, 234, 1)',
                                'rgba(236, 72, 153, 1)',
                                'rgba(20, 184, 166, 1)',
                                'rgba(249, 115, 22, 1)',
                                'rgba(168, 85, 247, 1)',
                                'rgba(14, 165, 233, 1)',
                                'rgba(244, 63, 94, 1)'
                            ],
                            borderWidth: 2
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                display: false
                            }
                        },
                        scales: {
                            r: {
                                beginAtZero: true,
                                grid: {
                                    color: 'rgba(0, 0, 0, 0.1)'
                                },
                                ticks: {
                                    display: false
                                },
                                pointLabels: {
                                    font: {
                                        size: 10,
                                        weight: 'bold'
                                    }
                                }
                            }
                        }
                    }
                });

                // Mobile Library Multi-line Chart
                const liveCtx = document.getElementById('liveChart').getContext('2d');
                new Chart(liveCtx, {
                    type: 'line',
                    data: {
                        labels: window.liveChart.labels,
                        datasets: [{
                                label: 'Total Pengunjung',
                                data: window.liveChart.pengunjung,
                                borderColor: 'rgba(59, 130, 246, 1)',
                                backgroundColor: 'rgba(59, 130, 246, 0.1)',
                                borderWidth: 3,
                                tension: 0.4,
                                fill: false
                            },
                            {
                                label: 'Buku Dibaca',
                                data: window.liveChart.buku_yang_dibaca,
                                borderColor: 'rgba(236, 72, 153, 1)',
                                backgroundColor: 'rgba(236, 72, 153, 0.1)',
                                borderWidth: 3,
                                tension: 0.4,
                                fill: false
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                position: 'bottom',
                                labels: {
                                    font: {
                                        size: 12,
                                        weight: 'bold'
                                    },
                                    padding: 15,
                                    usePointStyle: true
                                }
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true,
                                grid: {
                                    color: 'rgba(0, 0, 0, 0.1)'
                                },
                                ticks: {
                                    font: {
                                        weight: 'bold'
                                    }
                                }
                            },
                            x: {
                                grid: {
                                    display: false
                                },
                                ticks: {
                                    font: {
                                        weight: 'bold'
                                    }
                                }
                            }
                        }
                    }
                });

                // Member Registration Bar Chart
                const memberCtx = document.getElementById('memberChart').getContext('2d');
                new Chart(memberCtx, {
                    type: 'bar',
                    data: {
                        labels: window.memberBarChart.labels,
                        datasets: [{
                                label: 'Laki-laki',
                                data: window.memberBarChart.laki,
                                backgroundColor: 'rgba(59, 130, 246, 0.8)',
                                borderColor: 'rgba(59, 130, 246, 1)',
                                borderWidth: 2,
                                borderRadius: 8
                            },
                            {
                                label: 'Perempuan',
                                data: window.memberBarChart.perempuan,
                                backgroundColor: 'rgba(236, 72, 153, 0.8)',
                                borderColor: 'rgba(236, 72, 153, 1)',
                                borderWidth: 2,
                                borderRadius: 8
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                position: 'bottom',
                                labels: {
                                    font: {
                                        size: 12,
                                        weight: 'bold'
                                    },
                                    padding: 15,
                                    usePointStyle: true
                                }
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true,
                                grid: {
                                    color: 'rgba(0, 0, 0, 0.1)'
                                },
                                ticks: {
                                    font: {
                                        weight: 'bold'
                                    }
                                }
                            },
                            x: {
                                grid: {
                                    display: false
                                },
                                ticks: {
                                    font: {
                                        weight: 'bold'
                                    }
                                }
                            }
                        }
                    }
                });
            });

            // Smooth scrolling for navigation links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Function to scroll to section
            function scrollToSection(sectionId) {
                const target = document.getElementById(sectionId);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }

            // Make scrollToSection available globally
            window.scrollToSection = scrollToSection;

            // Add scroll-triggered animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-fade-in-up');
                    }
                });
            }, observerOptions);

            // Observe all chart containers
            document.querySelectorAll('.chart-container').forEach(el => {
                observer.observe(el);
            });
        </script>

</body>
{{--
</html>gradient-to-r from-cyan-400 to-blue-600 rounded-full"></div>
<span>Manajemen Pengunjung Digital</span>
</li>
<li class="flex items-center space-x-3">
    <div class="w-2 h-2 bg-gradient-to-r from-purple-400 to-pink-600 rounded-full"></div>
    <span>Sistem Peminjaman Otomatis</span>
</li>
<li class="flex items-center space-x-3">
    <div class="w-2 h-2 bg-gradient-to-r from-green-400 to-blue-600 rounded-full"></div>
    <span>Analisis Data Real-time</span>
</li>
<li class="flex items-center space-x-3">
    <div class="w-2 h-2 bg- --}}
