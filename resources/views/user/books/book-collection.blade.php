@extends('user.layouts.main')
@section('tab-title')
  Koleksi Buku
@endsection
@section('content')
  <section class="pb-16">
    <div class="relative">
      <!-- Background Image -->
      <img src="{{ asset('images/bg.webp') }}" alt="bg hero collection"
        class="absolute inset-0 w-full h-full object-cover z-0">

      <!-- Hero Text -->
      <div class="relative text-center px-4 mx-auto max-w-screen-xl p-24 lg:p-56 z-10 space-y-4">
        <h1 class="text-gray-50 md:text-2xl font-semibold">Tingkatkan Literasi, Mulai dari Membaca</h1>
        <h6 class="text-gray-50">Buku adalah investasi terbaik untuk pikiran yang cerdas dan penuh wawasan.</h6>
        <div class="flex justify-center">
          {{-- search --}}
          <div class="w-full flex flex-col items-center justify-center">
            <div class="w-full max-w-3xl bg-white-100 p-3 rounded-3xl shadow-lg">
              <section class="w-full flex items-center">
                <div class="relative flex items-center w-1/4">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-neutral-800 mr-2 absolute left-2"
                    viewBox="0 0 24 24">
                    <path fill="none" stroke="#525658" stroke-linecap="round" stroke-width="2"
                      d="M18.796 4H5.204a1 1 0 0 0-.753 1.659l5.302 6.058a1 1 0 0 1 .247.659v4.874a.5.5 0 0 0 .2.4l3 2.25a.5.5 0 0 0 .8-.4v-7.124a1 1 0 0 1 .247-.659l5.302-6.059c.566-.646.106-1.658-.753-1.658Z" />
                  </svg>
                  <select id="category" name="category"
                    class="w-full h-12 pl-8 pr-8 bg-white-100 rounded-l-lg focus:outline-none focus:border-none focus:ring-0 outline-none border-none appearance-none">
                    <option class="text-neutral-800" selected>Kategori</option>
                    <option>Category 1</option>
                    <option>Category 2</option>
                  </select>
                </div>
                <input type="text"
                  class="w-3/5 h-12 pl-4 bg-white-100 border-neutral-400 focus:outline-none focus:border-y-0 focus:ring-0 border-y-0 border-l border-r font-normal"
                  placeholder="Cari buku berdasarkan..">
                <button
                  class="w-1/5 h-12 flex items-center justify-center ml-4 rounded-full bg-gradient-to-r from-[#39ADF8] to-[#84CCFA] text-white font-medium transition-all duration-300 ease-in-out shadow-sm hover:bg-gradient-to-l hover:from-[#39ADF8] hover:to-[#84CCFA] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#39ADF8]"
                  style="color: white !important">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-0 md:mr-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                  </svg>
                  <span class="hidden sm:inline">Search</span>
                </button>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Rekomendasi buku --}}
  <section class="md:px-[160px] px-8 py-8">
    <div class="max-w-screen-lg mx-auto">
      <div class="font-medium text-[24px] text-center md:text-start">
        <h3>Rekomendasi Buku</h3>
      </div>
      <ul class="grid grid-cols-2 md:grid-cols-4 gap-4 py-5">
        @foreach ($books as $book)
          <li class="flex flex-col items-center md:items-start">
            <a href="{{ route('books.show', $book->slug) }}" class="block overflow-hidden rounded-xl max-w-full">
              <div class="h-64 relative overflow-hidden rounded-xl sm:h-[366px]">
                <img src="{{ asset("images/$book->cover_name") }}" alt="Cover {{ $book->title }}"
                  class="h-full w-full object-cover object-top rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110">
              </div>
              <div class="flex flex-col justify-between">
                <h6 class="mb-2 text-sm font-medium pt-3 line-clamp-2 hover:underline sm:text-base">{{ $book->title }}
                </h6>
                <p class="text-xs font-light line-clamp-1 sm:text-sm">Penulis {{ $book->author }}</p>
              </div>
            </a>
          </li>
        @endforeach
      </ul>
    </div>
  </section>

  {{-- Buku Terbaru --}}
  <section class="md:px-[160px] px-8 py-8">
    <div class="max-w-screen-lg mx-auto">
      <div class="font-medium text-[24px] text-center md:text-start">
        <h3>Buku Terbaru</h3>
      </div>
      <div class="grid grid-cols-2 md:grid-cols-5 gap-4 py-5">
        <!-- 1st Image -->
        <div class="relative flex flex-col items-center">
          <a href="#" class="block overflow-hidden rounded-xl max-w-full">
            <div class="relative overflow-hidden rounded-xl">
              <img src="./images/literasimembaca1.webp" alt=""
                class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110 w-[200px]">
              <!-- Badge -->
              <div
                class="absolute top-0 right-0 flex items-center justify-center w-12 h-8 bg-blue-500 text-white text-xs rounded-tr-xl rounded-bl-xl space-x-1">
                <span class="text-white-100 text-title1 font-medium">5</span>
                <img src="./images/point.webp" alt="Point Icon" class="w-5 h-5 mr-1">
              </div>
            </div>
            <h6 class="font-normal pt-3">Judul Buku</h6>
            <p class="font-light">Author John Doe</p>
          </a>
        </div>
        <!-- 2 Image -->
        <div class="relative flex flex-col items-center">
          <a href="#" class="block overflow-hidden rounded-xl max-w-full">
            <div class="relative overflow-hidden rounded-xl">
              <img src="./images/literasimembaca1.webp" alt=""
                class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110 w-[200px]">
              <!-- Badge -->
              <div
                class="absolute top-0 right-0 flex items-center justify-center w-12 h-8 bg-blue-500 text-white text-xs rounded-tr-xl rounded-bl-xl space-x-1">
                <span class="text-white-100 text-title1 font-medium">5</span>
                <img src="./images/point.webp" alt="Point Icon" class="w-5 h-5 mr-1">
              </div>
            </div>
            <h6 class="font-normal pt-3">Judul Buku</h6>
            <p class="font-light">Author John Doe</p>
          </a>
        </div>
        <!-- 3 Image -->
        <div class="relative flex flex-col items-center">
          <a href="#" class="block overflow-hidden rounded-xl max-w-full">
            <div class="relative overflow-hidden rounded-xl">
              <img src="./images/literasimembaca1.webp" alt=""
                class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110 w-[200px]">
              <!-- Badge -->
              <div
                class="absolute top-0 right-0 flex items-center justify-center w-12 h-8 bg-blue-500 text-white text-xs rounded-tr-xl rounded-bl-xl space-x-1">
                <span class="text-white-100 text-title1 font-medium">5</span>
                <img src="./images/point.webp" alt="Point Icon" class="w-5 h-5 mr-1">
              </div>
            </div>
            <h6 class="font-normal pt-3">Judul Buku</h6>
            <p class="font-light">Author John Doe</p>
          </a>
        </div>
        <!-- 4 Image -->
        <div class="relative flex flex-col items-center">
          <a href="#" class="block overflow-hidden rounded-xl max-w-full">
            <div class="relative overflow-hidden rounded-xl">
              <img src="./images/literasimembaca1.webp" alt=""
                class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110 w-[200px]">
              <!-- Badge -->
              <div
                class="absolute top-0 right-0 flex items-center justify-center w-12 h-8 bg-blue-500 text-white text-xs rounded-tr-xl rounded-bl-xl space-x-1">
                <span class="text-white-100 text-title1 font-medium">5</span>
                <img src="./images/point.webp" alt="Point Icon" class="w-5 h-5 mr-1">
              </div>
            </div>
            <h6 class="font-normal pt-3">Judul Buku</h6>
            <p class="font-light">Author John Doe</p>
          </a>
        </div>
        <!-- 5 Image -->
        <div class="relative flex flex-col items-center">
          <a href="#" class="block overflow-hidden rounded-xl max-w-full">
            <div class="relative overflow-hidden rounded-xl">
              <img src="./images/literasimembaca1.webp" alt=""
                class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110 w-[200px]">
              <!-- Badge -->
              <div
                class="absolute top-0 right-0 flex items-center justify-center w-12 h-8 bg-blue-500 text-white text-xs rounded-tr-xl rounded-bl-xl space-x-1">
                <span class="text-white-100 text-title1 font-medium">5</span>
                <img src="./images/point.webp" alt="Point Icon" class="w-5 h-5 mr-1">
              </div>
            </div>
            <h6 class="font-normal pt-3">Judul Buku</h6>
            <p class="font-light">Author John Doe</p>
          </a>
        </div>
      </div>
    </div>
  </section>

  {{-- Banyak Dikoleksi --}}
  <section class="md:px-[160px] px-8 py-8">
    <div class="max-w-screen-lg mx-auto space-y-6">
      <div class="font-medium text-[24px] text-center md:text-start">
        <h3>Banyak Dikoleksi</h3>
      </div>
      <div class="md:flex">
        <!-- Konten Grid -->
        <div class="w-full md:w-9/12 grid grid-cols-1 md:grid-cols-2 gap-3">
          <div class="flex items-start mt-2 mb-4">
            <a href="#" class="block overflow-hidden rounded-xl mr-4">
              <div class="relative overflow-hidden rounded-xl">
                <img src="{{ asset('images/literasimembaca1.webp') }}" alt=""
                  class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110">
                <!-- Badge -->
                <div
                  class="absolute top-0 right-0 flex items-center justify-center w-12 h-8 bg-blue-500 text-white text-xs rounded-tr-xl rounded-bl-xl space-x-1">
                  <span class="text-white-100 text-title1 font-medium">5</span>
                  <img src="./images/point.webp" alt="Point Icon" class="w-5 h-5 mr-1">
                </div>
              </div>
            </a>
            <div class="space-y-3">
              <h6 class="text-h6">Judul Buku</h6>
              <h6 class="text-caption text-primary-800">Author Jhon Doe</h6>
              <h6 class="block text-title2 text-black-400 font-normal">Ini adalah contoh deskripsi pokoknya apapun
                deskripsi lah dan tidak bisa...</h6>
              <div class="flex space-x-4 py-2">
                <div class="flex items-center">
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24">
                      <path fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M5 21V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16l-5.918-3.805a2 2 0 0 0-2.164 0z" />
                    </svg>
                  </a>
                  <span class="ml-1">115</span>
                </div>
                <div class="flex items-center">
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24">
                      <path fill="none" stroke="black" stroke-linejoin="round" stroke-width="1.5"
                        d="M22 8.862a5.95 5.95 0 0 1-1.654 4.13c-2.441 2.531-4.809 5.17-7.34 7.608c-.581.55-1.502.53-2.057-.045l-7.295-7.562c-2.205-2.286-2.205-5.976 0-8.261a5.58 5.58 0 0 1 8.08 0l.266.274l.265-.274A5.6 5.6 0 0 1 16.305 3c1.52 0 2.973.624 4.04 1.732A5.95 5.95 0 0 1 22 8.862Z" />
                    </svg>
                  </a>
                  <span class="ml-1">115</span>
                </div>
              </div>
            </div>
          </div>

          <div class="flex items-start mt-2 mb-4">
            <a href="#" class="block overflow-hidden rounded-xl mr-4">
              <div class="relative overflow-hidden rounded-xl">
                <img src="{{ asset('images/literasimembaca1.webp') }}" alt=""
                  class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110">
                <!-- Badge -->
                <div
                  class="absolute top-0 right-0 flex items-center justify-center w-12 h-8 bg-blue-500 text-white text-xs rounded-tr-xl rounded-bl-xl space-x-1">
                  <span class="text-white-100 text-title1 font-medium">5</span>
                  <img src="./images/point.webp" alt="Point Icon" class="w-5 h-5 mr-1">
                </div>
              </div>
            </a>
            <div class="space-y-3">
              <h6 class="text-h6">Judul Buku</h6>
              <h6 class="text-caption text-primary-800">Author Jhon Doe</h6>
              <h6 class="block text-title2 text-black-400 font-normal">Ini adalah contoh deskripsi pokoknya apapun
                deskripsi lah dan tidak bisa...</h6>
              <div class="flex space-x-4 py-2">
                <div class="flex items-center">
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24">
                      <path fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M5 21V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16l-5.918-3.805a2 2 0 0 0-2.164 0z" />
                    </svg>
                  </a>
                  <span class="ml-1">115</span>
                </div>
                <div class="flex items-center">
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24">
                      <path fill="none" stroke="black" stroke-linejoin="round" stroke-width="1.5"
                        d="M22 8.862a5.95 5.95 0 0 1-1.654 4.13c-2.441 2.531-4.809 5.17-7.34 7.608c-.581.55-1.502.53-2.057-.045l-7.295-7.562c-2.205-2.286-2.205-5.976 0-8.261a5.58 5.58 0 0 1 8.08 0l.266.274l.265-.274A5.6 5.6 0 0 1 16.305 3c1.52 0 2.973.624 4.04 1.732A5.95 5.95 0 0 1 22 8.862Z" />
                    </svg>
                  </a>
                  <span class="ml-1">115</span>
                </div>
              </div>
            </div>
          </div>
          <div class="flex items-start mt-2 mb-4">
            <a href="#" class="block overflow-hidden rounded-xl mr-4">
              <div class="relative overflow-hidden rounded-xl">
                <img src="{{ asset('images/literasimembaca1.webp') }}" alt=""
                  class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110">
                <!-- Badge -->
                <div
                  class="absolute top-0 right-0 flex items-center justify-center w-12 h-8 bg-blue-500 text-white text-xs rounded-tr-xl rounded-bl-xl space-x-1">
                  <span class="text-white-100 text-title1 font-medium">5</span>
                  <img src="./images/point.webp" alt="Point Icon" class="w-5 h-5 mr-1">
                </div>
              </div>
            </a>
            <div class="space-y-3">
              <h6 class="text-h6">Judul Buku</h6>
              <h6 class="text-caption text-primary-800">Author Jhon Doe</h6>
              <h6 class="block text-title2 text-black-400 font-normal">Ini adalah contoh deskripsi pokoknya apapun
                deskripsi lah dan tidak bisa...</h6>
              <div class="flex space-x-4 py-2">
                <div class="flex items-center">
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24">
                      <path fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M5 21V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16l-5.918-3.805a2 2 0 0 0-2.164 0z" />
                    </svg>
                  </a>
                  <span class="ml-1">115</span>
                </div>
                <div class="flex items-center">
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24">
                      <path fill="none" stroke="black" stroke-linejoin="round" stroke-width="1.5"
                        d="M22 8.862a5.95 5.95 0 0 1-1.654 4.13c-2.441 2.531-4.809 5.17-7.34 7.608c-.581.55-1.502.53-2.057-.045l-7.295-7.562c-2.205-2.286-2.205-5.976 0-8.261a5.58 5.58 0 0 1 8.08 0l.266.274l.265-.274A5.6 5.6 0 0 1 16.305 3c1.52 0 2.973.624 4.04 1.732A5.95 5.95 0 0 1 22 8.862Z" />
                    </svg>
                  </a>
                  <span class="ml-1">115</span>
                </div>
              </div>
            </div>
          </div>
          <div class="flex items-start mt-2 mb-4">
            <a href="#" class="block overflow-hidden rounded-xl mr-4">
              <div class="relative overflow-hidden rounded-xl">
                <img src="{{ asset('images/literasimembaca1.webp') }}" alt=""
                  class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110">
                <!-- Badge -->
                <div
                  class="absolute top-0 right-0 flex items-center justify-center w-12 h-8 bg-blue-500 text-white text-xs rounded-tr-xl rounded-bl-xl space-x-1">
                  <span class="text-white-100 text-title1 font-medium">5</span>
                  <img src="./images/point.webp" alt="Point Icon" class="w-5 h-5 mr-1">
                </div>
              </div>
            </a>
            <div class="space-y-3">
              <h6 class="text-h6">Judul Buku</h6>
              <h6 class="text-caption text-primary-800">Author Jhon Doe</h6>
              <h6 class="block text-title2 text-black-400 font-normal">Ini adalah contoh deskripsi pokoknya apapun
                deskripsi lah dan tidak bisa...</h6>
              <div class="flex space-x-4 py-2">
                <div class="flex items-center">
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24">
                      <path fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M5 21V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16l-5.918-3.805a2 2 0 0 0-2.164 0z" />
                    </svg>
                  </a>
                  <span class="ml-1">115</span>
                </div>
                <div class="flex items-center">
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24">
                      <path fill="none" stroke="black" stroke-linejoin="round" stroke-width="1.5"
                        d="M22 8.862a5.95 5.95 0 0 1-1.654 4.13c-2.441 2.531-4.809 5.17-7.34 7.608c-.581.55-1.502.53-2.057-.045l-7.295-7.562c-2.205-2.286-2.205-5.976 0-8.261a5.58 5.58 0 0 1 8.08 0l.266.274l.265-.274A5.6 5.6 0 0 1 16.305 3c1.52 0 2.973.624 4.04 1.732A5.95 5.95 0 0 1 22 8.862Z" />
                    </svg>
                  </a>
                  <span class="ml-1">115</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Gambar animasi -->
        <div class="hidden md:flex w-3/12 items-center">
          <img src="{{ asset('images/animasi.webp') }}" alt="">
        </div>
      </div>
    </div>
  </section>


  {{-- Pesan Literasi Untuk Siswa --}}
  <section class="py-12 md:py-16">
    <div class="relative bg-gradient-to-t from-[#39ADF8] to-[#84CCFA] py-8 md:py-16 flex justify-center">
      <div class="text-center md:text-left p-4">
        <h1 class="pb-6 md:pb-8 text-2xl md:text-3xl font-semibold text-center" style="color: white !important">Tips
          Membaca Dengan Rutin</h1>
        <img src="{{ asset('images/thumbnail.webp') }}" alt="Thumbnail"
          class="rounded-xl max-w-full md:max-w-[716px] mx-auto">
      </div>
    </div>
  </section>

  {{-- Banyak dibaca --}}
  <section class="md:px-[160px] px-8 py-8">
    <div class="max-w-screen-lg mx-auto">
      <div class="font-medium text-[24px] text-center md:text-start">
        <h3>Banyak Dibaca</h3>
      </div>
      <div class="grid grid-cols-2 md:grid-cols-5 gap-4 py-5">
        <!-- 1st Image -->
        <div class="relative flex flex-col items-center">
          <a href="#" class="block overflow-hidden rounded-xl max-w-full">
            <div class="relative overflow-hidden rounded-xl">
              <img src="./images/literasimembaca1.webp" alt=""
                class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110 w-[200px]">
              <!-- Badge -->
              <div
                class="absolute top-0 right-0 flex items-center justify-center w-12 h-8 bg-blue-500 text-white text-xs rounded-tr-xl rounded-bl-xl space-x-1">
                <span class="text-white-100 text-title1 font-medium">5</span>
                <img src="./images/point.webp" alt="Point Icon" class="w-5 h-5 mr-1">
              </div>
            </div>
            <h6 class="font-normal pt-3">Judul Buku</h6>
            <p class="font-light">Author John Doe</p>
          </a>
        </div>
        <!-- 2 Image -->
        <div class="relative flex flex-col items-center">
          <a href="#" class="block overflow-hidden rounded-xl max-w-full">
            <div class="relative overflow-hidden rounded-xl">
              <img src="./images/literasimembaca1.webp" alt=""
                class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110 w-[200px]">
              <!-- Badge -->
              <div
                class="absolute top-0 right-0 flex items-center justify-center w-12 h-8 bg-blue-500 text-white text-xs rounded-tr-xl rounded-bl-xl space-x-1">
                <span class="text-white-100 text-title1 font-medium">5</span>
                <img src="./images/point.webp" alt="Point Icon" class="w-5 h-5 mr-1">
              </div>
            </div>
            <h6 class="font-normal pt-3">Judul Buku</h6>
            <p class="font-light">Author John Doe</p>
          </a>
        </div>
        <!-- 3 Image -->
        <div class="relative flex flex-col items-center">
          <a href="#" class="block overflow-hidden rounded-xl max-w-full">
            <div class="relative overflow-hidden rounded-xl">
              <img src="./images/literasimembaca1.webp" alt=""
                class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110 w-[200px]">
              <!-- Badge -->
              <div
                class="absolute top-0 right-0 flex items-center justify-center w-12 h-8 bg-blue-500 text-white text-xs rounded-tr-xl rounded-bl-xl space-x-1">
                <span class="text-white-100 text-title1 font-medium">5</span>
                <img src="./images/point.webp" alt="Point Icon" class="w-5 h-5 mr-1">
              </div>
            </div>
            <h6 class="font-normal pt-3">Judul Buku</h6>
            <p class="font-light">Author John Doe</p>
          </a>
        </div>
        <!-- 4 Image -->
        <div class="relative flex flex-col items-center">
          <a href="#" class="block overflow-hidden rounded-xl max-w-full">
            <div class="relative overflow-hidden rounded-xl">
              <img src="./images/literasimembaca1.webp" alt=""
                class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110 w-[200px]">
              <!-- Badge -->
              <div
                class="absolute top-0 right-0 flex items-center justify-center w-12 h-8 bg-blue-500 text-white text-xs rounded-tr-xl rounded-bl-xl space-x-1">
                <span class="text-white-100 text-title1 font-medium">5</span>
                <img src="./images/point.webp" alt="Point Icon" class="w-5 h-5 mr-1">
              </div>
            </div>
            <h6 class="font-normal pt-3">Judul Buku</h6>
            <p class="font-light">Author John Doe</p>
          </a>
        </div>
        <!-- 5 Image -->
        <div class="relative flex flex-col items-center">
          <a href="#" class="block overflow-hidden rounded-xl max-w-full">
            <div class="relative overflow-hidden rounded-xl">
              <img src="./images/literasimembaca1.webp" alt=""
                class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110 w-[200px]">
              <!-- Badge -->
              <div
                class="absolute top-0 right-0 flex items-center justify-center w-12 h-8 bg-blue-500 text-white text-xs rounded-tr-xl rounded-bl-xl space-x-1">
                <span class="text-white-100 text-title1 font-medium">5</span>
                <img src="./images/point.webp" alt="Point Icon" class="w-5 h-5 mr-1">
              </div>
            </div>
            <h6 class="font-normal pt-3">Judul Buku</h6>
            <p class="font-light">Author John Doe</p>
          </a>
        </div>
      </div>
    </div>
  </section>

  {{-- Banyak point --}}
  <section class="md:px-[160px] px-8 py-8">
    <div class="max-w-screen-lg mx-auto">
      <div class="font-medium text-[24px] text-center md:text-start">
        <h3>Banyak Point</h3>
      </div>
      <div class="grid grid-cols-2 md:grid-cols-5 gap-4 py-5">
        <!-- 1st Image -->
        <div class="relative flex flex-col items-center">
          <a href="#" class="block overflow-hidden rounded-xl max-w-full">
            <div class="relative overflow-hidden rounded-xl">
              <img src="./images/literasimembaca1.webp" alt=""
                class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110 w-[200px]">
              <!-- Badge -->
              <div
                class="absolute top-0 right-0 flex items-center justify-center w-12 h-8 bg-blue-500 text-white text-xs rounded-tr-xl rounded-bl-xl space-x-1">
                <span class="text-white-100 text-title1 font-medium">5</span>
                <img src="./images/point.webp" alt="Point Icon" class="w-5 h-5 mr-1">
              </div>
            </div>
            <h6 class="font-normal pt-3">Judul Buku</h6>
            <p class="font-light">Author John Doe</p>
          </a>
        </div>
        <!-- 2 Image -->
        <div class="relative flex flex-col items-center">
          <a href="#" class="block overflow-hidden rounded-xl max-w-full">
            <div class="relative overflow-hidden rounded-xl">
              <img src="./images/literasimembaca1.webp" alt=""
                class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110 w-[200px]">
              <!-- Badge -->
              <div
                class="absolute top-0 right-0 flex items-center justify-center w-12 h-8 bg-blue-500 text-white text-xs rounded-tr-xl rounded-bl-xl space-x-1">
                <span class="text-white-100 text-title1 font-medium">5</span>
                <img src="./images/point.webp" alt="Point Icon" class="w-5 h-5 mr-1">
              </div>
            </div>
            <h6 class="font-normal pt-3">Judul Buku</h6>
            <p class="font-light">Author John Doe</p>
          </a>
        </div>
        <!-- 3 Image -->
        <div class="relative flex flex-col items-center">
          <a href="#" class="block overflow-hidden rounded-xl max-w-full">
            <div class="relative overflow-hidden rounded-xl">
              <img src="./images/literasimembaca1.webp" alt=""
                class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110 w-[200px]">
              <!-- Badge -->
              <div
                class="absolute top-0 right-0 flex items-center justify-center w-12 h-8 bg-blue-500 text-white text-xs rounded-tr-xl rounded-bl-xl space-x-1">
                <span class="text-white-100 text-title1 font-medium">5</span>
                <img src="./images/point.webp" alt="Point Icon" class="w-5 h-5 mr-1">
              </div>
            </div>
            <h6 class="font-normal pt-3">Judul Buku</h6>
            <p class="font-light">Author John Doe</p>
          </a>
        </div>
        <!-- 4 Image -->
        <div class="relative flex flex-col items-center">
          <a href="#" class="block overflow-hidden rounded-xl max-w-full">
            <div class="relative overflow-hidden rounded-xl">
              <img src="./images/literasimembaca1.webp" alt=""
                class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110 w-[200px]">
              <!-- Badge -->
              <div
                class="absolute top-0 right-0 flex items-center justify-center w-12 h-8 bg-blue-500 text-white text-xs rounded-tr-xl rounded-bl-xl space-x-1">
                <span class="text-white-100 text-title1 font-medium">5</span>
                <img src="./images/point.webp" alt="Point Icon" class="w-5 h-5 mr-1">
              </div>
            </div>
            <h6 class="font-normal pt-3">Judul Buku</h6>
            <p class="font-light">Author John Doe</p>
          </a>
        </div>
        <!-- 5 Image -->
        <div class="relative flex flex-col items-center">
          <a href="#" class="block overflow-hidden rounded-xl max-w-full">
            <div class="relative overflow-hidden rounded-xl">
              <img src="./images/literasimembaca1.webp" alt=""
                class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110 w-[200px]">
              <!-- Badge -->
              <div
                class="absolute top-0 right-0 flex items-center justify-center w-12 h-8 bg-blue-500 text-white text-xs rounded-tr-xl rounded-bl-xl space-x-1">
                <span class="text-white-100 text-title1 font-medium">5</span>
                <img src="./images/point.webp" alt="Point Icon" class="w-5 h-5 mr-1">
              </div>
            </div>
            <h6 class="font-normal pt-3">Judul Buku</h6>
            <p class="font-light">Author John Doe</p>
          </a>
        </div>
      </div>
    </div>
  </section>

  {{-- Lihat vidio Literasi Lainya --}}
  <section class="py-12 md:py-16">
    <div class="relative bg-gradient-to-t from-[#39ADF8] to-[#84CCFA] py-8 md:py-16 flex justify-center">
      <div class="text-center md:text-left p-4">
        <h1 class="pb-6 md:pb-8 text-2xl md:text-3xl font-semibold text-center" style="color: white !important">Lihat
          vidio Literasi Lainya </h1>
        <img src="{{ asset('images/thumbnail.webp') }}" alt="Thumbnail"
          class="rounded-xl max-w-full md:max-w-[716px] mx-auto">
      </div>
    </div>
  </section>
@endsection
