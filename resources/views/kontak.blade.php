<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - Silver Arpus</title>
    <script src="https://cdn.tailwindcss.com"></script>
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

        .contact-form {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.15) 0%, rgba(255, 255, 255, 0.05) 100%);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .form-input {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        .form-input:focus {
            background: rgba(255, 255, 255, 0.2);
            border-color: rgba(59, 130, 246, 0.5);
            box-shadow: 0 0 20px rgba(59, 130, 246, 0.3);
        }

        .map-container {
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
                    </div>
                </div>
                <div class="hidden md:flex space-x-8 animate-fade-in-right">
                    <a href="{{ url('/') }}"
                        class="nav-link text-white/80 hover:text-white font-medium">Beranda</a>
                    {{-- <a href="{{ url('/#dashboard') }}"
                        class="nav-link text-white/80 hover:text-white font-medium">Dashboard</a> --}}
                    <a href="{{ url('') }}"
                        class="nav-link text-white/80 hover:text-white font-medium">Layanan</a>
                    <a href="{{ url('/kontak') }}" class="nav-link text-white hover:text-white font-medium">Kontak</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Header Section -->
    <section class="relative py-20 bg-pattern">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="animate-fade-in-up">
                <h2 class="text-5xl md:text-6xl font-bold text-white mb-6 leading-tight">
                    <span
                        class="gradient-text bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent">Hubungi
                        Kami</span>
                </h2>
                <p class="text-xl text-indigo-100 mb-8 max-w-3xl mx-auto leading-relaxed">
                    Kami siap membantu Anda dengan segala pertanyaan dan kebutuhan layanan perpustakaan digital.
                    Jangan ragu untuk menghubungi tim Silver Arpus kapan saja.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Information Cards -->
    <section class="relative py-16 bg-gradient-to-b from-white/5 to-transparent">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <!-- Alamat -->
                <a href="https://www.google.com/maps/place/Dinas+Arsip+dan+Perpustakaan+Kota+Semarang/@-7.0529425,110.4256265,17z/data=!3m1!4b1!4m6!3m5!1s0x2e708b4ddd95603f:0x6b3412e6b2ea1db8!8m2!3d-7.0529425!4d110.4282014!16s%2Fg%2F1pty6hd8q?entry=ttu&g_ep=EgoyMDI1MDcyMy4wIKXMDSoASAFQAw%3D%3D"
                    target="_blank" class="block group transition-transform duration-300 transform hover:scale-105">

                    <div class="glass-effect rounded-3xl p-8 card-hover animate-fade-in-left shadow-2xl text-center">
                        <div
                            class="bg-gradient-to-br from-cyan-500 to-blue-600 w-20 h-20 rounded-2xl flex items-center justify-center mb-6 mx-auto animate-float">
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4">Alamat Kantor</h3>
                        <p class="text-indigo-200 text-lg leading-relaxed">
                            Dinas Arsip dan Perpustakaan<br>
                            Kota Semarang<br>
                            Jl. Prof. Sudarto No.116 , Sumurboto ,<br>
                            Kec. Banyumanik, Kota Semarang, Jawa Tengah 50269<br>
                            Semarang, Jawa Tengah 50241
                        </p>
                    </div>
                </a>

                <!-- Telepon -->
                <div class="glass-effect rounded-3xl p-8 card-hover animate-fade-in-up shadow-2xl text-center">
                    <div class="bg-gradient-to-br from-purple-500 to-pink-600 w-20 h-20 rounded-2xl flex items-center justify-center mb-6 mx-auto animate-float"
                        style="animation-delay: 0.5s;">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Telepon</h3>
                    <p class="text-indigo-200 text-lg leading-relaxed">
                        <a href="tel:+62247601180" class="hover:text-white transition-colors">
                            (024) 7466215
                        </a><br>
                        <a href="https://api.whatsapp.com/send/?phone=6281222233860&text&type=phone_number&app_absent=0"
                            target="_blank" rel="noopener noreferrer" class="text-green-600 hover:underline">
                            WhatsApp : +6281222233860
                        </a><br>
                        <span class="text-lg text-indigo-300">Senin - Jumat: 08:00 - 16:00 WIB</span>
                    </p>
                </div>

                <!-- Email -->
                <div class="glass-effect rounded-3xl p-8 card-hover animate-fade-in-right shadow-2xl text-center">
                    <div class="bg-gradient-to-br from-green-500 to-teal-600 w-20 h-20 rounded-2xl flex items-center justify-center mb-6 mx-auto animate-float"
                        style="animation-delay: 1s;">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Email</h3>
                    <p class="text-indigo-200 text-lg leading-relaxed">
                        <a href="mailto:perpustakaan@semarangkota.go.id" class="hover:text-white transition-colors">
                            dinas_arpus@semarangkota.go.id
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="relative py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="contact-form rounded-3xl p-10 shadow-2xl animate-fade-in-left">
                    <div class="mb-8">
                        <h3 class="text-3xl font-bold text-white mb-4">Kirim Pesan</h3>
                        <p class="text-indigo-200 text-lg">Sampaikan pertanyaan, saran, atau keluhan Anda melalui
                            formulir di bawah ini.</p>
                    </div>

                    <form class="space-y-6" onsubmit="handleSubmit(event)">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-white font-semibold mb-3 text-lg">Nama Lengkap</label>
                                <input type="text" name="nama" required
                                    class="form-input w-full px-6 py-4 rounded-xl text-white placeholder-white/60 focus:outline-none focus:ring-0"
                                    placeholder="Masukkan nama lengkap Anda">
                            </div>
                            <div>
                                <label class="block text-white font-semibold mb-3 text-lg">Email</label>
                                <input type="email" name="email" required
                                    class="form-input w-full px-6 py-4 rounded-xl text-white placeholder-white/60 focus:outline-none focus:ring-0"
                                    placeholder="nama@email.com">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-white font-semibold mb-3 text-lg">Telepon</label>
                                <input type="tel" name="telepon"
                                    class="form-input w-full px-6 py-4 rounded-xl text-white placeholder-white/60 focus:outline-none focus:ring-0"
                                    placeholder="08xxxxxxxxxx">
                            </div>
                            <div>
                                <label class="block text-white font-semibold mb-3 text-lg">Kategori</label>
                                <select name="kategori" required
                                    class="form-input w-full px-6 py-4 rounded-xl text-white focus:outline-none focus:ring-0">
                                    <option value="" class="text-gray-800">Pilih kategori</option>
                                    <option value="pertanyaan" class="text-gray-800">Pertanyaan Umum</option>
                                    <option value="layanan" class="text-gray-800">Layanan Perpustakaan</option>
                                    <option value="teknis" class="text-gray-800">Bantuan Teknis</option>
                                    <option value="keanggotaan" class="text-gray-800">Keanggotaan</option>
                                    <option value="saran" class="text-gray-800">Saran & Kritik</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block text-white font-semibold mb-3 text-lg">Subjek</label>
                            <input type="text" name="subjek" required
                                class="form-input w-full px-6 py-4 rounded-xl text-white placeholder-white/60 focus:outline-none focus:ring-0"
                                placeholder="Subjek pesan Anda">
                        </div>

                        <div>
                            <label class="block text-white font-semibold mb-3 text-lg">Pesan</label>
                            <textarea name="pesan" rows="6" required
                                class="form-input w-full px-6 py-4 rounded-xl text-white placeholder-white/60 focus:outline-none focus:ring-0 resize-none"
                                placeholder="Tuliskan pesan Anda di sini..."></textarea>
                        </div>

                        <button type="submit"
                            class="w-full bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700 text-white text-xl font-bold py-4 px-8 rounded-2xl shadow-2xl hover:shadow-cyan-500/25 transition-all duration-300 transform hover:scale-105 animate-pulse-glow">
                            <div class="flex items-center justify-center space-x-3">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
                                <span>Kirim Pesan</span>
                            </div>
                        </button>
                    </form>
                </div>

                <!-- Map & Additional Info -->
                <div class="space-y-8 animate-fade-in-right">
                    <!-- Map -->
                    <div class="map-container rounded-3xl p-2 shadow-2xl">
                        <div class="w-full h-80 rounded-2xl overflow-hidden">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.627836398766!2d110.42562647499773!3d-7.052942492949377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4ddd95603f%3A0x6b3412e6b2ea1db8!2sDinas%20Arsip%20dan%20Perpustakaan%20Kota%20Semarang!5e0!3m2!1sen!2sid!4v1753702194675!5m2!1sen!2sid"
                                class="w-full h-full border-0" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>

                <!-- Operating Hours -->
                <div class="glass-effect rounded-3xl p-8 card-hover shadow-2xl">
                    <div class="flex items-center space-x-4 mb-6">
                        <div class="bg-gradient-to-br from-orange-500 to-red-600 p-3 rounded-xl">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fillRule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                    clipRule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white">Jam Operasional</h3>
                    </div>
                    <div class="space-y-3 text-indigo-200 text-lg">
                        <div class="flex justify-between">
                            <span>Senin - Kamis</span>
                            <span class="text-white font-semibold">08:00 - 16:00 WIB</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Jumat</span>
                            <span class="text-white font-semibold">08:00 - 11:30 WIB</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Sabtu</span>
                            <span class="text-white font-semibold">08:00 - 14:00 WIB</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Minggu</span>
                            <span class="text-red-400 font-semibold">Tutup</span>
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="glass-effect rounded-3xl p-8 card-hover shadow-2xl">
                    <div class="flex items-center space-x-4 mb-6">
                        <div class="bg-gradient-to-br from-pink-500 to-violet-600 p-3 rounded-xl">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fillRule="evenodd"
                                    d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                    clipRule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white">Media Sosial</h3>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <!-- Facebook -->
                        <a href="https://www.facebook.com/groups/dinasarpus.semarangkota" target="_blank"
                            class="bg-blue-600/20 hover:bg-blue-600/30 backdrop-blur-md border border-blue-500/30 rounded-xl p-4 text-center transition-all duration-300 transform hover:scale-105">
                            <div class="flex justify-center text-blue-500 mb-2">
                                <!-- Facebook SVG -->
                                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M22 12.073C22 6.505 17.523 2 12 2S2 6.505 2 12.073c0 5.003 3.657 9.128 8.438 9.877v-6.987H7.897v-2.89h2.54V9.845c0-2.507 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.47h-1.26c-1.242 0-1.63.771-1.63 1.562v1.875h2.773l-.443 2.89h-2.33v6.987C18.343 21.2 22 17.076 22 12.073z" />
                                </svg>
                            </div>
                            <span class="text-white font-semibold">Facebook</span>
                        </a>

                        <!-- Twitter / X -->
                        <a href="https://x.com/dinarpus_smg" target="_blank"
                            class="bg-black/20 hover:bg-black/30 backdrop-blur-md border border-white/20 rounded-xl p-4 text-center transition-all duration-300 transform hover:scale-105">
                            <div class="flex justify-center text-white mb-2">
                                <!-- X (Twitter) SVG -->
                                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M21.543 2H2.457C1.653 2 1 2.654 1 3.457v17.086C1 21.347 1.653 22 2.457 22h19.086c.804 0 1.457-.653 1.457-1.457V3.457C23 2.654 22.347 2 21.543 2zM16.838 17h-2.003l-3.266-4.756L8.62 17H6.504l4.057-5.87L6.645 7h2.048l2.966 4.33L14.65 7h2.002l-3.905 5.596L16.838 17z" />
                                </svg>
                            </div>
                            <span class="text-white font-semibold">X (Twitter)</span>
                        </a>

                        <!-- Instagram -->
                        <a href="https://www.instagram.com/dinasarpus_semarang/" target="_blank"
                            class="bg-pink-600/20 hover:bg-pink-600/30 backdrop-blur-md border border-pink-500/30 rounded-xl p-4 text-center transition-all duration-300 transform hover:scale-105">
                            <div class="flex justify-center text-pink-400 mb-2">
                                <!-- Instagram SVG -->
                                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M7.5 2C5.015 2 2 5.015 2 7.5v9C2 18.985 5.015 22 7.5 22h9c2.485 0 5.5-3.015 5.5-5.5v-9C22 5.015 18.985 2 16.5 2h-9zm9 1.5c1.934 0 4 2.066 4 4v9c0 1.934-2.066 4-4 4h-9c-1.934 0-4-2.066-4-4v-9c0-1.934 2.066-4 4-4h9zM12 7a5 5 0 100 10 5 5 0 000-10zm0 1.5a3.5 3.5 0 110 7 3.5 3.5 0 010-7zm4.5-.25a1.25 1.25 0 110 2.5 1.25 1.25 0 010-2.5z" />
                                </svg>
                            </div>
                            <span class="text-white font-semibold">Instagram</span>
                        </a>

                        <!-- YouTube -->
                        <a href="https://www.youtube.com/channel/UCKW_vxNCRgWO60Ny1wC_rUQ" target="_blank"
                            class="bg-red-600/20 hover:bg-red-600/30 backdrop-blur-md border border-red-500/30 rounded-xl p-4 text-center transition-all duration-300 transform hover:scale-105">
                            <div class="flex justify-center text-red-500 mb-2">
                                <!-- YouTube SVG -->
                                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M19.615 3.184C20.403 3.413 21 4.106 21 5v14c0 .894-.597 1.587-1.385 1.816C18.617 21 12 21 12 21s-6.617 0-7.615-.184C3.597 20.587 3 19.894 3 19V5c0-.894.597-1.587 1.385-1.816C5.383 3 12 3 12 3s6.617 0 7.615.184zM10 9.5v5l5-2.5-5-2.5z" />
                                </svg>
                            </div>
                            <span class="text-white font-semibold">YouTube</span>
                        </a>
                    </div>
                    <div class="mt-6 text-center">
                        <p class="text-indigo-200 text-lg">Ikuti kami di media sosial untuk update terbaru dan
                            informasi
                            menarik seputar perpustakaan digital.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="relative py-16 bg-gradient-to-b from-white/5 to-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 animate-fade-in-up">
                <h3 class="text-4xl font-bold text-white mb-6">Pertanyaan yang Sering Diajukan</h3>
                <p class="text-xl text-indigo-200 max-w-3xl mx-auto">Temukan jawaban untuk pertanyaan umum seputar
                    layanan Silver Arpus</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="glass-effect rounded-3xl p-8 card-hover animate-fade-in-left shadow-2xl">
                    <h4 class="text-xl font-bold text-white mb-4">Bagaimana cara mendaftar menjadi anggota
                        perpustakaan?</h4>
                    <p class="text-indigo-200 leading-relaxed">Anda dapat mendaftar secara online melalui portal
                        perpustakaan atau langsung datang ke kantor dengan membawa KTP dan foto 3x4.</p>
                </div>

                <div class="glass-effect rounded-3xl p-8 card-hover animate-fade-in-right shadow-2xl">
                    <h4 class="text-xl font-bold text-white mb-4">Apakah layanan Si Booky gratis?</h4>
                    <p class="text-indigo-200 leading-relaxed">Ya, semua layanan Si Booky dapat diakses secara gratis
                        oleh seluruh masyarakat Kota Semarang yang telah terdaftar sebagai anggota.</p>
                </div>

                <div class="glass-effect rounded-3xl p-8 card-hover animate-fade-in-left shadow-2xl">
                    <h4 class="text-xl font-bold text-white mb-4">Berapa lama masa peminjaman buku?</h4>
                    <p class="text-indigo-200 leading-relaxed">Masa peminjaman buku fisik adalah 7 hari dan dapat
                        diperpanjang 1 kali. Untuk e-book melalui Si Booky, masa peminjaman adalah 3 hari.</p>
                </div>

                <div class="glass-effect rounded-3xl p-8 card-hover animate-fade-in-right shadow-2xl">
                    <h4 class="text-xl font-bold text-white mb-4">Bagaimana cara mengakses e-book di Si Booky?</h4>
                    <p class="text-indigo-200 leading-relaxed">Download aplikasi Si Booky di Google Play Store, daftar
                        dengan akun perpustakaan Anda, lalu browse dan pinjam e-book yang diinginkan.</p>
                </div>

                <div class="glass-effect rounded-3xl p-8 card-hover animate-fade-in-left shadow-2xl">
                    <h4 class="text-xl font-bold text-white mb-4">Apakah ada denda keterlambatan?</h4>
                    <p class="text-indigo-200 leading-relaxed">tidak ada denda keterlambatan pengembalian buku Untuk
                        e-book, sistem akan otomatis mengambil kembali akses setelah masa
                        peminjaman berakhir.</p>
                </div>

                <div class="glass-effect rounded-3xl p-8 card-hover animate-fade-in-right shadow-2xl">
                    <h4 class="text-xl font-bold text-white mb-4">Bisakah saya mengakses layanan dari luar Kota
                        Semarang?</h4>
                    <p class="text-indigo-200 leading-relaxed">Layanan digital dapat diakses dari mana saja selama Anda
                        memiliki akun anggota yang valid. Namun, peminjaman buku fisik hanya dapat dilakukan di lokasi
                        perpustakaan.</p>
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
                    <p class="text-indigo-200 leading-relaxed">Platform digital revolusioner untuk manajemen arsip dan
                        perpustakaan yang modern, efisien, dan berkelanjutan.</p>
                </div>

                <div class="animate-fade-in-up">
                    <h4 class="text-xl font-bold mb-6 text-white">Navigasi</h4>
                    <ul class="space-y-3 text-indigo-200">
                        <li><a href="{{ url('/') }}" class="hover:text-white transition-colors">Beranda</a></li>
                        {{-- <li><a href="{{ url('/#dashboard') }}"
                                class="hover:text-white transition-colors">Dashboard</a></li> --}}
                        <li><a href="{{ url('/#services') }}" class="hover:text-white transition-colors">Layanan</a>
                        </li>
                        <li><a href="{{ url('/kontak') }}" class="hover:text-white transition-colors">Kontak</a></li>
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
                <p class="text-indigo-200">© 2025 Silver Arpus. Hak Cipta Dilindungi. Dikembangkan dengan ❤️ untuk masa
                    depan perpustakaan digital.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Handle form submission
        function handleSubmit(event) {
            event.preventDefault();

            // Get form data
            const formData = new FormData(event.target);
            const data = Object.fromEntries(formData);

            // Show loading state
            const submitBtn = event.target.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = `
                <div class="flex items-center justify-center space-x-3">
                    <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    <span>Mengirim...</span>
                </div>
            `;
            submitBtn.disabled = true;

            // Simulate form submission (replace with actual API call)
            setTimeout(() => {
                // Show success message
                showNotification('Pesan berhasil dikirim! Kami akan membalas dalam 1x24 jam.', 'success');

                // Reset form
                event.target.reset();

                // Reset button
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }, 2000);
        }

        // Show notification
        function showNotification(message, type = 'success') {
            const notification = document.createElement('div');
            notification.className = `fixed top-4 right-4 z-50 p-4 rounded-xl shadow-2xl transform translate-x-full transition-transform duration-300 ${
                type === 'success'
                    ? 'bg-green-500/90 backdrop-blur-md border border-green-400/30 text-white'
                    : 'bg-red-500/90 backdrop-blur-md border border-red-400/30 text-white'
            }`;

            notification.innerHTML = `
                <div class="flex items-center space-x-3">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        ${type === 'success'
                            ? '<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />'
                            : '<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />'
                        }
                    </svg>
                    <span>${message}</span>
                    <button onclick="this.parentElement.parentElement.remove()" class="ml-4 hover:opacity-75">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            `;

            document.body.appendChild(notification);

            // Animate in
            setTimeout(() => {
                notification.classList.remove('translate-x-full');
            }, 100);

            // Auto remove after 5 seconds
            setTimeout(() => {
                notification.classList.add('translate-x-full');
                setTimeout(() => {
                    if (notification.parentNode) {
                        notification.remove();
                    }
                }, 300);
            }, 5000);
        }

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

        // Observe all animated elements
        document.querySelectorAll('.animate-fade-in-left, .animate-fade-in-right, .animate-fade-in-up').forEach(el => {
            observer.observe(el);
        });

        // Mobile menu toggle (if needed)
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            if (mobileMenu) {
                mobileMenu.classList.toggle('hidden');
            }
        }

        // Add mobile responsiveness check
        function checkMobile() {
            if (window.innerWidth < 768) {
                // Add mobile-specific styles if needed
                document.body.classList.add('mobile-view');
            } else {
                document.body.classList.remove('mobile-view');
            }
        }

        // Check on load and resize
        window.addEventListener('load', checkMobile);
        window.addEventListener('resize', checkMobile);

        // Add loading animation for external links
        document.querySelectorAll('a[target="_blank"]').forEach(link => {
            link.addEventListener('click', function() {
                this.style.opacity = '0.7';
                setTimeout(() => {
                    this.style.opacity = '1';
                }, 1000);
            });
        });
    </script>

</body>

</html>
