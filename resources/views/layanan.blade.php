<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Digital - Silver Arpus</title>
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
                        'zoom-in': 'zoomIn 0.6s ease-out',
                        'slide-up': 'slideUp 0.8s ease-out',
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
                        },
                        zoomIn: {
                            '0%': {
                                opacity: '0',
                                transform: 'scale(0.5)'
                            },
                            '100%': {
                                opacity: '1',
                                transform: 'scale(1)'
                            }
                        },
                        slideUp: {
                            '0%': {
                                opacity: '0',
                                transform: 'translateY(50px)'
                            },
                            '100%': {
                                opacity: '1',
                                transform: 'translateY(0)'
                            }
                        }

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
            transform: translateY(-12px) scale(1.02);
            box-shadow: 0 30px 60px -12px rgba(0, 0, 0, 0.25);
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

        .service-card {
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: left 0.6s ease;
        }

        .service-card:hover::before {
            left: 100%;
        }

        .feature-icon {
            transition: all 0.3s ease;
        }

        .feature-card:hover .feature-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .hero-bg {
            background: linear-gradient(135deg, rgba(79, 70, 229, 0.1), rgba(147, 51, 234, 0.1)),
                url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="0.5"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');

            .click-counter {
                background: linear-gradient(135deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.7));
                backdrop-filter: blur(12px);
                border: 1px solid rgba(255, 255, 255, 0.2);
                box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                transform: scale(0.95);
                opacity: 0.8;
            }

            .click-counter:hover {
                transform: scale(1);
                opacity: 1;
                box-shadow: 0 12px 40px rgba(0, 0, 0, 0.4);
                background: linear-gradient(135deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8));
            }

            .click-counter.animate-click {
                animation: counterPulse 0.6s ease-out;
            }

            .counter-number {
                font-weight: 700;
                font-size: 0.875rem;
                min-width: 20px;
                text-align: center;
                transition: all 0.3s ease;
            }

            .counter-icon {
                transition: all 0.3s ease;
            }

            .click-counter:hover .counter-icon {
                transform: scale(1.1);
                filter: drop-shadow(0 0 8px rgba(255, 255, 255, 0.3));
            }

            .click-counter:hover .counter-number {
                color: #ffffff;
                text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
            }

            /* Service-specific counter colors */
            .sibooky-counter {
                background: linear-gradient(135deg, rgba(147, 51, 234, 0.3), rgba(219, 39, 119, 0.3));
                border-color: rgba(147, 51, 234, 0.4);
            }

            .sibooky-counter:hover {
                background: linear-gradient(135deg, rgba(147, 51, 234, 0.5), rgba(219, 39, 119, 0.5));
                box-shadow: 0 12px 40px rgba(147, 51, 234, 0.3);
            }

            .portal-counter {
                background: linear-gradient(135deg, rgba(6, 182, 212, 0.3), rgba(37, 99, 235, 0.3));
                border-color: rgba(6, 182, 212, 0.4);
            }

            .portal-counter:hover {
                background: linear-gradient(135deg, rgba(6, 182, 212, 0.5), rgba(37, 99, 235, 0.5));
                box-shadow: 0 12px 40px rgba(6, 182, 212, 0.3);
            }

            .sibuca-counter {
                background: linear-gradient(135deg, rgba(34, 197, 94, 0.3), rgba(20, 184, 166, 0.3));
                border-color: rgba(34, 197, 94, 0.4);
            }

            .sibuca-counter:hover {
                background: linear-gradient(135deg, rgba(34, 197, 94, 0.5), rgba(20, 184, 166, 0.5));
                box-shadow: 0 12px 40px rgba(34, 197, 94, 0.3);
            }

            /* Counter pulse animation */
            @keyframes counterPulse {
                0% {
                    transform: scale(0.95);
                }

                50% {
                    transform: scale(1.1);
                    box-shadow: 0 0 30px rgba(255, 255, 255, 0.3);
                }

                100% {
                    transform: scale(1);
                }
            }

            /* Number increment animation */
            @keyframes numberBounce {
                0% {
                    transform: translateY(0);
                }

                50% {
                    transform: translateY(-3px) scale(1.1);
                    color: #fbbf24;
                    text-shadow: 0 0 15px rgba(251, 191, 36, 0.8);
                }

                100% {
                    transform: translateY(0) scale(1);
                }
            }

            .counter-number.animate-increment {
                animation: numberBounce 0.5s ease-out;
            }

            /* Floating notification for milestone achievements */
            .milestone-notification {
                position: absolute;
                top: -40px;
                right: 0;
                background: linear-gradient(135deg, #fbbf24, #f59e0b);
                color: white;
                padding: 8px 16px;
                border-radius: 20px;
                font-size: 0.75rem;
                font-weight: bold;
                box-shadow: 0 8px 25px rgba(251, 191, 36, 0.4);
                animation: milestoneFloat 3s ease-out forwards;
                pointer-events: none;
                z-index: 1000;
            }

            @keyframes milestoneFloat {
                0% {
                    opacity: 0;
                    transform: translateY(20px) scale(0.8);
                }

                20% {
                    opacity: 1;
                    transform: translateY(-10px) scale(1.1);
                }

                80% {
                    opacity: 1;
                    transform: translateY(-30px) scale(1);
                }

                100% {
                    opacity: 0;
                    transform: translateY(-50px) scale(0.9);
                }
            }
        }
    </style>
</head>

