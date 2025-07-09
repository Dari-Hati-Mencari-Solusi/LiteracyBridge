@extends('user.layouts.main')
@section('tab-title')
    Home - LiteracyBridge
@endsection

@section('css-custom')
    <style>
        /* Add this to your existing CSS file */

        /* Hero Slider Styles */
        .slide {
            transform: translateX(100%);
            opacity: 0;
        }

        .slide-active {
            transform: translateX(0);
            opacity: 1;
        }

        .slide-enter {
            transform: translateX(100%);
            opacity: 0;
        }

        .slide-exit {
            transform: translateX(-100%);
            opacity: 0;
        }

        .slide {
            transition: transform 0.5s ease-in-out, opacity 0.5s ease-in-out;
        }

        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease-in-out;
        }

        .modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .modal-content {
            background: white;
            border-radius: 16px;
            padding: 2rem;
            max-width: 500px;
            width: 90%;
            transform: scale(0.8);
            transition: transform 0.3s ease-in-out;
            position: relative;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        .modal-overlay.active .modal-content {
            transform: scale(1);
        }

        .modal-close {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: #6b7280;
            transition: color 0.2s;
        }

        .modal-close:hover {
            color: #374151;
        }

        .modal-icon {
            width: 64px;
            height: 64px;
            margin: 0 auto 1rem;
            background: linear-gradient(135deg, #39ADF8, #84CCFA);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .modal-title {
            font-size: 1.5rem;
            font-weight: 600;
            text-align: center;
            margin-bottom: 1rem;
            color: #1f2937;
        }

        .modal-text {
            text-align: center;
            color: #6b7280;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .modal-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
        }

        .btn-primary {
            background: linear-gradient(135deg, #39ADF8, #84CCFA);
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
            transition: transform 0.2s;
        }

        .btn-primary:hover {
            transform: translateY(-1px);
        }

        .btn-secondary {
            background: transparent;
            color: #6b7280;
            border: 1px solid #d1d5db;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
        }

        .btn-secondary:hover {
            background: #f9fafb;
            border-color: #9ca3af;
        }
    </style>
@endsection


@section('content')
    <!-- Welcome Modal -->
    <div id="welcomeModal" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal()">&times;</button>

            <div class="modal-icon">
                <svg width="32" height="32" fill="white" viewBox="0 0 24 24">
                    <path
                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                </svg>
            </div>

            <h2 class="modal-title">Selamat Datang di Literacy Bridge!</h2>

            <p class="modal-text">
                Halo {{ $user->name ?? 'Pengguna' }}! Selamat datang di platform literasi terbaik.
                Siap untuk memulai perjalanan membaca Anda dan meningkatkan literasi bersama kami?
            </p>

            <div class="modal-buttons">
                <button class="btn-primary" onclick="startReading()">
                    Mulai Membaca
                </button>
                <button class="btn-secondary" onclick="closeModal()">
                    Nanti Saja
                </button>
            </div>
        </div>
    </div>

    <!-- Hero Slider Banner -->
    <section class="relative h-96 overflow-hidden my-container rounded-lg" id="hero-slider">
        <!-- Slide 1 -->
        <div class="slide absolute inset-0 transition-all duration-500 ease-in-out translate-x-0 opacity-100"
            data-slide="0">
            <div class="h-full bg-gradient-to-r from-blue-600 to-blue-300 flex items-center">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                    <div class="grid md:grid-cols-2 gap-8 items-center">
                        <div class="text-white-100 space-y-6">
                            <h1 class="text-4xl md:text-5xl font-bold leading-tight">Selamat Datang di Literacy Bridge</h1>
                            <p class="text-xl opacity-90">Tingkatkan literasi Anda dengan koleksi buku terlengkap</p>
                            <button
                                class="bg-white-100 text-gray-900 hover:bg-gray-100 px-6 py-3 rounded-md font-medium transition-colors">
                                Mulai Membaca
                            </button>
                        </div>
                        <div class="hidden md:block">
                            <img src="{{ asset('images/thumbnail.webp') }}" alt="Hero Image"
                                class="w-full h-64 object-cover rounded-lg shadow-2xl">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="slide absolute inset-0 transition-all duration-500 ease-in-out translate-x-full opacity-0"
            data-slide="1">
            <div class="h-full bg-gradient-to-r from-blue-600 to-blue-800 flex items-center">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                    <div class="grid md:grid-cols-2 gap-8 items-center">
                        <div class="text-white-100 space-y-6">
                            <h1 class="text-4xl md:text-5xl font-bold leading-tight">Buku Baru Setiap Minggu</h1>
                            <p class="text-xl opacity-90">Dapatkan akses ke ribuan buku dari berbagai kategori</p>
                            <button
                                class="bg-white-100 text-gray-900 hover:bg-gray-100 px-6 py-3 rounded-md font-medium transition-colors">
                                Jelajahi Koleksi
                            </button>
                        </div>
                        <div class="hidden md:block">
                            <img src="{{ asset('images/thumbnail.webp') }}" alt="Hero Image"
                                class="w-full h-64 object-cover rounded-lg shadow-2xl">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="slide absolute inset-0 transition-all duration-500 ease-in-out translate-x-full opacity-0"
            data-slide="2">
            <div class="h-full bg-gradient-to-r from-blue-500 to-blue-700 flex items-center">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                    <div class="grid md:grid-cols-2 gap-8 items-center">
                        <div class="text-white-100 space-y-6">
                            <h1 class="text-4xl md:text-5xl font-bold leading-tight">Baca Kapan Saja, Dimana Saja</h1>
                            <p class="text-xl opacity-90">Nikmati pengalaman membaca yang tak terbatas</p>
                            <button
                                class="bg-white-100 text-gray-900 hover:bg-gray-100 px-6 py-3 rounded-md font-medium transition-colors">
                                Baca Sekarang
                            </button>
                        </div>
                        <div class="hidden md:block">
                            <img src="{{ asset('images/thumbnail.webp') }}" alt="Hero Image"
                                class="w-full h-64 object-cover rounded-lg shadow-2xl">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slider Controls -->
        <button id="prev-slide"
            class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white/20 hover:bg-white/30 text-white p-2 rounded-full transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>
        <button id="next-slide"
            class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white/20 hover:bg-white/30 text-white p-2 rounded-full transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>

        <!-- Slider Indicators -->
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2" id="slide-indicators">
            <button class="w-3 h-3 rounded-full bg-white indicator active" data-slide="0"></button>
            <button class="w-3 h-3 rounded-full bg-white/50 indicator" data-slide="1"></button>
            <button class="w-3 h-3 rounded-full bg-white/50 indicator" data-slide="2"></button>
        </div>
    </section>


    {{-- content 1 --}}
    <section class="max-md:px-8 my-container py-16">
        <div class="w-full">
            <div class="font-medium text-[24px] text-center md:text-start">
                <h3>Rekomendasi Buku</h3>
            </div>
            <ul class="grid grid-cols-2 md:grid-cols-4 gap-4 py-5">
                @foreach ($favoriteBooks as $book)
                    <x-book-card title="{{ $book->title }}" authors="{{ $book->author }}"
                        image="{{ asset('images/' . $book->cover_name) }}" category="Textbook"
                        link="{{ route('books.show', $book->slug) }}">
                    </x-book-card>
                @endforeach
            </ul>
        </div>
    </section>

    {{-- Rekomendasi Buku Literasi --}}
    <section class="max-md:px-8 my-container pt-12 pb-16">
        <div class="max-w-full">
            <div class="font-medium text-[24px] text-center md:text-start">
                <h3>Rekomendasi Buku Literasi</h3>
            </div>
            <ul class="grid grid-cols-2 md:grid-cols-4 gap-4 py-5">
                @foreach ($literationBooks as $book)
                    <x-book-card title="{{ $book->title }}" authors="{{ $book->author }}"
                        image="{{ asset('images/' . $book->cover_name) }}" category="Textbook"
                        link="{{ route('books.show', $book->slug) }}">
                    </x-book-card>
                @endforeach
            </ul>
        </div>
    </section>


    {{-- some book3 --}}
    <section class="max-md:px-8 py-16 md:py-24 my-container">
        <div class="max-w-full mx-auto">
            <div class="font-medium text-[24px] text-center md:text-start">
                <h3>Buku Terbaru</h3>
            </div>
            <ul class="grid grid-cols-2 md:grid-cols-4 gap-4 py-5">
                @foreach ($latestBooks as $book)
                    <x-book-card title="{{ $book->title }}" authors="{{ $book->author }}"
                        image="{{ asset('images/' . $book->cover_name) }}" category="Textbook"
                        link="{{ route('books.show', $book->slug) }}">
                    </x-book-card>
                @endforeach
            </ul>
        </div>
    </section>


    {{-- vidio literasi --}}
    <section class="max-md:px-8 py-16 my-container">
        <div class="max-w-full">
            <div class="font-medium text-[24px] text-center md:text-start">
                <h3>Vidio Literasi</h3>
            </div>
            <ul class="grid grid-cols-2 md:grid-cols-4 gap-2 py-5">
                @foreach ($videos as $video)
                    <li class="flex flex-col items-center md:items-start">
                        <a href="https://www.youtube.com/watch?v={{ $video->youtube_link }}" target="_blank"
                            class="block overflow-hidden rounded-xl max-w-full">
                            <!-- Atur tinggi gambar menjadi lebih kecil dengan h-40 -->
                            <div class="relative overflow-hidden rounded-xl h-40 sm:h-52">
                                <img src="https://img.youtube.com/vi/{{ $video->youtube_link }}/hqdefault.jpg"
                                    alt="Youtube thumbnail"
                                    class="h-full w-full object-cover object-top transform transition-transform duration-300 ease-in-out hover:scale-110">
                            </div>
                            <div class="flex flex-col justify-between mt-2">
                                <h6 class="text-sm font-medium line-clamp-2 sm:text-base hover:underline">
                                    {{ $video->title }}</h6>
                                <p class="text-xs font-light sm:text-sm">Creator {{ $video->creator }}</p>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>



    {{-- Pesan Literasi Untuk Siswa --}}
    <section class="py-12 md:py-16">
        <div class="relative bg-gradient-to-t from-[#39ADF8] to-[#84CCFA] py-8 md:py-16 flex justify-center">
            <div class="text-center md:text-left p-4">
                <h1 class="pb-6 md:pb-8 text-2xl md:text-3xl font-semibold text-center" style="color: white !important">
                    Pesan
                    Literasi Untuk Siswa</h1>
                <img src="{{ asset('images/thumbnail.webp') }}" alt="Thumbnail"
                    class="rounded-xl max-w-full md:max-w-[716px] mx-auto">
            </div>
        </div>
    </section>


    {{-- Liga bookworms --}}
    <section class="md:px-[160px]">
        <div class="max-w-screen-lg mx-auto space-y-10">
            <div class="grid grid-cols-4 md:grid-cols-8 gap-12 px-6 md:px-0">
                <div class="flex justify-center items-center">
                    <img src="{{ asset('./images/rankunlock.png') }}" alt="gambar rank unlock"
                        class="rounded-xl object-cover">
                </div>
                <div class="flex justify-center items-center">
                    <img src="{{ asset('./images/ranklock.png') }}" alt="gambar lock" class="rounded-xl object-cover">
                </div>
                <div class="flex justify-center items-center">
                    <img src="{{ asset('./images/ranklock.png') }}" alt="gambar lock" class="rounded-xl object-cover">
                </div>
                <div class="flex justify-center items-center">
                    <img src="{{ asset('./images/ranklock.png') }}" alt="gambar lock" class="rounded-xl object-cover">
                </div>
                <div class="flex justify-center items-center">
                    <img src="{{ asset('./images/ranklock.png') }}" alt="gambar lock" class="rounded-xl object-cover">
                </div>
                <div class="flex justify-center items-center">
                    <img src="{{ asset('./images/ranklock.png') }}" alt="gambar lock" class="rounded-xl object-cover">
                </div>
                <div class="flex justify-center items-center">
                    <img src="{{ asset('./images/ranklock.png') }}" alt="gambar lock" class="rounded-xl object-cover">
                </div>
                <div class="flex justify-center items-center">
                    <img src="{{ asset('./images/ranklock.png') }}" alt="gambar lock" class="rounded-xl object-cover">
                </div>
            </div>
            <div class="text-center">
                <h1 class="text-neutral-800 text-[28px] font-bold">Liga Bookworms</h1>
                <h6 class="text-neutral-800 font-normal text-lg">Selesaikan membaca satu buku untuk bergabung di papan skor
                    ini
                </h6>
                <div class="md:flex justify-center pt-2">
                    <button
                        class="btn-blue-outline md:flex justify-center rounded-full border-[1.5px] border-neutral-500 bg-transparent px-[55px] py-3 text-lg font-semibold leading-6 text-[#39ADF8]">
                        Mulai Membaca
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('js-custom')
    <script>
        $(document).ready(function() {
            let currentSlide = 0;
            const totalSlides = 3;
            let slideInterval;

            // Initialize slider
            function initSlider() {
                slideInterval = setInterval(nextSlide, 5000);
            }

            // Show specific slide
            function showSlide(index) {
                // Hide all slides
                $('.slide').removeClass('translate-x-0 opacity-100').addClass('translate-x-full opacity-0');

                // Show target slide
                $('.slide[data-slide="' + index + '"]').removeClass('translate-x-full opacity-0').addClass(
                    'translate-x-0 opacity-100');

                // Update indicators
                $('.indicator').removeClass('active bg-white').addClass('bg-white/50');
                $('.indicator[data-slide="' + index + '"]').addClass('active bg-white').removeClass('bg-white/50');

                currentSlide = index;
            }

            // Next slide
            function nextSlide() {
                const next = (currentSlide + 1) % totalSlides;
                showSlide(next);
            }

            // Previous slide
            function prevSlide() {
                const prev = (currentSlide - 1 + totalSlides) % totalSlides;
                showSlide(prev);
            }

            // Event listeners
            $('#next-slide').click(function() {
                clearInterval(slideInterval);
                nextSlide();
                initSlider();
            });

            $('#prev-slide').click(function() {
                clearInterval(slideInterval);
                prevSlide();
                initSlider();
            });

            // Indicator clicks
            $('.indicator').click(function() {
                clearInterval(slideInterval);
                const slideIndex = parseInt($(this).data('slide'));
                showSlide(slideIndex);
                initSlider();
            });

            // Initialize
            initSlider();


            const welcomeModalShown = localStorage.getItem('welcomeModalShown');

            setTimeout(function() {
                if (welcomeModalShown === 'true') {
                    return;
                } else {
                    showModal();
                    localStorage.setItem('welcomeModalShown', 'true'); // Reset for demo purposes
                }
            }, 500);

            // Modal functions
            function showModal() {
                $('#welcomeModal').addClass('active');
                $('body').css('overflow', 'hidden'); // Prevent scrolling
            }

            window.closeModal = function() {
                $('#welcomeModal').removeClass('active');
                $('body').css('overflow', 'auto'); // Enable scrolling

                // Store in localStorage so modal doesn't show again this session
                localStorage.setItem('welcomeModalShown', 'true');
            }

            window.startReading = function() {
                closeModal();
                // Scroll to books section
                $('html, body').animate({
                    scrollTop: $('.max-md\\:px-8.my-container.py-16').offset().top - 100
                }, 800);
            }

            // Check if modal was already shown this session
            if (localStorage.getItem('welcomeModalShown') === 'true') {
                return;
            }

            // Close modal when clicking outside
            $('#welcomeModal').click(function(e) {
                if (e.target === this) {
                    closeModal();
                }
            });

        });
    </script>
@endsection
