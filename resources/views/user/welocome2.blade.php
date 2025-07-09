@extends('user.layouts.main')
@section('tab-title')
    Welcome to LiteracyBridge
@endsection
@section('content')
    {{-- Enhanced Hero Section --}}
    <section class="my-container py-16 md:py-24">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="order-2 md:order-1">
                <iframe class="w-full h-[400px] md:h-[500px]"
                    src="https://lottie.host/embed/849e88e5-eea0-44f6-9038-9430c64f5674/Mdks9tSD7W.json"></iframe>
            </div>
            <div class="order-1 md:order-2 text-center md:text-left space-y-8">
                <div class="space-y-4">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-primary-800 leading-tight">
                        Baca Lebih <span class="text-primary-500">Banyak</span> Buku,
                    </h1>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-primary-700">
                        Capai Lebih <span class="text-primary-500">Jauh</span> Ilmu.
                    </h2>
                    <p class="text-lg text-gray-600 max-w-lg mx-auto md:mx-0">
                        Mulai perjalanan literasi Anda bersama LiteracyBridge. Temukan ribuan buku, tingkatkan pengetahuan,
                        dan raih mimpi Anda.
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                    <button id="btnGo"
                        class="btn-blue rounded-full px-8 py-4 text-lg font-semibold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                        🚀 Mulai Sekarang
                    </button>
                    <a href="{{ route('login') }}"
                        class="btn-blue-outline rounded-full px-8 py-4 text-lg font-semibold hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                        👤 Masuk Akun
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Statistics Section --}}
    <section class="bg-gradient-to-r from-primary-50 to-blue-50 py-16">
        <div class="my-container">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="space-y-2">
                    <div class="text-3xl md:text-4xl font-bold text-primary-600">1000+</div>
                    <div class="text-gray-600">Buku Tersedia</div>
                </div>
                <div class="space-y-2">
                    <div class="text-3xl md:text-4xl font-bold text-primary-600">500+</div>
                    <div class="text-gray-600">Pembaca Aktif</div>
                </div>
                <div class="space-y-2">
                    <div class="text-3xl md:text-4xl font-bold text-primary-600">100+</div>
                    <div class="text-gray-600">Video Edukasi</div>
                </div>
                <div class="space-y-2">
                    <div class="text-3xl md:text-4xl font-bold text-primary-600">24/7</div>
                    <div class="text-gray-600">Akses Kapan Saja</div>
                </div>
            </div>
        </div>
    </section>

    {{-- Featured Books Section --}}
    <section class="my-container py-16">
        <div class="max-w-screen-xl mx-auto">
            <div class="text-center mb-12">
                <h3 class="text-3xl md:text-4xl font-bold text-primary-800 mb-4">📚 Buku Favorit</h3>
                <p class="text-gray-600 text-lg">Koleksi buku pilihan yang paling disukai pembaca</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
                @foreach ($favoriteBooks as $book)
                    <div class="group">
                        <a href="{{ 'books/' . $book->slug }}" class="block">
                            <div
                                class="relative overflow-hidden rounded-2xl shadow-lg group-hover:shadow-2xl transition-all duration-300">
                                <div class="h-64 md:h-80 relative">
                                    <img src="{{ asset("images/$book->cover_name") }}" alt="Cover {{ $book->title }}"
                                        class="h-full w-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 space-y-2">
                                <h6
                                    class="font-semibold text-sm md:text-base line-clamp-2 group-hover:text-primary-600 transition-colors">
                                    {{ $book->title }}</h6>
                                <p class="text-xs md:text-sm text-gray-500">{{ $book->author }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Features Section --}}
    <section class="bg-gray-50 py-20">
        <div class="my-container">
            <div class="text-center mb-16">
                <h3 class="text-3xl md:text-4xl font-bold text-primary-800 mb-4">✨ Mengapa LiteracyBridge?</h3>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">Platform literasi terdepan dengan fitur-fitur unggulan
                    untuk pengalaman membaca terbaik</p>
            </div>

            <div class="space-y-20">
                {{-- Feature 1 --}}
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div class="space-y-6">
                        <div
                            class="inline-flex items-center px-4 py-2 bg-primary-100 text-primary-700 rounded-full text-sm font-medium">
                            📖 Baca & Pahami
                        </div>
                        <h3 class="text-2xl md:text-3xl font-bold text-primary-800">Baca. Pahami. Berkembang</h3>
                        <p class="text-gray-600 text-lg leading-relaxed">
                            Literacy Bridge adalah aplikasi yang menghubungkan Anda dengan buku-buku pilihan untuk membaca,
                            memahami, dan berkembang. Tingkatkan literasi Anda dan raih potensi penuh melalui pengetahuan
                            yang didapatkan.
                        </p>
                        <div class="flex items-center space-x-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                                <span class="text-sm text-gray-600">Akses Unlimited</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class="w-3 h-3 bg-blue-500 rounded-full"></div>
                                <span class="text-sm text-gray-600">Kualitas Terjamin</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <img src="./images/animasi.webp" alt="" class="w-80 md:w-96 rounded-2xl shadow-lg">
                    </div>
                </div>

                {{-- Feature 2 --}}
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div class="order-2 md:order-1 flex justify-center">
                        <dotlottie-player src="https://lottie.host/c3175f20-b91b-41fa-b359-539a1f7d8bc0/TgSqL4PVuC.json"
                            background="transparent" speed="1" style="width: 400px; height: 400px;" loop
                            autoplay></dotlottie-player>
                    </div>
                    <div class="order-1 md:order-2 space-y-6">
                        <div
                            class="inline-flex items-center px-4 py-2 bg-orange-100 text-orange-700 rounded-full text-sm font-medium">
                            🏆 Motivasi Membaca
                        </div>
                        <h3 class="text-2xl md:text-3xl font-bold text-primary-800">Sistem Ranking yang Memotivasi</h3>
                        <p class="text-gray-600 text-lg leading-relaxed">
                            Menghadirkan sistem ranking pembaca yang memotivasi Anda untuk membaca lebih banyak. Tingkatkan
                            peringkat Anda dengan setiap buku yang selesai, dan raih penghargaan atas pencapaian literasi
                            Anda.
                        </p>
                        <div class="space-y-3">
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center">
                                    <span class="text-yellow-600 text-sm">🥇</span>
                                </div>
                                <span class="text-gray-700">Kompetisi Sehat Antar Pembaca</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                    <span class="text-blue-600 text-sm">📊</span>
                                </div>
                                <span class="text-gray-700">Tracking Progress Membaca</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Feature 3 --}}
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div class="space-y-6">
                        <div
                            class="inline-flex items-center px-4 py-2 bg-purple-100 text-purple-700 rounded-full text-sm font-medium">
                            🌉 Jembatan Pengetahuan
                        </div>
                        <h3 class="text-2xl md:text-3xl font-bold text-primary-800">Jembatan Menuju Mimpi Anda</h3>
                        <p class="text-gray-600 text-lg leading-relaxed">
                            Literasi Baca adalah jembatan menuju mimpi Anda. Dengan membaca, Anda dapat mengakses
                            pengetahuan dan inspirasi yang diperlukan untuk mewujudkan impian dan mencapai kesuksesan.
                        </p>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="text-center p-4 bg-white rounded-xl shadow-sm">
                                <div class="text-2xl font-bold text-primary-600">∞</div>
                                <div class="text-sm text-gray-600">Pengetahuan Tak Terbatas</div>
                            </div>
                            <div class="text-center p-4 bg-white rounded-xl shadow-sm">
                                <div class="text-2xl font-bold text-primary-600">🎯</div>
                                <div class="text-sm text-gray-600">Fokus pada Tujuan</div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <dotlottie-player src="https://lottie.host/80907445-f1ae-4617-8321-b615807846c5/R2CrvD40Tj.json"
                            background="transparent" speed="1" style="width: 400px; height: 400px;" loop
                            autoplay></dotlottie-player>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Latest Books Section --}}
    <section class="my-container py-16">
        <div class="max-w-screen-xl mx-auto">
            <div class="text-center mb-12">
                <h3 class="text-3xl md:text-4xl font-bold text-primary-800 mb-4">🆕 Buku Terbaru</h3>
                <p class="text-gray-600 text-lg">Koleksi terbaru yang fresh dari oven untuk Anda</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
                @foreach ($latestBooks as $book)
                    <div class="group">
                        <a href="{{ 'books/' . $book->slug }}" class="block">
                            <div
                                class="relative overflow-hidden rounded-2xl shadow-lg group-hover:shadow-2xl transition-all duration-300">
                                <div class="h-64 md:h-80 relative">
                                    <img src="{{ asset("images/$book->cover_name") }}" alt="Cover {{ $book->title }}"
                                        class="h-full w-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                                    <div class="absolute top-2 right-2">
                                        <span class="bg-green-500 text-white text-xs px-2 py-1 rounded-full">NEW</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 space-y-2">
                                <h6
                                    class="font-semibold text-sm md:text-base line-clamp-2 group-hover:text-primary-600 transition-colors">
                                    {{ $book->title }}</h6>
                                <p class="text-xs md:text-sm text-gray-500">{{ $book->author }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="relative py-20 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-primary-600 to-primary-800"></div>
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="relative my-container text-center text-white">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">📱 Baca Dimana Saja, Kapan Saja</h1>
            <p class="text-xl md:text-2xl mb-8 opacity-90">Akses perpustakaan digital terlengkap di genggaman Anda</p>
            <div class="relative max-w-2xl mx-auto">
                <img src="./images/char5.webp" alt="" class="relative z-10 w-full max-h-96 object-contain">
            </div>
        </div>
    </section>

    {{-- Video Section --}}
    <section class="my-container py-16">
        <div class="max-w-screen-xl mx-auto">
            <div class="text-center mb-12">
                <h3 class="text-3xl md:text-4xl font-bold text-primary-800 mb-4">🎥 Video Literasi</h3>
                <p class="text-gray-600 text-lg">Konten video edukatif untuk meningkatkan minat baca Anda</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($videos as $video)
                    <div class="group">
                        <a href="https://www.youtube.com/watch?v={{ $video->youtube_link }}" target="_blank"
                            class="block">
                            <div
                                class="relative overflow-hidden rounded-2xl shadow-lg group-hover:shadow-2xl transition-all duration-300">
                                <div class="h-48 relative">
                                    <img src="https://img.youtube.com/vi/{{ $video->youtube_link }}/hqdefault.jpg"
                                        alt="Youtube thumbnail"
                                        class="h-full w-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                                    <div
                                        class="absolute inset-0 bg-black/30 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                        <div class="w-16 h-16 bg-red-600 rounded-full flex items-center justify-center">
                                            <svg class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M8 5v14l11-7z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 space-y-2">
                                <h6
                                    class="font-semibold text-sm md:text-base line-clamp-2 group-hover:text-primary-600 transition-colors">
                                    {{ $video->title }}</h6>
                                <p class="text-xs md:text-sm text-gray-500">{{ $video->creator }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Leaderboard Section --}}
    <section class="bg-gradient-to-r from-yellow-50 to-orange-50 py-16">
        <div class="my-container">
            <div class="max-w-screen-lg mx-auto">
                <div class="text-center mb-12">
                    <h3 class="text-3xl md:text-4xl font-bold text-primary-800 mb-4">🏆 Papan Peringkat</h3>
                    <p class="text-gray-600 text-lg">Sistem ranking yang memotivasi pembaca untuk terus berkembang</p>
                </div>

                <div class="grid grid-cols-4 gap-4 md:gap-8">
                    @for ($i = 1; $i <= 8; $i++)
                        <div class="group flex flex-col items-center">
                            <div
                                class="relative transform transition-all duration-300 group-hover:scale-110 group-hover:rotate-3">
                                <img src="{{ asset('./images/rank' . $i . '.png') }}" alt="Rank {{ $i }}"
                                    class="w-full max-w-[120px] md:max-w-[160px] rounded-2xl shadow-lg">
                                <div
                                    class="absolute -top-2 -right-2 w-8 h-8 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full flex items-center justify-center shadow-lg">
                                    <span class="text-white font-bold text-sm">#{{ $i }}</span>
                                </div>
                            </div>
                            <div class="mt-3 text-center">
                                <div class="text-sm font-semibold text-gray-700">Level {{ $i }}</div>
                                <div class="text-xs text-gray-500">
                                    @if ($i <= 2)
                                        Master Reader
                                    @elseif($i <= 4)
                                        Expert Reader
                                    @elseif($i <= 6)
                                        Advanced Reader
                                    @else
                                        Beginner Reader
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>

                <div class="text-center mt-12">
                    <div class="inline-flex items-center space-x-2 bg-white px-6 py-3 rounded-full shadow-lg">
                        <span class="text-gray-600">Mulai journey Anda dan raih ranking tertinggi!</span>
                        <span class="text-2xl">🚀</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js-custom')
    <script>
        // Add smooth scrolling and interactive elements
        document.addEventListener('DOMContentLoaded', function() {
            // Smooth scroll for CTA button
            const btnGo = document.getElementById('btnGo');
            if (btnGo) {
                btnGo.addEventListener('click', function() {
                    document.querySelector('section:nth-child(3)').scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            }

            // Add intersection observer for animations
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

            // Observe sections for animation
            document.querySelectorAll('section').forEach(section => {
                observer.observe(section);
            });
        });
    </script>
@endsection

