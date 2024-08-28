<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Home</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  {{-- tailwind --}}
  @vite('resources/css/app.css')
</head>

<body class="antialiased">
 <nav class="bg-white border-gray-200 md:px-[160px] px-4">
    <div class="max-w-screen-xl flex items-center justify-between mx-auto p-2 md:py-[22px]">
        <!-- Bagian Kiri: Logo dan Navigasi untuk Desktop -->
        <div class="flex items-center space-x-4">
            <!-- Logo hanya tampil di versi desktop -->
            <a href="#" class="hidden md:flex items-center">
                <img src="./images/logo.webp" class="w-[56px]" alt="logo aplikasi" />
            </a>

            <!-- Navigasi Desktop -->
            <ul class="hidden md:flex font-medium space-x-8 rtl:space-x-reverse">
                <li><a href="#" class="block py-2 px-3 text-gray-700 rounded md:bg-transparent md:p-0 dark:text-white" aria-current="page">Home</a></li>
                <li><a href="#" class="block py-2 px-3 text-gray-700 rounded md:bg-transparent md:p-0 dark:text-white" aria-current="page">Vidio</a></li>
                <li><a href="#" class="block py-2 px-3 text-gray-700 rounded md:bg-transparent md:p-0 dark:text-white" aria-current="page">Peringkat</a></li>
            </ul>
        </div>

        <!-- Bagian Kanan: Form Pencarian dan Profil untuk Desktop -->
        <div class="flex items-center space-x-4">
            <!-- Form Pencarian untuk Desktop -->
            <div class="relative max-w-md hidden md:block">
                <form action="" class="relative w-full">
                    <input type="search" class="peer cursor-pointer relative z-10 h-12 w-0 rounded-full border bg-transparent pl-12 outline-none transition-all duration-500 focus:w-80 focus:cursor-text focus:border-[#39ADF8] focus:pl-16 focus:pr-4" />
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute inset-y-0 my-auto h-8 w-12 border-r border-transparent stroke-gray-500 px-3.5 peer-focus:border-[#39ADF8] peer-focus:stroke-[#39ADF8] transition-all duration-500 ease-in-out" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </form>
            </div>

            <!-- Tombol Profil untuk Desktop -->
            <button id="profile-button" type="button" class="hidden md:inline-flex items-center justify-center w-10 h-10 text-sm rounded-full bg-primary-500 text-gray-100 focus:outline-none focus:ring-2">
                <span class="sr-only">Open user profile</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 12c2.208 0 4-1.791 4-4s-1.792-4-4-4-4 1.791-4 4 1.792 4 4 4zm0 2c-4.418 0-8 1.791-8 4 0 1.104.896 2 2 2h12c1.104 0 2-.896 2-2 0-2.209-3.582-4-8-4z" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Sidebar -->
    <div id="sidebar" class="hidden fixed top-0 right-0 h-full w-full md:w-72 bg-primary-500 shadow-lg z-40">
      <div class="p-4">
        <button id="close-sidebar" class="text-white hover:text-gray-900 focus:outline-none">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
        <!-- Konten di dalam sidebar -->
        <div class="mt-4">
          <a href="#" class="block px-4 py-2 text-gray-900 font-medium hover:bg-[#D9D9D9]">Profil</a>
          <a href="#" class="block px-4 py-2 text-gray-900 font-medium hover:bg-[#D9D9D9]">Pengaturan</a>
          <a href="#" class="block px-4 py-2 text-gray-900 font-medium hover:bg-[#D9D9D9]">Keluar</a>
        </div>
      </div>
    </div>

    <!-- Navigasi Mobile di sebelah Logo -->
    <div id="navbar-default" class="md:hidden flex items-center justify-between px-4 py-2">
      <a href="#" class="flex items-center">
          <img src="./images/logo.webp" class="w-[56px]" alt="Logo" /> <!-- Hanya tampil pada mobile -->
      </a>
      <button id="profile-button-mobile" type="button" class="inline-flex items-center justify-center w-10 h-10 text-sm rounded-full bg-secondary-500 text-gray-100 hover:bg-secondary-600 focus:outline-none focus:ring-2 focus:ring-secondary-700">
          <span class="sr-only">Open user profile</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 12c2.208 0 4-1.791 4-4s-1.792-4-4-4-4 1.791-4 4 1.792 4 4 4zm0 2c-4.418 0-8 1.791-8 4 0 1.104.896 2 2 2h12c1.104 0 2-.896 2-2 0-2.209-3.582-4-8-4z" />
          </svg>
      </button>
    </div>
</nav>


{{-- hero section --}}
<section class="pb-16">
  <div class="relative">
    <!-- Background Image -->
    <img src="{{ asset('images/bg.webp') }}" alt="bg hero collection" class="absolute inset-0 w-full h-full object-cover z-0">

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
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-neutral-800 mr-2 absolute left-2" viewBox="0 0 24 24">
                  <path fill="none" stroke="#525658" stroke-linecap="round" stroke-width="2" d="M18.796 4H5.204a1 1 0 0 0-.753 1.659l5.302 6.058a1 1 0 0 1 .247.659v4.874a.5.5 0 0 0 .2.4l3 2.25a.5.5 0 0 0 .8-.4v-7.124a1 1 0 0 1 .247-.659l5.302-6.059c.566-.646.106-1.658-.753-1.658Z"/>
                </svg>
                <select id="category" name="category" class="w-full h-12 pl-8 pr-8 bg-white-100 rounded-l-lg focus:outline-none appearance-none">
                  <option class="text-neutral-800" selected>Kategori</option>
                  <option>Category 1</option>
                  <option>Category 2</option>
                </select>
                <div class="absolute inset-y-0 right-4 flex items-center pointer-events-none">
                  <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                  </svg>
                </div>
              </div>
              <input type="text" class="w-3/5 h-12 pl-4 bg-white-100 focus:outline-none border-l border-r font-normal" placeholder="Cari buku berdasarkan..">
              <button class="w-1/5 h-12 flex items-center justify-center ml-4 rounded-full bg-gradient-to-r from-[#39ADF8] to-[#84CCFA] text-white font-medium transition-all duration-300 ease-in-out shadow-sm hover:bg-gradient-to-l hover:from-[#39ADF8] hover:to-[#84CCFA] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#39ADF8]" style="color: white !important">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-0 md:mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
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

{{-- Search book --}}
<section class="md:px-[160px] px-8 py-14">
  <div class="md:flex gap-16 justify-between">

    <div id="filter" class="w-64 text-white h-screen space-y-10 hidden">
      <!-- Sidebar content -->
      <div class="relative flex items-center w-full justify-between">
          <!-- SVG icon and title -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 pr-2 text-neutral-800 absolute" viewBox="0 0 24 24">
              <path fill="none" stroke="#525658" stroke-linecap="round" stroke-width="2" d="M18.796 4H5.204a1 1 0 0 0-.753 1.659l5.302 6.058a1 1 0 0 1 .247.659v4.874a.5.5 0 0 0 .2.4l3 2.25a.5.5 0 0 0 .8-.4v-7.124a1 1 0 0 1 .247-.659l5.302-6.059c.566-.646.106-1.658-.753-1.658Z" />
          </svg>
          <title1 class="text-neutral-800 font-medium pl-10">Filternya</title1>
          <div>
              <!-- Button to close sidebar -->
              <button id="toggleButton" class="hidden">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 32 32">
                      <path fill="#000000" d="M16.707 22.707a1 1 0 0 0 0-1.414L12.414 17H22a1 1 0 1 0 0-2h-9.586l4.293-4.293a1 1 0 0 0-1.414-1.414l-6 6a1 1 0 0 0 0 1.414l6 6a1 1 0 0 0 1.414 0M16 30c7.732 0 14-6.268 14-14S23.732 2 16 2S2 8.268 2 16s6.268 14 14 14m12-14c0 6.627-5.373 12-12 12S4 22.627 4 16S9.373 4 16 4s12 5.373 12 12" />
                  </svg>
              </button>
          </div>
      </div>

      <!-- Sidebar links -->
      <div class="space-y-10 flex-1 py-8 overflow-y-auto h-screen pt-1">
        <a href="#" class="flex  space-x-4">
          <img src="{{ asset('images/literasi.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
          <title1 class="text-neutral-800">Literasi</title1>
        </a>
        <a href="#" class="flex  space-x-4">
          <img src="{{ asset('images/romantis.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
          <title1 class="text-neutral-800">Romantis</title1>
        </a>
        <a href="#" class="flex  space-x-4">
          <img src="{{ asset('images/sains.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
          <title1 class="text-neutral-800">Sains</title1>
        </a>
        <a href="#" class="flex  space-x-4">
          <img src="{{ asset('images/cerita.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
          <title1 class="text-neutral-800">Cerita</title1>
        </a>
        <a href="#" class="flex  space-x-4">
          <img src="{{ asset('images/fantasi.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
          <title1 class="text-neutral-800">Fantasi</title1>
        </a>
        <a href="#" class="flex  space-x-4">
          <img src="{{ asset('images/sejarah.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
          <title1 class="text-neutral-800">Sejarah</title1>
        </a>
        <a href="#" class="flex  space-x-4">
          <img src="{{ asset('images/budaya.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
          <title1 class="text-neutral-800">Budaya</title1>
        </a>
        <a href="#" class="flex  space-x-4">
          <img src="{{ asset('images/horor.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
          <title1 class="text-neutral-800">Horor</title1>
        </a>
        <a href="#" class="flex  space-x-4">
          <img src="{{ asset('images/comic.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
          <title1 class="text-neutral-800">Comic</title1>
        </a>
        <a href="#" class="flex  space-x-4">
          <img src="{{ asset('images/mitos.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
          <title1 class="text-neutral-800">Mitos</title1>
        </a>
        <a href="#" class="flex  space-x-4">
          <img src="{{ asset('images/inspirasi.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
          <title1 class="text-neutral-800">Inspirasi</title1>
        </a>
        <a href="#" class="flex  space-x-4">
          <img src="{{ asset('images/budaya.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
          <title1 class="text-neutral-800">Budaya</title1>
        </a>
        <a href="#" class="flex  space-x-4">
          <img src="{{ asset('images/horor.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
          <title1 class="text-neutral-800">Horor</title1>
        </a>
        <a href="#" class="flex  space-x-4">
          <img src="{{ asset('images/comic.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
          <title1 class="text-neutral-800">Comic</title1>
        </a>
        <a href="#" class="flex  space-x-4">
          <img src="{{ asset('images/mitos.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
          <title1 class="text-neutral-800">Mitos</title1>
        </a>
        <a href="#" class="flex  space-x-4">
          <img src="{{ asset('images/inspirasi.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
          <title1 class="text-neutral-800">Inspirasi</title1>
        </a>
      </div>
  </div>

  <!-- Button to open sidebar -->
  <div>
      <button id="toggleButton1">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 32 32">
              <path fill="#000000" d="M16.707 22.707a1 1 0 0 0 0-1.414L12.414 17H22a1 1 0 1 0 0-2h-9.586l4.293-4.293a1 1 0 0 0-1.414-1.414l-6 6a1 1 0 0 0 0 1.414l6 6a1 1 0 0 0 1.414 0M16 30c7.732 0 14-6.268 14-14S23.732 2 16 2S2 8.268 2 16s6.268 14 14 14m12-14c0 6.627-5.373 12-12 12S4 22.627 4 16S9.373 4 16 4s12 5.373 12 12" />
          </svg>
      </button>
  </div>

     <!-- Sidebar -->
     {{-- <div id="filter" class="w-64 text-white h-screen space-y-2">
       <div class="relative flex items-center w-full justify-between pb-3">
         <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 pr-2 text-neutral-800 absolute" viewBox="0 0 24 24">
           <path fill="none" stroke="#525658" stroke-linecap="round" stroke-width="2" d="M18.796 4H5.204a1 1 0 0 0-.753 1.659l5.302 6.058a1 1 0 0 1 .247.659v4.874a.5.5 0 0 0 .2.4l3 2.25a.5.5 0 0 0 .8-.4v-7.124a1 1 0 0 1 .247-.659l5.302-6.059c.566-.646.106-1.658-.753-1.658Z"/>
         </svg>
         <title1 class="text-neutral-800 font-medium pl-10">Filternya</title1>
         <div>
          <button
            id="toggleButton">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 32 32"><path fill="#000000" d="M16.707 22.707a1 1 0 0 0 0-1.414L12.414 17H22a1 1 0 1 0 0-2h-9.586l4.293-4.293a1 1 0 0 0-1.414-1.414l-6 6a1 1 0 0 0 0 1.414l6 6a1 1 0 0 0 1.414 0M16 30c7.732 0 14-6.268 14-14S23.732 2 16 2S2 8.268 2 16s6.268 14 14 14m12-14c0 6.627-5.373 12-12 12S4 22.627 4 16S9.373 4 16 4s12 5.373 12 12"/></svg>
          </button>
        </div>
       </div>

      <div class="space-y-10 flex-1 py-8 overflow-y-auto h-screen pt-1">
        <a href="#" class="flex  space-x-4">
          <img src="{{ asset('images/literasi.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
          <title1 class="text-neutral-800">Literasi</title1>
        </a>
        <a href="#" class="flex  space-x-4">
          <img src="{{ asset('images/romantis.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
          <title1 class="text-neutral-800">Romantis</title1>
        </a>
        <a href="#" class="flex  space-x-4">
          <img src="{{ asset('images/sains.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
          <title1 class="text-neutral-800">Sains</title1>
        </a>
        <a href="#" class="flex  space-x-4">
          <img src="{{ asset('images/cerita.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
          <title1 class="text-neutral-800">Cerita</title1>
        </a>
        <a href="#" class="flex  space-x-4">
          <img src="{{ asset('images/fantasi.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
          <title1 class="text-neutral-800">Fantasi</title1>
        </a>
        <a href="#" class="flex  space-x-4">
          <img src="{{ asset('images/sejarah.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
          <title1 class="text-neutral-800">Sejarah</title1>
        </a>
        <a href="#" class="flex  space-x-4">
          <img src="{{ asset('images/budaya.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
          <title1 class="text-neutral-800">Budaya</title1>
        </a>
        <a href="#" class="flex  space-x-4">
          <img src="{{ asset('images/horor.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
          <title1 class="text-neutral-800">Horor</title1>
        </a>
        <a href="#" class="flex  space-x-4">
          <img src="{{ asset('images/comic.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
          <title1 class="text-neutral-800">Comic</title1>
        </a>
        <a href="#" class="flex  space-x-4">
          <img src="{{ asset('images/mitos.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
          <title1 class="text-neutral-800">Mitos</title1>
        </a>
        <a href="#" class="flex  space-x-4">
          <img src="{{ asset('images/inspirasi.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
          <title1 class="text-neutral-800">Inspirasi</title1>
        </a>
        <a href="#" class="flex  space-x-4">
          <img src="{{ asset('images/budaya.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
          <title1 class="text-neutral-800">Budaya</title1>
        </a>
        <a href="#" class="flex  space-x-4">
          <img src="{{ asset('images/horor.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
          <title1 class="text-neutral-800">Horor</title1>
        </a>
        <a href="#" class="flex  space-x-4">
          <img src="{{ asset('images/comic.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
          <title1 class="text-neutral-800">Comic</title1>
        </a>
        <a href="#" class="flex  space-x-4">
          <img src="{{ asset('images/mitos.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
          <title1 class="text-neutral-800">Mitos</title1>
        </a>
        <a href="#" class="flex  space-x-4">
          <img src="{{ asset('images/inspirasi.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
          <title1 class="text-neutral-800">Inspirasi</title1>
        </a>
      </div>
    </div>

    <div class="bg-neutral-600">
      <button id="toggleButton1">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 32 32"><path fill="#000000" d="M16.707 22.707a1 1 0 0 0 0-1.414L12.414 17H22a1 1 0 1 0 0-2h-9.586l4.293-4.293a1 1 0 0 0-1.414-1.414l-6 6a1 1 0 0 0 0 1.414l6 6a1 1 0 0 0 1.414 0M16 30c7.732 0 14-6.268 14-14S23.732 2 16 2S2 8.268 2 16s6.268 14 14 14m12-14c0 6.627-5.373 12-12 12S4 22.627 4 16S9.373 4 16 4s12 5.373 12 12"/></svg>
      </button>
    </div> --}}


{{-- buku flex --}}
      <div class="w-8/12">
        <div class="md:flex gap-8 justify-between">
          <div>
            <h5 class="text-neutral-800">Menampilkan Hasil Untuk <span class="font-semibold text-black-500">Literasi</span></h5>
          </div>
          <div class="flex items-center justify-between">
            <span class="text-neutral-600 mr-3">Urutan Berdasarkan: </span>
            <div class="relative flex items-center w-1/3">
              <select id="category" name="category" class="bg-white-100 rounded-l-lg focus:outline-none appearance-none w-full">
                <option class="text-neutral-800 flex items-center" selected>
                  Populer
                </option>
                <option>Category 1</option>
                <option>Category 2</option>
              </select>
              <div class="absolute inset-y-0 right-0 flex items-center pointer-events-none">
                <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
              </div>
            </div>
          </div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-12 py-5">
          <!-- 1st Image -->
          <div class="relative flex flex-col items-center">
            <a href="#" class="block overflow-hidden rounded-xl max-w-full">
              <div class="relative overflow-hidden rounded-xl">
                <img src="./images/literasimembaca1.webp" alt="" class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110 w-[200px]">
                <!-- Badge -->
                <div class="absolute top-0 right-0 flex items-center justify-center w-12 h-8 bg-blue-500 text-white text-xs rounded-tr-xl rounded-bl-xl space-x-1">
                  <span class="text-white-100 text-title1 font-medium">5</span>
                  <img src="./images/point.webp" alt="Point Icon" class="w-5 h-5 mr-1">
                </div>
              </div>
              <h6 class="font-normal pt-3  text-black-500">Judul Buku</h6>
              <p class="font-light text-black-400 text-title2">Author <span class="text-primary-800 text-title2">John Doe</span></p>
            </a>
          </div>
          <div class="relative flex flex-col items-center">
            <a href="#" class="block overflow-hidden rounded-xl max-w-full">
              <div class="relative overflow-hidden rounded-xl">
                <img src="./images/literasimembaca1.webp" alt="" class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110 w-[200px]">
                <!-- Badge -->
                <div class="absolute top-0 right-0 flex items-center justify-center w-12 h-8 bg-blue-500 text-white text-xs rounded-tr-xl rounded-bl-xl space-x-1">
                  <span class="text-white-100 text-title1 font-medium">5</span>
                  <img src="./images/point.webp" alt="Point Icon" class="w-5 h-5 mr-1">
                </div>
              </div>
              <h6 class="font-normal pt-3  text-black-500">Judul Buku</h6>
              <p class="font-light text-black-400 text-title2">Author <span class="text-primary-800 text-title2">John Doe</span></p>
            </a>
          </div>
          <div class="relative flex flex-col items-center">
            <a href="#" class="block overflow-hidden rounded-xl max-w-full">
              <div class="relative overflow-hidden rounded-xl">
                <img src="./images/literasimembaca1.webp" alt="" class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110 w-[200px]">
                <!-- Badge -->
                <div class="absolute top-0 right-0 flex items-center justify-center w-12 h-8 bg-blue-500 text-white text-xs rounded-tr-xl rounded-bl-xl space-x-1">
                  <span class="text-white-100 text-title1 font-medium">5</span>
                  <img src="./images/point.webp" alt="Point Icon" class="w-5 h-5 mr-1">
                </div>
              </div>
              <h6 class="font-normal pt-3  text-black-500">Judul Buku</h6>
              <p class="font-light text-black-400 text-title2">Author <span class="text-primary-800 text-title2">John Doe</span></p>
            </a>
          </div>
          <div class="relative flex flex-col items-center">
            <a href="#" class="block overflow-hidden rounded-xl max-w-full">
              <div class="relative overflow-hidden rounded-xl">
                <img src="./images/literasimembaca1.webp" alt="" class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110 w-[200px]">
                <!-- Badge -->
                <div class="absolute top-0 right-0 flex items-center justify-center w-12 h-8 bg-blue-500 text-white text-xs rounded-tr-xl rounded-bl-xl space-x-1">
                  <span class="text-white-100 text-title1 font-medium">5</span>
                  <img src="./images/point.webp" alt="Point Icon" class="w-5 h-5 mr-1">
                </div>
              </div>
              <h6 class="font-normal pt-3  text-black-500">Judul Buku</h6>
              <p class="font-light text-black-400 text-title2">Author <span class="text-primary-800 text-title2">John Doe</span></p>
            </a>
          </div>
          <div class="relative flex flex-col items-center">
            <a href="#" class="block overflow-hidden rounded-xl max-w-full">
              <div class="relative overflow-hidden rounded-xl">
                <img src="./images/literasimembaca1.webp" alt="" class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110 w-[200px]">
                <!-- Badge -->
                <div class="absolute top-0 right-0 flex items-center justify-center w-12 h-8 bg-blue-500 text-white text-xs rounded-tr-xl rounded-bl-xl space-x-1">
                  <span class="text-white-100 text-title1 font-medium">5</span>
                  <img src="./images/point.webp" alt="Point Icon" class="w-5 h-5 mr-1">
                </div>
              </div>
              <h6 class="font-normal pt-3  text-black-500">Judul Buku</h6>
              <p class="font-light text-black-400 text-title2">Author <span class="text-primary-800 text-title2">John Doe</span></p>
            </a>
          </div>
          <div class="relative flex flex-col items-center">
            <a href="#" class="block overflow-hidden rounded-xl max-w-full">
              <div class="relative overflow-hidden rounded-xl">
                <img src="./images/literasimembaca1.webp" alt="" class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110 w-[200px]">
                <!-- Badge -->
                <div class="absolute top-0 right-0 flex items-center justify-center w-12 h-8 bg-blue-500 text-white text-xs rounded-tr-xl rounded-bl-xl space-x-1">
                  <span class="text-white-100 text-title1 font-medium">5</span>
                  <img src="./images/point.webp" alt="Point Icon" class="w-5 h-5 mr-1">
                </div>
              </div>
              <h6 class="font-normal pt-3  text-black-500">Judul Buku</h6>
              <p class="font-light text-black-400 text-title2">Author <span class="text-primary-800 text-title2">John Doe</span></p>
            </a>
          </div>
          <div class="relative flex flex-col items-center">
            <a href="#" class="block overflow-hidden rounded-xl max-w-full">
              <div class="relative overflow-hidden rounded-xl">
                <img src="./images/literasimembaca1.webp" alt="" class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110 w-[200px]">
                <!-- Badge -->
                <div class="absolute top-0 right-0 flex items-center justify-center w-12 h-8 bg-blue-500 text-white text-xs rounded-tr-xl rounded-bl-xl space-x-1">
                  <span class="text-white-100 text-title1 font-medium">5</span>
                  <img src="./images/point.webp" alt="Point Icon" class="w-5 h-5 mr-1">
                </div>
              </div>
              <h6 class="font-normal pt-3  text-black-500">Judul Buku</h6>
              <p class="font-light text-black-400 text-title2">Author <span class="text-primary-800 text-title2">John Doe</span></p>
            </a>
          </div>
          <div class="relative flex flex-col items-center">
            <a href="#" class="block overflow-hidden rounded-xl max-w-full">
              <div class="relative overflow-hidden rounded-xl">
                <img src="./images/literasimembaca1.webp" alt="" class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110 w-[200px]">
                <!-- Badge -->
                <div class="absolute top-0 right-0 flex items-center justify-center w-12 h-8 bg-blue-500 text-white text-xs rounded-tr-xl rounded-bl-xl space-x-1">
                  <span class="text-white-100 text-title1 font-medium">5</span>
                  <img src="./images/point.webp" alt="Point Icon" class="w-5 h-5 mr-1">
                </div>
              </div>
              <h6 class="font-normal pt-3  text-black-500">Judul Buku</h6>
              <p class="font-light text-black-400 text-title2">Author <span class="text-primary-800 text-title2">John Doe</span></p>
            </a>
          </div>
          <div class="relative flex flex-col items-center">
            <a href="#" class="block overflow-hidden rounded-xl max-w-full">
              <div class="relative overflow-hidden rounded-xl">
                <img src="./images/literasimembaca1.webp" alt="" class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110 w-[200px]">
                <!-- Badge -->
                <div class="absolute top-0 right-0 flex items-center justify-center w-12 h-8 bg-blue-500 text-white text-xs rounded-tr-xl rounded-bl-xl space-x-1">
                  <span class="text-white-100 text-title1 font-medium">5</span>
                  <img src="./images/point.webp" alt="Point Icon" class="w-5 h-5 mr-1">
                </div>
              </div>
              <h6 class="font-normal pt-3  text-black-500">Judul Buku</h6>
              <p class="font-light text-black-400 text-title2">Author <span class="text-primary-800 text-title2">John Doe</span></p>
            </a>
          </div>
          <div class="relative flex flex-col items-center">
            <a href="#" class="block overflow-hidden rounded-xl max-w-full">
              <div class="relative overflow-hidden rounded-xl">
                <img src="./images/literasimembaca1.webp" alt="" class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110 w-[200px]">
                <!-- Badge -->
                <div class="absolute top-0 right-0 flex items-center justify-center w-12 h-8 bg-blue-500 text-white text-xs rounded-tr-xl rounded-bl-xl space-x-1">
                  <span class="text-white-100 text-title1 font-medium">5</span>
                  <img src="./images/point.webp" alt="Point Icon" class="w-5 h-5 mr-1">
                </div>
              </div>
              <h6 class="font-normal pt-3  text-black-500">Judul Buku</h6>
              <p class="font-light text-black-400 text-title2">Author <span class="text-primary-800 text-title2">John Doe</span></p>
            </a>
          </div>
          <div class="relative flex flex-col items-center">
            <a href="#" class="block overflow-hidden rounded-xl max-w-full">
              <div class="relative overflow-hidden rounded-xl">
                <img src="./images/literasimembaca1.webp" alt="" class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110 w-[200px]">
                <!-- Badge -->
                <div class="absolute top-0 right-0 flex items-center justify-center w-12 h-8 bg-blue-500 text-white text-xs rounded-tr-xl rounded-bl-xl space-x-1">
                  <span class="text-white-100 text-title1 font-medium">5</span>
                  <img src="./images/point.webp" alt="Point Icon" class="w-5 h-5 mr-1">
                </div>
              </div>
              <h6 class="font-normal pt-3  text-black-500">Judul Buku</h6>
              <p class="font-light text-black-400 text-title2">Author <span class="text-primary-800 text-title2">John Doe</span></p>
            </a>
          </div>
          <div class="relative flex flex-col items-center">
            <a href="#" class="block overflow-hidden rounded-xl max-w-full">
              <div class="relative overflow-hidden rounded-xl">
                <img src="./images/literasimembaca1.webp" alt="" class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110 w-[200px]">
                <!-- Badge -->
                <div class="absolute top-0 right-0 flex items-center justify-center w-12 h-8 bg-blue-500 text-white text-xs rounded-tr-xl rounded-bl-xl space-x-1">
                  <span class="text-white-100 text-title1 font-medium">5</span>
                  <img src="./images/point.webp" alt="Point Icon" class="w-5 h-5 mr-1">
                </div>
              </div>
              <h6 class="font-normal pt-3  text-black-500">Judul Buku</h6>
              <p class="font-light text-black-400 text-title2">Author <span class="text-primary-800 text-title2">John Doe</span></p>
            </a>
          </div>
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
              <img src="{{ asset('images/literasimembaca1.webp') }}" alt="" class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110">
               <!-- Badge -->
            <div class="absolute top-0 right-0 flex items-center justify-center w-12 h-8 bg-blue-500 text-white text-xs rounded-tr-xl rounded-bl-xl space-x-1">
              <span class="text-white-100 text-title1 font-medium">5</span>
              <img src="./images/point.webp" alt="Point Icon" class="w-5 h-5 mr-1">
            </div>
            </div>
          </a>
          <div class="space-y-3">
            <h6 class="text-h6">Judul Buku</h6>
            <h6 class="text-caption text-primary-800">Author Jhon Doe</h6>
            <h6 class="block text-title2 text-black-400 font-normal">Ini adalah contoh deskripsi pokoknya apapun deskripsi lah dan tidak bisa...</h6>
            <div class="flex space-x-4 py-2">
              <div class="flex items-center">
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24">
                    <path fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 21V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16l-5.918-3.805a2 2 0 0 0-2.164 0z"/>
                  </svg>
                </a>
                <span class="ml-1">115</span>
              </div>
              <div class="flex items-center">
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24"><path fill="none" stroke="black" stroke-linejoin="round" stroke-width="1.5" d="M22 8.862a5.95 5.95 0 0 1-1.654 4.13c-2.441 2.531-4.809 5.17-7.34 7.608c-.581.55-1.502.53-2.057-.045l-7.295-7.562c-2.205-2.286-2.205-5.976 0-8.261a5.58 5.58 0 0 1 8.08 0l.266.274l.265-.274A5.6 5.6 0 0 1 16.305 3c1.52 0 2.973.624 4.04 1.732A5.95 5.95 0 0 1 22 8.862Z"/></svg>
                </a>
                <span class="ml-1">115</span>
              </div>
            </div>
          </div>
        </div>

        <div class="flex items-start mt-2 mb-4">
          <a href="#" class="block overflow-hidden rounded-xl mr-4">
            <div class="relative overflow-hidden rounded-xl">
              <img src="{{ asset('images/literasimembaca1.webp') }}" alt="" class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110">
               <!-- Badge -->
            <div class="absolute top-0 right-0 flex items-center justify-center w-12 h-8 bg-blue-500 text-white text-xs rounded-tr-xl rounded-bl-xl space-x-1">
              <span class="text-white-100 text-title1 font-medium">5</span>
              <img src="./images/point.webp" alt="Point Icon" class="w-5 h-5 mr-1">
            </div>
            </div>
          </a>
          <div class="space-y-3">
            <h6 class="text-h6">Judul Buku</h6>
            <h6 class="text-caption text-primary-800">Author Jhon Doe</h6>
            <h6 class="block text-title2 text-black-400 font-normal">Ini adalah contoh deskripsi pokoknya apapun deskripsi lah dan tidak bisa...</h6>
            <div class="flex space-x-4 py-2">
              <div class="flex items-center">
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24">
                    <path fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 21V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16l-5.918-3.805a2 2 0 0 0-2.164 0z"/>
                  </svg>
                </a>
                <span class="ml-1">115</span>
              </div>
              <div class="flex items-center">
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24"><path fill="none" stroke="black" stroke-linejoin="round" stroke-width="1.5" d="M22 8.862a5.95 5.95 0 0 1-1.654 4.13c-2.441 2.531-4.809 5.17-7.34 7.608c-.581.55-1.502.53-2.057-.045l-7.295-7.562c-2.205-2.286-2.205-5.976 0-8.261a5.58 5.58 0 0 1 8.08 0l.266.274l.265-.274A5.6 5.6 0 0 1 16.305 3c1.52 0 2.973.624 4.04 1.732A5.95 5.95 0 0 1 22 8.862Z"/></svg>
                </a>
                <span class="ml-1">115</span>
              </div>
            </div>
          </div>
        </div>
        <div class="flex items-start mt-2 mb-4">
          <a href="#" class="block overflow-hidden rounded-xl mr-4">
            <div class="relative overflow-hidden rounded-xl">
              <img src="{{ asset('images/literasimembaca1.webp') }}" alt="" class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110">
               <!-- Badge -->
            <div class="absolute top-0 right-0 flex items-center justify-center w-12 h-8 bg-blue-500 text-white text-xs rounded-tr-xl rounded-bl-xl space-x-1">
              <span class="text-white-100 text-title1 font-medium">5</span>
              <img src="./images/point.webp" alt="Point Icon" class="w-5 h-5 mr-1">
            </div>
            </div>
          </a>
          <div class="space-y-3">
            <h6 class="text-h6">Judul Buku</h6>
            <h6 class="text-caption text-primary-800">Author Jhon Doe</h6>
            <h6 class="block text-title2 text-black-400 font-normal">Ini adalah contoh deskripsi pokoknya apapun deskripsi lah dan tidak bisa...</h6>
            <div class="flex space-x-4 py-2">
              <div class="flex items-center">
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24">
                    <path fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 21V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16l-5.918-3.805a2 2 0 0 0-2.164 0z"/>
                  </svg>
                </a>
                <span class="ml-1">115</span>
              </div>
              <div class="flex items-center">
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24"><path fill="none" stroke="black" stroke-linejoin="round" stroke-width="1.5" d="M22 8.862a5.95 5.95 0 0 1-1.654 4.13c-2.441 2.531-4.809 5.17-7.34 7.608c-.581.55-1.502.53-2.057-.045l-7.295-7.562c-2.205-2.286-2.205-5.976 0-8.261a5.58 5.58 0 0 1 8.08 0l.266.274l.265-.274A5.6 5.6 0 0 1 16.305 3c1.52 0 2.973.624 4.04 1.732A5.95 5.95 0 0 1 22 8.862Z"/></svg>
                </a>
                <span class="ml-1">115</span>
              </div>
            </div>
          </div>
        </div>
        <div class="flex items-start mt-2 mb-4">
          <a href="#" class="block overflow-hidden rounded-xl mr-4">
            <div class="relative overflow-hidden rounded-xl">
              <img src="{{ asset('images/literasimembaca1.webp') }}" alt="" class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110">
               <!-- Badge -->
            <div class="absolute top-0 right-0 flex items-center justify-center w-12 h-8 bg-blue-500 text-white text-xs rounded-tr-xl rounded-bl-xl space-x-1">
              <span class="text-white-100 text-title1 font-medium">5</span>
              <img src="./images/point.webp" alt="Point Icon" class="w-5 h-5 mr-1">
            </div>
            </div>
          </a>
          <div class="space-y-3">
            <h6 class="text-h6">Judul Buku</h6>
            <h6 class="text-caption text-primary-800">Author Jhon Doe</h6>
            <h6 class="block text-title2 text-black-400 font-normal">Ini adalah contoh deskripsi pokoknya apapun deskripsi lah dan tidak bisa...</h6>
            <div class="flex space-x-4 py-2">
              <div class="flex items-center">
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24">
                    <path fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 21V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16l-5.918-3.805a2 2 0 0 0-2.164 0z"/>
                  </svg>
                </a>
                <span class="ml-1">115</span>
              </div>
              <div class="flex items-center">
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24"><path fill="none" stroke="black" stroke-linejoin="round" stroke-width="1.5" d="M22 8.862a5.95 5.95 0 0 1-1.654 4.13c-2.441 2.531-4.809 5.17-7.34 7.608c-.581.55-1.502.53-2.057-.045l-7.295-7.562c-2.205-2.286-2.205-5.976 0-8.261a5.58 5.58 0 0 1 8.08 0l.266.274l.265-.274A5.6 5.6 0 0 1 16.305 3c1.52 0 2.973.624 4.04 1.732A5.95 5.95 0 0 1 22 8.862Z"/></svg>
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




{{-- footer --}}
<footer class="mt-[450px]">
  <div class="relative bg-primary-500 md:bg-transparent">
    <div class="h-full w-full hidden absolute -z-10 md:block">
      <img src="{{ asset("images/RectangleFooter.webp") }}" alt="Footer Background" class="h-full w-full object-top">
    </div>

    <div class="relative">
      <img src="{{ asset('images/char6.webp') }}" alt="" class="absolute -z-20 hidden md:block left-1/2 transform -translate-x-1/2 md:-translate-y-1/2  w-[450px] md:-top-5  top-1/2">
  </div>

    <ul class="px-6 py-20 pb-20 flex flex-wrap gap-11 text-white-100 md:gap-x-20 sm:justify-center md:px-28 lg:justify-between md:pt-64">
      <li class="font-bold">
        <h6>Sosial Media</h6>
        <ul class="font-normal space-y-4 py-4">
          <li class="group">
            <a href="#" class="block transition-all underline-offset-4 duration-500 group-hover:translate-x-4 group-hover:underline">Blog</a>
          </li>
          <li class="group">
            <a href="#" class="block transition-all underline-offset-4 duration-500 group-hover:translate-x-4 group-hover:underline">Instagram</a>
          </li>
          <li class="group">
            <a href="#" class="block transition-all underline-offset-4 duration-500 group-hover:translate-x-4 group-hover:underline">Facebook</a>
          </li>
          <li class="group">
            <a href="#" class="block transition-all underline-offset-4 duration-500 group-hover:translate-x-4 group-hover:underline">Youtube</a>
          </li>
        </ul>
      </li>
      <li class="font-bold">
        <h6>Tentang Kami</h6>
        <ul class="font-normal space-y-4 py-4">
          <li class="group">
            <a href="#" class="block transition-all underline-offset-4 duration-500 group-hover:translate-x-4 group-hover:underline">Buku</a>
          </li>
          <li class="group">
            <a href="#" class="block transition-all underline-offset-4 duration-500 group-hover:translate-x-4 group-hover:underline">Video</a>
          </li>
          <li class="group">
            <a href="#" class="block transition-all underline-offset-4 duration-500 group-hover:translate-x-4 group-hover:underline">Peringkat</a>
          </li>
          <li class="group">
            <a href="#" class="block transition-all underline-offset-4 duration-500 group-hover:translate-x-4 group-hover:underline">Lencana</a>
          </li>
        </ul>
      </li>
      <li class="font-bold">
        <h6>Kontak Kami</h6>
        <ul class="font-normal space-y-4 py-4">
          <li class="group">
            <a href="#" class="block transition-all underline-offset-4 duration-500 group-hover:translate-x-4 group-hover:underline">Email</a>
          </li>
          <li class="group">
            <a href="#" class="block transition-all underline-offset-4 duration-500 group-hover:translate-x-4 group-hover:underline">+62374393823</a>
          </li>
        </ul>
      </li>
      <li class="font-bold">
        <h6>Pusat Bantuan</h6>
        <ul class="font-normal space-y-4 py-4">
          <li class="group">
            <a href="#" class="block transition-all underline-offset-4 duration-500 group-hover:translate-x-4 group-hover:underline">Pernyataan Umum</a>
          </li>
          <li class="group">
            <a href="#" class="block transition-all underline-offset-4 duration-500 group-hover:translate-x-4 group-hover:underline">Pernyataan Umum Sekolah</a>
          </li>
          <li class="group">
            <a href="#" class="block transition-all underline-offset-4 duration-500 group-hover:translate-x-4 group-hover:underline">Pernyataan Umum Bridge</a>
          </li>
        </ul>
      </li>
      <li class="font-bold">
        <h6>Privasi Dan Ketentuan</h6>
        <ul class="font-normal space-y-4 py-4">
          <li class="group">
            <a href="#" class="block transition-all underline-offset-4 duration-500 group-hover:translate-x-4 group-hover:underline">Privasi</a>
          </li>
          <li class="group">
            <a href="#" class="block transition-all underline-offset-4 duration-500 group-hover:translate-x-4 group-hover:underline">Pernyataan Umum Sekolah</a>
          </li>
          <li class="group">
            <a href="#" class="block transition-all underline-offset-4 duration-500 group-hover:translate-x-4 group-hover:underline">Pernyataan Umum Bridge</a>
          </li>
        </ul>
      </li>
    </ul>
  </div>

  <div class="bg-primary-500 text-white-100 px-6 py-10 flex items-center flex-col sm:flex-row sm:justify-between md:px-28">
    <div class="space-y-3.5">
      <div class="flex gap-x-3 items-center">
        <img src="{{ asset("images/logo.webp") }}" alt="LiteracyBridge Logo" class="w-[40px] inline-block">
        <h1 class="inline-block uppercase font-extrabold text-litera text-xl md:text-h4">LITERACY BRIDGE</h1>
      </div>
      <h6 class="text-white text-base md:text-h6">Sudahkah anda membaca hari ini?</h6>
    </div>
    <div class="flex items-center text-white mt-3 sm:mt-0">
      <h1>© 2024 LiteracyBridge</h1>
    </div>
  </div>
</footer>

<script src="{{ asset('js/sidebar.js') }}"></script>
<script src="{{ asset('js/navbar.js') }}"></script>
</body>

</html>
