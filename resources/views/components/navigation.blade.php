{{-- resources/views/components/navigation.blade.php --}}
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
                @if ($menu)
                    @foreach ($menu as $item)
                        <a href="{{ $item->url }}"
                            class="nav-link text-white/80 hover:text-white font-medium {{ request()->is(trim($item->url, '/')) ? 'border-b-2 border-white' : '' }}">
                            {{ $item->title }}
                        </a>
                    @endforeach
                @else
                    <a href="{{ url('/') }}"
                        class="nav-link text-white/80 hover:text-white font-medium">Dashboard</a>
                    <a href="#services"
                        class="nav-link text-white hover:text-white font-medium border-b-2 border-white">Layanan</a>
                    <a href="{{ url('/kontak') }}"
                        class="nav-link text-white/80 hover:text-white font-medium">Kontak</a>
                @endif
            </div>
        </div>
    </div>
</nav>

{{-- resources/views/components/animated-background.blade.php --}}
<div class="fixed inset-0 overflow-hidden pointer-events-none">
    <div class="absolute -top-40 -right-40 w-80 h-80 bg-purple-300 rounded-full opacity-20 animate-pulse"></div>
    <div class="absolute top-40 -left-32 w-64 h-64 bg-indigo-300 rounded-full opacity-20 animate-float"></div>
    <div class="absolute bottom-40 right-20 w-48 h-48 bg-pink-300 rounded-full opacity-20 animate-pulse"></div>
    <div class="absolute top-1/2 left-1/2 w-32 h-32 bg-cyan-300 rounded-full opacity-10 animate-float"
        style="animation-delay: 1s;"></div>
</div>

{{-- resources/views/components/hero.blade.php --}}
<section id="hero" class="relative py-24 hero-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="animate-fade-in-up">
            <h2 class="text-6xl md:text-7xl font-bold text-white mb-8 leading-tight">
                {{ $data['title'] ?? 'Layanan Digital' }}
                @if (isset($data['subtitle']))
                    <br>
                    <span
                        class="gradient-text bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent">
                        {{ $data['subtitle'] }}
                    </span>
                @endif
            </h2>

            @if (isset($data['description']))
                <p class="text-2xl text-indigo-100 mb-12 max-w-4xl mx-auto leading-relaxed">
                    {{ $data['description'] }}
                </p>
            @endif

            @if (isset($data['stats']) && count($data['stats']) > 0)
                <div class="grid grid-cols-1 md:grid-cols-{{ count($data['stats']) }} gap-8 mt-16 max-w-6xl mx-auto">
                    @foreach ($data['stats'] as $index => $stat)
                        <div class="glass-effect rounded-3xl p-8 card-hover animate-zoom-in"
                            style="animation-delay: {{ $index * 0.2 }}s;">
                            <div
                                class="text-5xl font-bold text-transparent bg-gradient-to-br {{ $stat['gradient'] ?? 'from-cyan-400 to-blue-600' }} bg-clip-text mb-4">
                                {{ $stat['value'] ?? '0' }}
                            </div>
                            <div class="text-white text-xl font-medium">{{ $stat['label'] ?? '' }}</div>
                            <div class="w-full bg-white/20 rounded-full h-2 mt-4">
                                <div
                                    class="bg-gradient-to-r {{ $stat['gradient'] ?? 'from-cyan-400 to-blue-600' }} h-2 rounded-full w-{{ $stat['progress'] ?? '4/5' }} animate-pulse">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</section>