<body class="bg-gradient-to-br from-indigo-900 via-purple-900 to-pink-900 min-h-screen overflow-x-hidden">
    <!-- Animated Background Elements -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-purple-300 rounded-full opacity-20 animate-pulse"></div>
        <div class="absolute top-40 -left-32 w-64 h-64 bg-indigo-300 rounded-full opacity-20 animate-float"></div>
        <div class="absolute bottom-40 right-20 w-48 h-48 bg-pink-300 rounded-full opacity-20 animate-pulse"></div>
        <div class="absolute top-1/2 left-1/2 w-32 h-32 bg-cyan-300 rounded-full opacity-10 animate-float"
            style="animation-delay: 1s;"></div>
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
                        <p class="text-indigo-200 text-sm font-medium">Layanan Digital Terpadu</p>
                    </div>
                </div>
                <div class="hidden md:flex space-x-8 animate-fade-in-right">
                    <a href="{{ url('/') }}"
                        class="nav-link text-white/80 hover:text-white font-medium">Dashboard</a>
                    <a href="#services"
                        class="nav-link text-white hover:text-white font-medium border-b-2 border-white">Layanan</a>
                    <a href="{{ url('/kontak') }}"
                        class="nav-link text-white/80 hover:text-white font-medium">Kontak</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero" class="relative py-24 hero-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="animate-fade-in-up">
                <h2 class="text-6xl md:text-7xl font-bold text-white mb-8 leading-tight">
                    Layanan Digital
                    <br>
                    <span
                        class="gradient-text bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent">Terpadu</span>
                </h2>
                <p class="text-2xl text-indigo-100 mb-12 max-w-4xl mx-auto leading-relaxed">
                    Nikmati pengalaman digital yang lengkap dengan tiga layanan unggulan kami: Si Booky untuk e-book,
                    Portal Perpustakaan untuk layanan terpadu, dan SiBuCa untuk cerita interaktif.
                </p>

                <!-- Service Stats -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-16 max-w-6xl mx-auto">
                    <div class="glass-effect rounded-3xl p-8 card-hover animate-zoom-in">
                        <div
                            class="text-5xl font-bold text-transparent bg-gradient-to-br from-cyan-400 to-blue-600 bg-clip-text mb-4">
                            1,500+
                        </div>
                        <div class="text-white text-xl font-medium">E-Book Tersedia</div>
                        <div class="w-full bg-white/20 rounded-full h-2 mt-4">
                            <div
                                class="bg-gradient-to-r from-cyan-400 to-blue-600 h-2 rounded-full w-4/5 animate-pulse">
                            </div>
                        </div>
                    </div>
                    <div class="glass-effect rounded-3xl p-8 card-hover animate-zoom-in" style="animation-delay: 0.2s;">
                        <div
                            class="text-5xl font-bold text-transparent bg-gradient-to-br from-purple-400 to-pink-600 bg-clip-text mb-4">
                            24/7
                        </div>
                        <div class="text-white text-xl font-medium">Akses Online</div>
                        <div class="w-full bg-white/20 rounded-full h-2 mt-4">
                            <div
                                class="bg-gradient-to-r from-purple-400 to-pink-600 h-2 rounded-full w-full animate-pulse">
                            </div>
                        </div>
                    </div>
                    <div class="glass-effect rounded-3xl p-8 card-hover animate-zoom-in" style="animation-delay: 0.4s;">
                        <div
                            class="text-5xl font-bold text-transparent bg-gradient-to-br from-green-400 to-teal-600 bg-clip-text mb-4">
                            100+
                        </div>
                        <div class="text-white text-xl font-medium">Video Cerita</div>
                        <div class="w-full bg-white/20 rounded-full h-2 mt-4">
                            <div
                                class="bg-gradient-to-r from-green-400 to-teal-600 h-2 rounded-full w-3/4 animate-pulse">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Services Section -->
    <section id="services" class="relative py-24 bg-gradient-to-b from-white/5 to-transparent">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20 animate-fade-in-up">
                <h3 class="text-5xl font-bold text-white mb-6">Tiga Layanan Unggulan</h3>
                <p class="text-2xl text-indigo-200 max-w-4xl mx-auto">Platform digital terintegrasi untuk pengalaman
                    perpustakaan yang modern dan inovatif</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
                <!-- Si Booky Card -->
                <div class="service-card glass-effect rounded-3xl p-10 card-hover animate-slide-up shadow-2xl relative overflow-hidden"
                    style="animation-delay: 0s;">
                    <!-- Click Counter Badge -->
                    <div
                        class="absolute top-4 right-4 click-counter sibooky-counter text-white px-4 py-2 rounded-full text-sm font-bold">
                        <div class="flex items-center space-x-2">
                            <svg class="counter-icon w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                <path fill-rule="evenodd"
                                    d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="counter-number" id="sibooky-counter">0</span>
                        </div>
                    </div>

                    <div class="relative z-10">
                        <div class="flex flex-col items-center text-center mb-8">
                            <div class="bg-gradient-to-br from-purple-500 to-pink-600 w-24 h-24 rounded-3xl flex items-center justify-center animate-float mb-6"
                                style="animation-delay: 0.3s;">
                                <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z" />
                                </svg>
                            </div>
                            <h4 class="text-3xl font-bold text-white mb-3">Si Booky</h4>
                            <p class="text-purple-200 text-lg font-medium">Perpustakaan Digital Kota Semarang</p>
                        </div>

                        <div class="space-y-4 mb-8">
                            <div class="flex items-center space-x-3 text-white">
                                <div
                                    class="w-3 h-3 bg-gradient-to-r from-purple-400 to-pink-600 rounded-full flex-shrink-0">
                                </div>
                                <span class="text-lg">1,500+ koleksi E-Book berkualitas</span>
                            </div>
                            <div class="flex items-center space-x-3 text-white">
                                <div
                                    class="w-3 h-3 bg-gradient-to-r from-purple-400 to-pink-600 rounded-full flex-shrink-0">
                                </div>
                                <span class="text-lg">Kategori lengkap: Fiksi, Sains, Sejarah</span>
                            </div>
                            <div class="flex items-center space-x-3 text-white">
                                <div
                                    class="w-3 h-3 bg-gradient-to-r from-purple-400 to-pink-600 rounded-full flex-shrink-0">
                                </div>
                                <span class="text-lg">Akses 24/7 dari perangkat apapun</span>
                            </div>
                            <div class="flex items-center space-x-3 text-white">
                                <div
                                    class="w-3 h-3 bg-gradient-to-r from-purple-400 to-pink-600 rounded-full flex-shrink-0">
                                </div>
                                <span class="text-lg">Sistem keamanan DRM terpadu</span>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <a href="https://sibooky.semarangkota.go.id/" target="_blank" data-service="sibooky-web"
                                class="service-link block w-full bg-gradient-to-r from-purple-500 to-pink-600 hover:from-purple-600 hover:to-pink-700 text-white text-lg font-bold py-4 px-6 rounded-2xl shadow-xl hover:shadow-purple-500/25 transition-all duration-300 transform hover:scale-105 text-center">
                                <div class="flex items-center justify-center space-x-2">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" />
                                    </svg>
                                    <span>Buka Si Booky</span>
                                </div>
                            </a>
                            <a href="https://play.google.com/store/apps/details?id=semarangkota.sibooky"
                                target="_blank" data-service="sibooky-app"
                                class="service-link block w-full bg-white/20 backdrop-blur-md hover:bg-white/30 text-white text-lg font-bold py-4 px-6 rounded-2xl border border-white/30 hover:border-white/50 transition-all duration-300 transform hover:scale-105 text-center">
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
                <div class="service-card glass-effect rounded-3xl p-10 card-hover animate-slide-up shadow-2xl relative overflow-hidden"
                    style="animation-delay: 0.2s;">
                    <!-- Click Counter Badge -->
                    <div
                        class="absolute top-4 right-4 click-counter portal-counter text-white px-4 py-2 rounded-full text-sm font-bold">
                        <div class="flex items-center space-x-2">
                            <svg class="counter-icon w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                <path fill-rule="evenodd"
                                    d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="counter-number" id="portal-counter">0</span>
                        </div>
                    </div>


                    <div class="relative z-10">
                        <div class="flex flex-col items-center text-center mb-8">
                            <div class="bg-gradient-to-br from-cyan-500 to-blue-600 w-24 h-24 rounded-3xl flex items-center justify-center animate-float mb-6"
                                style="animation-delay: 0.5s;">
                                <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" />
                                </svg>
                            </div>
                            <h4 class="text-3xl font-bold text-white mb-3">Portal Perpustakaan</h4>
                            <p class="text-cyan-200 text-lg font-medium">Sistem Informasi Terpadu</p>
                        </div>

                        <div class="space-y-4 mb-8">
                            <div class="flex items-center space-x-3 text-white">
                                <div
                                    class="w-3 h-3 bg-gradient-to-r from-cyan-400 to-blue-600 rounded-full flex-shrink-0">
                                </div>
                                <span class="text-lg">Katalog Online (OPAC) lengkap</span>
                            </div>
                            <div class="flex items-center space-x-3 text-white">
                                <div
                                    class="w-3 h-3 bg-gradient-to-r from-cyan-400 to-blue-600 rounded-full flex-shrink-0">
                                </div>
                                <span class="text-lg">Pendaftaran keanggotaan online</span>
                            </div>
                            <div class="flex items-center space-x-3 text-white">
                                <div
                                    class="w-3 h-3 bg-gradient-to-r from-cyan-400 to-blue-600 rounded-full flex-shrink-0">
                                </div>
                                <span class="text-lg">Layanan peminjaman otomatis</span>
                            </div>
                            <div class="flex items-center space-x-3 text-white">
                                <div
                                    class="w-3 h-3 bg-gradient-to-r from-cyan-400 to-blue-600 rounded-full flex-shrink-0">
                                </div>
                                <span class="text-lg">Dashboard analitik real-time</span>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <a href="https://perpustakaan.semarangkota.go.id/" target="_blank"
                                data-service="portal-web"
                                class="service-link block w-full bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700 text-white text-lg font-bold py-4 px-6 rounded-2xl shadow-xl hover:shadow-cyan-500/25 transition-all duration-300 transform hover:scale-105 text-center">
                                <div class="flex items-center justify-center space-x-2">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 2L3 7v11a1 1 0 001 1h12a1 1 0 001-1V7l-7-5z" />
                                    </svg>
                                    <span>Buka Portal</span>
                                </div>
                            </a>
                            <a href="#" data-service="portal-help"
                                class="service-link block w-full bg-white/20 backdrop-blur-md hover:bg-white/30 text-white text-lg font-bold py-4 px-6 rounded-2xl border border-white/30 hover:border-white/50 transition-all duration-300 transform hover:scale-105 text-center">
                                <div class="flex items-center justify-center space-x-2">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                    </svg>
                                    <span>Bantuan OPAC</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- SiBuCa Card -->
                <div class="service-card glass-effect rounded-3xl p-10 card-hover animate-slide-up shadow-2xl relative overflow-hidden"
                    style="animation-delay: 0.4s;">
                    <!-- Click Counter Badge -->
                    <div
                        class="absolute top-4 right-4 click-counter sibuca-counter text-white px-4 py-2 rounded-full text-sm font-bold">
                        <div class="flex items-center space-x-2">
                            <svg class="counter-icon w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                <path fill-rule="evenodd"
                                    d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="counter-number" id="sibuca-counter">0</span>
                        </div>
                    </div>

                    <div class="relative z-10">
                        <div class="flex flex-col items-center text-center mb-8">
                            <div class="bg-gradient-to-br from-green-500 to-teal-600 w-24 h-24 rounded-3xl flex items-center justify-center animate-float mb-6"
                                style="animation-delay: 0.7s;">
                                <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M2 6a2 2 0 012-2h6l2 2h6a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V9a1 1 0 00-1.447-.894l-2 1z" />
                                </svg>
                            </div>
                            <h4 class="text-3xl font-bold text-white mb-3">SiBuCa</h4>
                            <p class="text-green-200 text-lg font-medium">Si Buku Bercerita Video</p>
                        </div>

                        <div class="space-y-4 mb-8">
                            <div class="flex items-center space-x-3 text-white">
                                <div
                                    class="w-3 h-3 bg-gradient-to-r from-green-400 to-teal-600 rounded-full flex-shrink-0">
                                </div>
                                <span class="text-lg">100+ video cerita interaktif</span>
                            </div>
                            <div class="flex items-center space-x-3 text-white">
                                <div
                                    class="w-3 h-3 bg-gradient-to-r from-green-400 to-teal-600 rounded-full flex-shrink-0">
                                </div>
                                <span class="text-lg">Cerita anak-anak yang mendidik</span>
                            </div>
                            <div class="flex items-center space-x-3 text-white">
                                <div
                                    class="w-3 h-3 bg-gradient-to-r from-green-400 to-teal-600 rounded-full flex-shrink-0">
                                </div>
                                <span class="text-lg">Animasi berkualitas tinggi</span>
                            </div>
                            <div class="flex items-center space-x-3 text-white">
                                <div
                                    class="w-3 h-3 bg-gradient-to-r from-green-400 to-teal-600 rounded-full flex-shrink-0">
                                </div>
                                <span class="text-lg">Konten lokal dan edukatif</span>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <a href="https://sibooky.semarangkota.go.id/blog/sibuca-si-buku-bercerita-video"
                                target="_blank" data-service="sibuca-web"
                                class="service-link block w-full bg-gradient-to-r from-green-500 to-teal-600 hover:from-green-600 hover:to-teal-700 text-white text-lg font-bold py-4 px-6 rounded-2xl shadow-xl hover:shadow-green-500/25 transition-all duration-300 transform hover:scale-105 text-center">
                                <div class="flex items-center justify-center space-x-2">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" />
                                    </svg>
                                    <span>Tonton SiBuCa</span>
                                </div>
                            </a>
                            <a href="#" data-service="sibuca-info"
                                class="service-link block w-full bg-white/20 backdrop-blur-md hover:bg-white/30 text-white text-lg font-bold py-4 px-6 rounded-2xl border border-white/30 hover:border-white/50 transition-all duration-300 transform hover:scale-105 text-center">
                                <div class="flex items-center justify-center space-x-2">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span>Info Lebih Lanjut</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Comparison -->
    <section id="features" class="relative py-24 bg-gradient-to-b from-transparent to-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20 animate-fade-in-up">
                <h3 class="text-5xl font-bold text-white mb-6">Perbandingan Fitur Layanan</h3>
                <p class="text-2xl text-indigo-200 max-w-4xl mx-auto">Temukan layanan yang tepat sesuai kebutuhan Anda
                </p>
            </div>

            <!-- Comparison Table -->
            <div class="glass-effect rounded-3xl p-8 animate-fade-in-up shadow-2xl overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-white">
                        <thead>
                            <tr class="border-b border-white/20">
                                <th class="text-left py-6 px-4 text-xl font-bold">Fitur</th>
                                <th class="text-center py-6 px-4 text-xl font-bold text-purple-300">Si Booky</th>
                                <th class="text-center py-6 px-4 text-xl font-bold text-cyan-300">Portal</th>
                                <th class="text-center py-6 px-4 text-xl font-bold text-green-300">SiBuCa</th>
                            </tr>
                        </thead>
                        <tbody class="text-lg">
                            <tr class="border-b border-white/10 hover:bg-white/5 transition-colors">
                                <td class="py-4 px-4 font-medium">E-Book Digital</td>
                                <td class="text-center py-4 px-4">
                                    <div
                                        class="inline-flex items-center justify-center w-8 h-8 bg-green-500 rounded-full">
                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fillRule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clipRule="evenodd" />
                                        </svg>
                                    </div>
                                </td>
                                <td class="text-center py-4 px-4">
                                    <div
                                        class="inline-flex items-center justify-center w-8 h-8 bg-gray-500 rounded-full">
                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fillRule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clipRule="evenodd" />
                                        </svg>
                                    </div>
                                </td>
                                <td class="text-center py-4 px-4">
                                    <div
                                        class="inline-flex items-center justify-center w-8 h-8 bg-gray-500 rounded-full">
                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fillRule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clipRule="evenodd" />
                                        </svg>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-white/10 hover:bg-white/5 transition-colors">
                                <td class="py-4 px-4 font-medium">Katalog OPAC</td>
                                <td class="text-center py-4 px-4">
                                    <div
                                        class="inline-flex items-center justify-center w-8 h-8 bg-gray-500 rounded-full">
                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fillRule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clipRule="evenodd" />
                                        </svg>
                                    </div>
                                </td>
                                <td class="text-center py-4 px-4">
                                    <div
                                        class="inline-flex items-center justify-center w-8 h-8 bg-green-500 rounded-full">
                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fillRule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clipRule="evenodd" />
                                        </svg>
                                    </div>
                                </td>
                                <td class="text-center py-4 px-4">
                                    <div
                                        class="inline-flex items-center justify-center w-8 h-8 bg-gray-500 rounded-full">
                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fillRule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clipRule="evenodd" />
                                        </svg>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-white/10 hover:bg-white/5 transition-colors">
                                <td class="py-4 px-4 font-medium">Video Cerita</td>
                                <td class="text-center py-4 px-4">
                                    <div
                                        class="inline-flex items-center justify-center w-8 h-8 bg-gray-500 rounded-full">
                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fillRule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clipRule="evenodd" />
                                        </svg>
                                    </div>
                                </td>
                                <td class="text-center py-4 px-4">
                                    <div
                                        class="inline-flex items-center justify-center w-8 h-8 bg-gray-500 rounded-full">
                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fillRule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clipRule="evenodd" />
                                        </svg>
                                    </div>
                                </td>
                                <td class="text-center py-4 px-4">
                                    <div
                                        class="inline-flex items-center justify-center w-8 h-8 bg-green-500 rounded-full">
                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fillRule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clipRule="evenodd" />
                                        </svg>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-white/10 hover:bg-white/5 transition-colors">
                                <td class="py-4 px-4 font-medium">Aplikasi Mobile</td>
                                <td class="text-center py-4 px-4">
                                    <div
                                        class="inline-flex items-center justify-center w-8 h-8 bg-green-500 rounded-full">
                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fillRule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clipRule="evenodd" />
                                        </svg>
                                    </div>
                                </td>
                                <td class="text-center py-4 px-4">
                                    <div
                                        class="inline-flex items-center justify-center w-8 h-8 bg-yellow-500 rounded-full">
                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fillRule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                clipRule="evenodd" />
                                        </svg>
                                    </div>
                                </td>
                                <td class="text-center py-4 px-4">
                                    <div
                                        class="inline-flex items-center justify-center w-8 h-8 bg-yellow-500 rounded-full">
                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fillRule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                clipRule="evenodd" />
                                        </svg>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-white/10 hover:bg-white/5 transition-colors">
                                <td class="py-4 px-4 font-medium">Statistik & Analytics</td>
                                <td class="text-center py-4 px-4">
                                    <div
                                        class="inline-flex items-center justify-center w-8 h-8 bg-yellow-500 rounded-full">
                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fillRule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                clipRule="evenodd" />
                                        </svg>
                                    </div>
                                </td>
                                <td class="text-center py-4 px-4">
                                    <div
                                        class="inline-flex items-center justify-center w-8 h-8 bg-green-500 rounded-full">
                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fillRule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clipRule="evenodd" />
                                        </svg>
                                    </div>
                                </td>
                                <td class="text-center py-4 px-4">
                                    <div
                                        class="inline-flex items-center justify-center w-8 h-8 bg-yellow-500 rounded-full">
                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fillRule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                clipRule="evenodd" />
                                        </svg>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Legend -->
                <div class="flex flex-wrap justify-center gap-6 mt-8 pt-6 border-t border-white/20">
                    <div class="flex items-center space-x-2">
                        <div class="w-4 h-4 bg-green-500 rounded-full"></div>
                        <span class="text-white font-medium">Tersedia</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-4 h-4 bg-yellow-500 rounded-full"></div>
                        <span class="text-white font-medium">Dalam Pengembangan</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-4 h-4 bg-gray-500 rounded-full"></div>
                        <span class="text-white font-medium">Tidak Tersedia</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Access Tools -->
    <section class="relative py-24 bg-gradient-to-b from-white/5 to-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 animate-fade-in-up">
                <h3 class="text-4xl font-bold text-white mb-6">Akses Cepat</h3>
                <p class="text-xl text-indigo-200 max-w-3xl mx-auto">Tools dan layanan tambahan untuk pengalaman yang
                    lebih lengkap</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- OPAC Quick Access -->
                <div class="feature-card glass-effect rounded-2xl p-8 card-hover animate-fade-in-up shadow-xl text-center"
                    style="animation-delay: 0.1s;">
                    <div
                        class="feature-icon bg-gradient-to-br from-green-500 to-teal-600 w-16 h-16 rounded-xl flex items-center justify-center mb-6 mx-auto">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h5 class="text-xl font-bold text-white mb-3">OPAC</h5>
                    <p class="text-indigo-200 text-sm mb-4">Katalog Online Terpadu</p>
                    <button
                        class="w-full bg-gradient-to-r from-green-500 to-teal-600 hover:from-green-600 hover:to-teal-700 text-white font-bold py-2 px-4 rounded-lg transition-all duration-300 transform hover:scale-105">
                        Akses
                    </button>
                </div>

                <!-- Member Registration -->
                <div class="feature-card glass-effect rounded-2xl p-8 card-hover animate-fade-in-up shadow-xl text-center"
                    style="animation-delay: 0.2s;">
                    <div
                        class="feature-icon bg-gradient-to-br from-yellow-500 to-orange-600 w-16 h-16 rounded-xl flex items-center justify-center mb-6 mx-auto">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6z" />
                        </svg>
                    </div>
                    <h5 class="text-xl font-bold text-white mb-3">Keanggotaan</h5>
                    <p class="text-indigo-200 text-sm mb-4">Daftar Anggota Baru</p>
                    <button
                        class="w-full bg-gradient-to-r from-yellow-500 to-orange-600 hover:from-yellow-600 hover:to-orange-700 text-white font-bold py-2 px-4 rounded-lg transition-all duration-300 transform hover:scale-105">
                        Daftar
                    </button>
                </div>

                <!-- Self Service -->
                <div class="feature-card glass-effect rounded-2xl p-8 card-hover animate-fade-in-up shadow-xl text-center"
                    style="animation-delay: 0.3s;">
                    <div
                        class="feature-icon bg-gradient-to-br from-red-500 to-pink-600 w-16 h-16 rounded-xl flex items-center justify-center mb-6 mx-auto">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4zM18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" />
                        </svg>
                    </div>
                    <h5 class="text-xl font-bold text-white mb-3">Self Service</h5>
                    <p class="text-indigo-200 text-sm mb-4">Peminjaman Mandiri</p>
                    <button
                        class="w-full bg-gradient-to-r from-red-500 to-pink-600 hover:from-red-600 hover:to-pink-700 text-white font-bold py-2 px-4 rounded-lg transition-all duration-300 transform hover:scale-105">
                        Pinjam
                    </button>
                </div>

                <!-- Statistics -->
                <div class="feature-card glass-effect rounded-2xl p-8 card-hover animate-fade-in-up shadow-xl text-center"
                    style="animation-delay: 0.4s;">
                    <div
                        class="feature-icon bg-gradient-to-br from-indigo-500 to-purple-600 w-16 h-16 rounded-xl flex items-center justify-center mb-6 mx-auto">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z" />
                        </svg>
                    </div>
                    <h5 class="text-xl font-bold text-white mb-3">Statistik</h5>
                    <p class="text-indigo-200 text-sm mb-4">Data Real-time</p>
                    <button
                        class="w-full bg-gradient-to-r from-indigo-500 to-purple-600 hover:from-indigo-600 hover:to-purple-700 text-white font-bold py-2 px-4 rounded-lg transition-all duration-300 transform hover:scale-105">
                        Lihat
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="relative py-24 bg-gradient-to-b from-white/10 to-transparent">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="glass-effect rounded-3xl p-16 animate-fade-in-up shadow-2xl">
                <h3 class="text-4xl md:text-5xl font-bold text-white mb-8">
                    Mulai Jelajahi Layanan
                    <span
                        class="gradient-text bg-gradient-to-r from-cyan-400 to-purple-400 bg-clip-text text-transparent">Digital
                        Kami</span>
                </h3>
                <p class="text-xl text-indigo-200 mb-12 max-w-3xl mx-auto">
                    Akses ribuan koleksi digital, nikmati cerita interaktif, dan manfaatkan sistem perpustakaan modern
                    dalam satu platform terintegrasi. Ikuti kami di Berbagai Sosial Media Kami untuk informasi UptoDate
                </p>
                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    <a href="https://sibooky.semarangkota.go.id/" target="_blank"
                        class="bg-gradient-to-r from-purple-500 to-pink-600 hover:from-purple-600 hover:to-pink-700 text-white text-xl font-bold py-4 px-12 rounded-full shadow-2xl hover:shadow-purple-500/25 transition-all duration-300 transform hover:scale-105 animate-pulse-glow">
                        Mulai dengan Si Booky
                    </a>
                    <a href="https://perpustakaan.semarangkota.go.id/" target="_blank"
                        class="bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700 text-white text-xl font-bold py-4 px-12 rounded-full shadow-2xl hover:shadow-cyan-500/25 transition-all duration-300 transform hover:scale-105">
                        Kunjungi Portal
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="bg-black/20 backdrop-blur-md border-t border-white/10 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <!-- Brand -->
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
                    <p class="text-indigo-200 leading-relaxed">Platform digital terpadu untuk layanan arsip dan
                        perpustakaan modern.</p>
                </div>

                <!-- Services -->
                <div class="animate-fade-in-up">
                    <h4 class="text-xl font-bold mb-6 text-white">Layanan Utama</h4>
                    <ul class="space-y-3 text-indigo-200">
                        <li class="flex items-center space-x-3">
                            <div class="w-2 h-2 bg-gradient-to-r from-purple-400 to-pink-600 rounded-full"></div>
                            <span>Si Booky E-Library</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <div class="w-2 h-2 bg-gradient-to-r from-cyan-400 to-blue-600 rounded-full"></div>
                            <span>Portal Perpustakaan</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <div class="w-2 h-2 bg-gradient-to-r from-green-400 to-teal-600 rounded-full"></div>
                            <span>SiBuCa Video Stories</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <div class="w-2 h-2 bg-gradient-to-r from-yellow-400 to-orange-600 rounded-full"></div>
                            <span>OPAC Online</span>
                        </li>
                    </ul>
                </div>

                <!-- Quick Links -->
                <div class="animate-fade-in-up" style="animation-delay: 0.2s;">
                    <h4 class="text-xl font-bold mb-6 text-white">Akses Cepat</h4>
                    <ul class="space-y-3 text-indigo-200">
                        <li>
                            <a href="https://sibooky.semarangkota.go.id/" target="_blank"
                                class="hover:text-white transition-colors flex items-center space-x-2">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" />
                                </svg>
                                <span>Buka Si Booky</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://perpustakaan.semarangkota.go.id/" target="_blank"
                                class="hover:text-white transition-colors flex items-center space-x-2">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" />
                                </svg>
                                <span>Portal Perpustakaan</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://sibooky.semarangkota.go.id/blog/sibuca-si-buku-bercerita-video"
                                target="_blank"
                                class="hover:text-white transition-colors flex items-center space-x-2">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" />
                                </svg>
                                <span>Tonton SiBuCa</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-white transition-colors flex items-center space-x-2">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                </svg>
                                <span>Bantuan & Support</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Contact Info -->
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

            <!-- Social Media -->
            <!DOCTYPE html>
            <html lang="id">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Social Media Section</title>
                <script src="https://cdn.tailwindcss.com"></script>
            </head>

            <body class="bg-gray-900 p-8">
                <!-- Social Media -->
                <div class="mt-6">
                    <h5 class="text-lg font-semibold text-white mb-4">Ikuti Kami</h5>
                    <div class="flex space-x-4">
                        <!-- Twitter -->
                        <a href="https://x.com/dinarpus_smg" target="_blank"
                            class="bg-white/20 hover:bg-white/30 p-3 rounded-full transition-all duration-300 transform hover:scale-110">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                            </svg>
                        </a>

                        <!-- Facebook -->
                        <a href="https://www.facebook.com/groups/dinasarpus.semarangkota" target="_blank"
                            class="bg-white/20 hover:bg-white/30 p-3 rounded-full transition-all duration-300 transform hover:scale-110">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>

                        <!-- Instagram -->
                        <a href="https://www.instagram.com/dinasarpus_semarang/" target="_blank"
                            class="bg-white/20 hover:bg-white/30 p-3 rounded-full transition-all duration-300 transform hover:scale-110">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>

                        <!-- TikTok -->
                        <a href="https://www.tiktok.com/@dinasarpus_kotasemarang/" target="_blank"
                            class="bg-white/20 hover:bg-white/30 p-3 rounded-full transition-all duration-300 transform hover:scale-110">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-5.2 1.74 2.89 2.89 0 012.31-4.64 2.93 2.93 0 01.88.13V9.4a6.84 6.84 0 00-.88-.05A6.33 6.33 0 005 20.1a6.34 6.34 0 0010.86-4.43v-7a8.16 8.16 0 004.77 1.52v-3.4a4.85 4.85 0 01-1-.1z" />
                            </svg>
                        </a>
                    </div>
                </div>
        </div>
        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-white/20 mt-12 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <p class="text-indigo-200 text-center md:text-left">
                    © 2025 Silver Arpus - Dinas Arsip dan Perpustakaan Kota Semarang. Hak Cipta Dilindungi.
                </p>
                <div class="flex space-x-6 text-indigo-200">
                    <a href="#" class="hover:text-white transition-colors">Kebijakan Privasi</a>
                    <a href="#" class="hover:text-white transition-colors">Syarat & Ketentuan</a>
                    <a href="#" class="hover:text-white transition-colors">FAQ</a>
                </div>
            </div>
        </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
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
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe all animated elements
        document.querySelectorAll(
                '.animate-fade-in-up, .animate-fade-in-left, .animate-fade-in-right, .animate-slide-up, .animate-zoom-in')
            .forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                observer.observe(el);
            });

        // Mobile menu toggle (if needed)
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }

        // Service card interactions
        document.querySelectorAll('.service-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-12px) scale(1.02)';
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Feature icon animations
        document.querySelectorAll('.feature-card').forEach(card => {
            const icon = card.querySelector('.feature-icon');

            card.addEventListener('mouseenter', function() {
                if (icon) {
                    icon.style.transform = 'scale(1.1) rotate(5deg)';
                }
            });

            card.addEventListener('mouseleave', function() {
                if (icon) {
                    icon.style.transform = 'scale(1) rotate(0deg)';
                }
            });
        });

        // Loading animation for external links
        document.querySelectorAll('a[target="_blank"]').forEach(link => {
            link.addEventListener('click', function(e) {
                const button = this;
                const originalText = button.innerHTML;

                // Add loading state
                button.style.opacity = '0.7';
                button.innerHTML = originalText.replace(/Buka|Tonton|Download/, 'Membuka...');

                // Reset after delay
                setTimeout(() => {
                    button.style.opacity = '1';
                    button.innerHTML = originalText;
                }, 2000);
            });
        });

        // Parallax effect for background elements
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallax = document.querySelectorAll('.animate-float');

            parallax.forEach(element => {
                const speed = 0.5;
                element.style.transform = `translateY(${scrolled * speed}px)`;
            });
        });

        // Statistics counter animation
        function animateCounter(element, start, end, duration) {
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                const value = Math.floor(progress * (end - start) + start);
                element.textContent = value.toLocaleString() + (element.dataset.suffix || '');
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        }

        // Trigger counter animations when stats come into view
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target.querySelector('.text-5xl');
                    if (counter && !counter.classList.contains('animated')) {
                        counter.classList.add('animated');
                        const finalValue = parseInt(counter.textContent.replace(/[^\d]/g, ''));
                        counter.textContent = '0';
                        animateCounter(counter, 0, finalValue, 2000);
                    }
                }
            });
        });

        document.querySelectorAll('.glass-effect').forEach(el => {
            if (el.querySelector('.text-5xl')) {
                statsObserver.observe(el);
            }
        });
        class ClickCounter {
            constructor() {
                this.counters = {
                    'sibooky': {
                        count: 0,
                        element: null,
                        milestones: [10, 25, 50, 100, 250, 500]
                    },
                    'portal': {
                        count: 0,
                        element: null,
                        milestones: [10, 25, 50, 100, 250, 500]
                    },
                    'sibuca': {
                        count: 0,
                        element: null,
                        milestones: [10, 25, 50, 100, 250, 500]
                    }
                };
                this.init();
            }

            init() {
                // Initialize counter elements
                this.counters.sibooky.element = document.getElementById('sibooky-counter');
                this.counters.portal.element = document.getElementById('portal-counter');
                this.counters.sibuca.element = document.getElementById('sibuca-counter');

                // Initialize all counters to 0 (tidak load dari localStorage untuk memulai fresh)
                this.initializeFreshCounters();

                // Add click event listeners to service links
                this.attachClickListeners();

                // Add hover effects to counters
                this.addHoverEffects();

                // REMOVED: startBackgroundActivity() - tidak ada increment otomatis
            }

            initializeFreshCounters() {
                // Set semua counter ke 0 dan update display
                Object.keys(this.counters).forEach(service => {
                    this.counters[service].count = 0;
                    this.updateDisplay(service);
                });
            }

            // OPTIONAL: Uncomment method ini jika ingin menggunakan localStorage
            // loadCounts() {
            //     try {
            //         const savedCounts = localStorage.getItem('serviceClickCounts');
            //         if (savedCounts) {
            //             const counts = JSON.parse(savedCounts);
            //             Object.keys(counts).forEach(service => {
            //                 if (this.counters[service]) {
            //                     this.counters[service].count = counts[service] || 0;
            //                     this.updateDisplay(service);
            //                 }
            //             });
            //         }
            //     } catch (e) {
            //         this.initializeFreshCounters();
            //     }
            // }

            // OPTIONAL: Uncomment method ini jika ingin menyimpan ke localStorage
            // saveCounts() {
            //     try {
            //         const counts = {};
            //         Object.keys(this.counters).forEach(service => {
            //             counts[service] = this.counters[service].count;
            //         });
            //         localStorage.setItem('serviceClickCounts', JSON.stringify(counts));
            //     } catch (e) {
            //         // localStorage tidak tersedia
            //     }
            // }

            attachClickListeners() {
                // Si Booky links
                document.querySelectorAll('[data-service="sibooky-web"], [data-service="sibooky-app"]').forEach(
                    link => {
                        link.addEventListener('click', (e) => {
                            this.incrementCounter('sibooky');
                            this.animateClick(link);
                        });
                    });

                // Portal links
                document.querySelectorAll('[data-service="portal-web"], [data-service="portal-help"]').forEach(link => {
                    link.addEventListener('click', (e) => {
                        this.incrementCounter('portal');
                        this.animateClick(link);
                    });
                });

                // SiBuCa links
                document.querySelectorAll('[data-service="sibuca-web"], [data-service="sibuca-info"]').forEach(link => {
                    link.addEventListener('click', (e) => {
                        this.incrementCounter('sibuca');
                        this.animateClick(link);
                    });
                });
            }

            incrementCounter(service) {
                if (!this.counters[service]) return;

                const oldCount = this.counters[service].count;
                this.counters[service].count++;

                this.updateDisplay(service);
                this.animateCounterIncrement(service);
                this.checkMilestone(service, oldCount);

                // OPTIONAL: Uncomment jika ingin menyimpan ke localStorage
                // this.saveCounts();
            }

            updateDisplay(service) {
                if (this.counters[service] && this.counters[service].element) {
                    this.counters[service].element.textContent = this.formatNumber(this.counters[service].count);
                }
            }

            updateAllDisplays() {
                Object.keys(this.counters).forEach(service => {
                    this.updateDisplay(service);
                });
            }

            formatNumber(num) {
                if (num >= 1000) {
                    return (num / 1000).toFixed(1) + 'k';
                }
                return num.toString();
            }

            animateCounterIncrement(service) {
                const element = this.counters[service].element;
                if (element) {
                    element.classList.add('animate-increment');
                    setTimeout(() => {
                        element.classList.remove('animate-increment');
                    }, 500);
                }

                // Animate the counter container
                const counterContainer = element.closest('.click-counter');
                if (counterContainer) {
                    counterContainer.classList.add('animate-click');
                    setTimeout(() => {
                        counterContainer.classList.remove('animate-click');
                    }, 600);
                }
            }

            animateClick(linkElement) {
                // Add click animation to the service link
                linkElement.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    linkElement.style.transform = '';
                }, 150);
            }

            checkMilestone(service, oldCount) {
                const newCount = this.counters[service].count;
                const milestones = this.counters[service].milestones;

                const achievedMilestone = milestones.find(milestone =>
                    oldCount < milestone && newCount >= milestone
                );

                if (achievedMilestone) {
                    this.showMilestoneNotification(service, achievedMilestone);
                }
            }

            showMilestoneNotification(service, milestone) {
                const counterContainer = document.getElementById(`${service}-counter`).closest('.click-counter');

                const notification = document.createElement('div');
                notification.className = 'milestone-notification';
                notification.textContent = `🎉 ${milestone} clicks!`;

                counterContainer.style.position = 'relative';
                counterContainer.appendChild(notification);

                setTimeout(() => {
                    if (notification.parentNode) {
                        notification.parentNode.removeChild(notification);
                    }
                }, 3000);
            }

            addHoverEffects() {
                Object.keys(this.counters).forEach(service => {
                    const counterElement = document.getElementById(`${service}-counter`);
                    if (counterElement) {
                        const counterContainer = counterElement.closest('.click-counter');

                        counterContainer.addEventListener('mouseenter', () => {
                            counterContainer.style.transform = 'scale(1.05)';
                        });

                        counterContainer.addEventListener('mouseleave', () => {
                            counterContainer.style.transform = '';
                        });
                    }
                });
            }

            // Method untuk reset counter (untuk testing)
            resetCounters() {
                Object.keys(this.counters).forEach(service => {
                    this.counters[service].count = 0;
                    this.updateDisplay(service);
                });
                console.log('All counters reset to 0');
            }

            // Method untuk set custom count (untuk testing)
            setCount(service, count) {
                if (this.counters[service]) {
                    this.counters[service].count = count;
                    this.updateDisplay(service);
                    console.log(`${service} counter set to ${count}`);
                }
            }

            // Method untuk mendapatkan count saat ini
            getCount(service) {
                if (this.counters[service]) {
                    return this.counters[service].count;
                }
                return 0;
            }

            // Method untuk mendapatkan semua counts
            getAllCounts() {
                const counts = {};
                Object.keys(this.counters).forEach(service => {
                    counts[service] = this.counters[service].count;
                });
                return counts;
            }
        }

        // Initialize click counter system
        document.addEventListener('DOMContentLoaded', function() {
            window.clickCounter = new ClickCounter();

            // Console commands untuk debugging dan testing
            if (typeof console !== 'undefined') {
                console.log('Click Counter initialized - Real-time counting only!');
                console.log('Available methods:');
                console.log('- window.clickCounter.resetCounters() - Reset all counters to 0');
                console.log('- window.clickCounter.setCount(service, count) - Set specific counter');
                console.log('- window.clickCounter.getCount(service) - Get current count');
                console.log('- window.clickCounter.getAllCounts() - Get all counts');
                console.log('Services: sibooky, portal, sibuca');
            }
        });
    </script>
</body>