{{-- resources/views/components/services.blade.php --}}
<section id="services" class="relative py-24 bg-gradient-to-b from-white/5 to-transparent">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20 animate-fade-in-up">
            <h3 class="text-5xl font-bold text-white mb-6">{{ $data['title'] ?? 'Layanan Kami' }}</h3>
            <p class="text-2xl text-indigo-200 max-w-4xl mx-auto">{{ $data['description'] ?? '' }}</p>
        </div>

        @if (isset($data['services']) && count($data['services']) > 0)
            <div
                class="grid grid-cols-1 lg:grid-cols-{{ count($data['services']) > 3 ? '4' : count($data['services']) }} gap-10">
                @foreach ($data['services'] as $index => $service)
                    <div class="service-card glass-effect rounded-3xl p-10 card-hover animate-slide-up shadow-2xl relative overflow-hidden"
                        style="animation-delay: {{ $index * 0.2 }}s;">
                        <div class="relative z-10">
                            <div class="flex flex-col items-center text-center mb-8">
                                <div class="bg-gradient-to-br {{ $service['gradient'] ?? 'from-purple-500 to-pink-600' }} w-24 h-24 rounded-3xl flex items-center justify-center animate-float mb-6"
                                    style="animation-delay: {{ ($index + 1) * 0.3 }}s;">
                                    @if (isset($service['icon']))
                                        {!! $service['icon'] !!}
                                    @endif
                                </div>
                                <h4 class="text-3xl font-bold text-white mb-3">{{ $service['title'] ?? '' }}</h4>
                                <p class="text-purple-200 text-lg font-medium">{{ $service['subtitle'] ?? '' }}</p>
                            </div>

                            @if (isset($service['features']) && count($service['features']) > 0)
                                <div class="space-y-4 mb-8">
                                    @foreach ($service['features'] as $feature)
                                        <div class="flex items-center space-x-3 text-white">
                                            <div
                                                class="w-3 h-3 bg-gradient-to-r {{ $service['gradient'] ?? 'from-purple-400 to-pink-600' }} rounded-full flex-shrink-0">
                                            </div>
                                            <span class="text-lg">{{ $feature }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            @endif

                            @if (isset($service['buttons']) && count($service['buttons']) > 0)
                                <div class="space-y-4">
                                    @foreach ($service['buttons'] as $button)
                                        <a href="{{ $button['url'] ?? '#' }}"
                                            target="{{ $button['target'] ?? '_self' }}"
                                            class="block w-full {{ $button['style'] ?? 'bg-gradient-to-r from-purple-500 to-pink-600 hover:from-purple-600 hover:to-pink-700' }} text-white text-lg font-bold py-4 px-6 rounded-2xl shadow-xl transition-all duration-300 transform hover:scale-105 text-center">
                                            <div class="flex items-center justify-center space-x-2">
                                                @if (isset($button['icon']))
                                                    {!! $button['icon'] !!}
                                                @endif
                                                <span>{{ $button['text'] ?? 'Learn More' }}</span>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>

{{-- resources/views/components/cta.blade.php --}}
<section class="relative py-24 bg-gradient-to-b from-white/10 to-transparent">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="glass-effect rounded-3xl p-16 animate-fade-in-up shadow-2xl">
            <h3 class="text-4xl md:text-5xl font-bold text-white mb-8">
                {{ $data['title'] ?? 'Mulai Sekarang' }}
            </h3>

            @if (isset($data['description']))
                <p class="text-xl text-indigo-200 mb-12 max-w-3xl mx-auto">
                    {{ $data['description'] }}
                </p>
            @endif

            @if (isset($data['buttons']) && count($data['buttons']) > 0)
                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    @foreach ($data['buttons'] as $button)
                        <a href="{{ $button['url'] ?? '#' }}" target="{{ $button['target'] ?? '_self' }}"
                            class="{{ $button['style'] ?? 'bg-gradient-to-r from-purple-500 to-pink-600 hover:from-purple-600 hover:to-pink-700' }} text-white text-xl font-bold py-4 px-12 rounded-full shadow-2xl transition-all duration-300 transform hover:scale-105">
                            {{ $button['text'] ?? 'Get Started' }}
                        </a>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</section>

{{-- resources/views/components/text.blade.php --}}
<section class="relative py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-lg prose-invert max-w-none">
            {!! $data['content'] ?? '' !!}
        </div>
    </div>
</section>

{{-- resources/views/components/features.blade.php --}}
<section id="features" class="relative py-24 bg-gradient-to-b from-transparent to-white/5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20 animate-fade-in-up">
            <h3 class="text-5xl font-bold text-white mb-6">{{ $data['title'] ?? 'Fitur Unggulan' }}</h3>
            <p class="text-2xl text-indigo-200 max-w-4xl mx-auto">{{ $data['description'] ?? '' }}</p>
        </div>

        @if (isset($data['features']) && count($data['features']) > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach ($data['features'] as $index => $feature)
                    <div class="feature-card glass-effect rounded-2xl p-8 card-hover animate-fade-in-up shadow-xl text-center"
                        style="animation-delay: {{ $index * 0.1 }}s;">
                        <div
                            class="feature-icon bg-gradient-to-br {{ $feature['gradient'] ?? 'from-green-500 to-teal-600' }} w-16 h-16 rounded-xl flex items-center justify-center mb-6 mx-auto">
                            @if (isset($feature['icon']))
                                {!! $feature['icon'] !!}
                            @endif
                        </div>
                        <h5 class="text-xl font-bold text-white mb-3">{{ $feature['title'] ?? '' }}</h5>
                        <p class="text-indigo-200 text-sm mb-4">{{ $feature['description'] ?? '' }}</p>

                        @if (isset($feature['button']))
                            <button
                                class="w-full bg-gradient-to-r {{ $feature['gradient'] ?? 'from-green-500 to-teal-600' }} hover:opacity-80 text-white font-bold py-2 px-4 rounded-lg transition-all duration-300 transform hover:scale-105">
                                {{ $feature['button']['text'] ?? 'Learn More' }}
                            </button>
                        @endif
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>

{{-- resources/views/components/footer.blade.php --}}
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
                <p class="text-indigo-200 leading-relaxed">
                    {{ $footer_data['footer_about'] ?? 'Platform digital terpadu untuk layanan arsip dan perpustakaan modern.' }}
                </p>
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
                            target="_blank" class="hover:text-white transition-colors flex items-center space-x-2">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" />
                            </svg>
                            <span>Tonton SiBuCa</span>
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
                        <span
                            class="text-sm">{{ $footer_data['footer_contact_address'] ?? 'Jl. Prof. Sudarto No.116, Sumurboto, Kec. Banyumanik, Kota Semarang' }}</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-purple-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                        </svg>
                        <span
                            class="text-sm">{{ $footer_data['footer_contact_phone'] ?? 'WhatsApp: +6281222233860' }}</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-pink-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                        </svg>
                        <span
                            class="text-sm">{{ $footer_data['footer_contact_email'] ?? 'dinas_arpus@semarangkota.go.id' }}</span>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="mt-6">
                    <h5 class="text-lg font-semibold text-white mb-4">Ikuti Kami</h5>
                    <div class="flex space-x-4">
                        @if (isset($footer_data['footer_social_facebook']))
                            <a href="{{ $footer_data['footer_social_facebook'] }}"
                                class="bg-white/20 hover:bg-white/30 p-3 rounded-full transition-all duration-300 transform hover:scale-110">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                </svg>
                            </a>
                        @endif
                        @if (isset($footer_data['footer_social_twitter']))
                            <a href="{{ $footer_data['footer_social_twitter'] }}"
                                class="bg-white/20 hover:bg-white/30 p-3 rounded-full transition-all duration-300 transform hover:scale-110">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                </svg>
                            </a>
                        @endif
                        @if (isset($footer_data['footer_social_instagram']))
                            <a href="{{ $footer_data['footer_social_instagram'] }}"
                                class="bg-white/20 hover:bg-white/30 p-3 rounded-full transition-all duration-300 transform hover:scale-110">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.347-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.166-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.748-1.378 0 0-.599 2.282-.744 2.840-.282 1.079-1.039 2.435-1.548 3.266C9.944 23.745 10.963 24.001 12.017 24.001c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001 12.017.001z" />
                                </svg>
                            </a>
                        @endif
                        @if (isset($footer_data['footer_social_youtube']))
                            <a href="{{ $footer_data['footer_social_youtube'] }}"
                                class="bg-white/20 hover:bg-white/30 p-3 rounded-full transition-all duration-300 transform hover:scale-110">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                                </svg>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-white/20 mt-12 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <p class="text-indigo-200 text-center md:text-left">
                    © {{ date('Y') }} Silver Arpus - Dinas Arsip dan Perpustakaan Kota Semarang. Hak Cipta
                    Dilindungi.
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
