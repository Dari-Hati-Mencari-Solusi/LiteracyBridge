<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Landing Page</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  {{-- tailwind --}}
  @vite('resources/css/app.css')
</head>

<body class="antialiased font-poppins overflow-x-hidden">
  <nav class="bg-white border-gray-200 md:px-[160px] px-4">
    <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4 md:pf-[22px]">
      <!-- Logo dan Navigasi -->
      <div class="flex items-center w-full md:w-auto md:space-x-[32px] rtl:space-x-reverse">
        <a href="#" class="flex items-center">
          <img src="./images/logo.webp" class="w-[56px]" alt="Flowbite Logo" />
        </a>

        <!-- Navigasi Desktop -->
        <div class="hidden md:flex md:items-center md:space-x-8 md:ml-4 justify-between">
          <ul class="font-medium flex flex-col md:flex-row md:space-x-8 rtl:space-x-reverse mt-4 md:mt-0 border border-gray-100 md:border-0 rounded-lg md:bg-transparent">
            <li><a href="#" class="block py-2 px-3 text-gray-700 rounded md:bg-transparent md:p-0 dark:text-white" aria-current="page">Home</a></li>
            <li><a href="#" class="block py-2 px-3 text-gray-700 rounded md:bg-transparent md:p-0 dark:text-white" aria-current="page">Vidio</a></li>
            <li><a href="#" class="block py-2 px-3 text-gray-700 rounded md:bg-transparent md:p-0 dark:text-white" aria-current="page">Peringkat</a></li>
          </ul>

          <!-- Form Pencarian dan Tombol Masuk untuk Desktop -->
          <div class="flex items-center space-x-4 ml-auto">
            <!-- Form Pencarian untuk Desktop -->
            <div class="relative max-w-md">
              <form action="" class="relative w-full">
                <input type="search" class="peer cursor-pointer relative z-10 h-12 w-0 rounded-full border bg-transparent pl-12 outline-none transition-all duration-500 focus:w-80 focus:cursor-text focus:border-[#39ADF8] focus:pl-16 focus:pr-4" />
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute inset-y-0 my-auto h-8 w-12 border-r border-transparent stroke-gray-500 px-3.5 peer-focus:border-[#39ADF8] peer-focus:stroke-[#39ADF8] transition-all duration-500 ease-in-out" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
              </form>
            </div>
            <!-- Tombol Masuk untuk Desktop -->
            <button type="submit" class="custom-button flex justify-center rounded-full bg-gradient-to-r from-[#39ADF8] to-[#84CCFA] px-[22px] py-2 text-lg font-semibold leading-6 text-white shadow-sm hover:bg-indigo-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 hover:bg-gradient-to-l hover:from-[#39ADF8] hover:to-[#84CCFA]" style="color:white !important">Masuk</button>
          </div>
        </div>
      </div>

      <!-- Tombol Menu Mobile -->
      <button id="menu-toggle" type="button" class="ml-auto inline-flex items-center p-2 w-10 h-10 justify-center text-sm rounded-lg md:hidden focus:outline-none focus:ring-2 focus:ring-neutral-00 text-gray-400 hover:bg-[#39ADF8] focus:ring-white" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
      </button>
    </div>

    <!-- Navigasi Mobile -->
    <div id="navbar-default" class="hidden md:hidden w-full">
      <ul class="font-medium flex flex-col space-y-2 mt-4 rounded-lg">
        <li><a href="#" class="block py-2 px-3 text-gray-700 rounded md:bg-transparent md:p-0 dark:text-white" aria-current="page">Home</a></li>
        <li><a href="#" class="block py-2 px-3 text-gray-700 rounded md:bg-transparent md:p-0 dark:text-white" aria-current="page">Vidio</a></li>
        <li><a href="#" class="block py-2 px-3 text-gray-700 rounded md:bg-transparent md:p-0 dark:text-white" aria-current="page">Peringkat</a></li>
      </ul>
      <!-- Form Pencarian untuk Mobile -->
      <div class="relative flex-grow max-w-md mt-4 md:hidden">
        <form action="" class="relative w-full">
          <input type="search" class="peer cursor-pointer relative z-10 h-12 w-full rounded-full border bg-transparent pl-12 outline-none focus:w-full focus:cursor-text focus:border-[#39ADF8] focus:pl-16 focus:pr-4 transition-all duration-500" />
          <svg xmlns="http://www.w3.org/2000/svg" class="absolute inset-y-0 my-auto h-8 w-12 border-r border-transparent stroke-gray-500 px-3.5 peer-focus:border-[#39ADF8] peer-focus:stroke-[#39ADF8] transition-all duration-500 ease-in-out" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
        </form>
      </div>
      <!-- Tombol Masuk untuk Mobile -->
      <button type="submit" class="custom-button flex justify-center rounded-full bg-gradient-to-r from-[#39ADF8] to-[#84CCFA] px-[22px] py-2 text-lg font-semibold leading-6 text-white shadow-sm hover:bg-indigo-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 hover:bg-gradient-to-l hover:from-[#39ADF8] hover:to-[#84CCFA] mt-4" style="color:white !important">Masuk</button>
    </div>
  </nav>



  {{-- hero section --}}
  <section class="py-[114px] md:px-[160px]">
    <div class="md:flex md:justify-around justify-center items-center text-center">
      <div class="w-full md:w-auto flex justify-center mb-4 md:mb-0">
        <img src="./images/char4.webp" alt="" class="md:w-[393px] w-[300px]">
      </div>
      <div class="font-semibold space-y-5">
        <div class="md:text-[33px] text-[28px] ">
          <h3>Baca Lebih Banyak Buku,</h3>
          <h3>Capai Lebih Jauh Ilmu.</h3>
        </div>
        <div class="md:flex justify-center">
          <button class="md:flex justify-center rounded-full bg-gradient-to-r from-[#39ADF8] to-[#84CCFA] px-[120px] py-3 text-lg font-semibold leading-6 text-white shadow-sm hover:bg-indigo-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 hover:bg-gradient-to-l hover:from-[#39ADF8] hover:to-[#84CCFA] ml-4" style="color:white !important">Ayo Mulai</button>
        </div>
        <div class="md:flex justify-center">
          <button class="md:flex justify-center rounded-full border-[1.5px] border-neutral-500 bg-transparent px-[55px] py-3 text-lg font-semibold leading-6 text-[#39ADF8] shadow-sm hover:bg-gradient-to-l hover:from-[#39ADF8] hover:to-[#84CCFA] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 ml-4 hover:text-white-100">
            Saya Sudah Memiliki Akun
          </button>
        </div>
      </div>
    </div>
  </section>

  <section class="md:px-[160px] px-8">
    <div class="max-w-screen-lg mx-auto">
      <div class="font-medium text-[24px] text-center md:text-start">
        <h3>Buku Favorit</h3>
      </div>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-4 py-5">
        <div class="flex flex-col items-center md:items-start">
          <a href="#" class="block overflow-hidden rounded-xl max-w-full">
            <div class="relative overflow-hidden rounded-xl">
              <img src="./images/literasimembaca1.webp" alt="" class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110">
            </div>
            <h6 class="font-normal pt-3">Judul Buku</h6>
            <p class="font-light">Author John Doe</p>
          </a>
        </div>

        <div class="flex flex-col items-center md:items-start">
          <a href="#" class="block overflow-hidden rounded-xl max-w-full">
            <div class="relative overflow-hidden rounded-xl">
              <img src="./images/literasimembaca2.webp" alt="" class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110">
            </div>
            <h6 class="font-normal pt-3">Judul Buku</h6>
            <p class="font-light">Author John Doe</p>
          </a>
        </div>

        <div class="flex flex-col items-center md:items-start">
          <a href="#" class="block overflow-hidden rounded-xl max-w-full">
            <div class="relative overflow-hidden rounded-xl">
              <img src="./images/literasimembaca3.webp" alt="" class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110">
            </div>
            <h6 class="font-normal pt-3">Judul Buku</h6>
            <p class="font-light">Author John Doe</p>
          </a>
        </div>

        <div class="flex flex-col items-center md:items-start">
          <a href="#" class="block overflow-hidden rounded-xl max-w-full">
            <div class="relative overflow-hidden rounded-xl">
              <img src="./images/literasimembaca4.webp" alt="" class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110">
            </div>
            <h6 class="font-normal pt-3">Judul Buku</h6>
            <p class="font-light">Author John Doe</p>
          </a>
        </div>
      </div>
    </div>
  </section>

{{-- content 1 --}}
<section class="py-[114px] md:px-[160px] px-6">
  <div class="flex flex-col-reverse md:flex-row md:justify-between justify-center items-center">
    <div class="space-y-2 w-full md:w-6/12 text-center md:text-left">
      <h3 class="text-[24px] md:text-[33px] font-bold text-primary-500">Baca. Pahami. Berkembang</h3>
      <h6 class="font-normal text-sm md:text-base">Literacy Bridge adalah aplikasi yang menghubungkan Anda dengan buku-buku pilihan untuk membaca, memahami, dan berkembang. Tingkatkan literasi Anda dan raih potensi penuh melalui pengetahuan yang didapatkan.</h6>
    </div>
    <div class="w-full md:w-auto flex justify-center items-center mb-4 md:mb-0">
      <img src="./images/animasi.webp" alt="" class="w-[260px] md:w-[290px]">
    </div>
  </div>
</section>

{{-- content 2 --}}
<section class="py-10 md:px-[160px] px-6 mt-[-24px]">
  <div class="flex flex-col-reverse md:flex-row md:justify-between justify-center items-center">
    <div class="w-full md:w-auto flex justify-center mb-4 md:mb-0 order-2 md:order-1">
      <img src="./images/animasi2.webp" alt="" class="w-[260px] md:w-[290px]">
    </div>
    <div class="space-y-2 w-full md:w-6/12 text-center md:text-right order-1 md:order-2">
      <h3 class="text-[24px] md:text-[33px] font-bold text-primary-500">Menjadi Motivasi Membaca</h3>
      <h6 class="font-normal text-sm md:text-base">Menghadirkan sistem ranking pembaca yang memotivasi Anda untuk membaca lebih banyak. Tingkatkan peringkat Anda dengan setiap buku yang selesai, dan raih penghargaan atas pencapaian literasi Anda.</h6>
    </div>
  </div>
</section>


{{-- content 3 --}}
<section class="py-16 md:px-[160px] px-6">
  <div class="flex flex-col-reverse md:flex-row md:justify-between justify-center items-center">
    <div class="space-y-2 w-full md:w-6/12 text-center md:text-left">
      <h3 class="text-[24px] md:text-[33px] font-bold text-primary-500">Jembatan Pengetahuan</h3>
      <h6 class="font-normal text-sm md:text-base">Literasi Baca adalah jembatan menuju mimpi Anda. Dengan membaca, Anda dapat mengakses pengetahuan dan inspirasi yang diperlukan untuk mewujudkan impian dan mencapai kesuksesan.</h6>
    </div>
    <div class="w-full md:w-auto flex justify-center mb-4 md:mb-0">
      <img src="./images/animasi3.webp" alt="" class="w-[260px] md:w-[290px]">
    </div>
  </div>
</section>

  {{-- some book2 --}}
  <section class="md:px-[160px] px-8">
    <div class="max-w-screen-lg mx-auto">
      <div class="font-medium text-[24px] text-center md:text-start">
        <h3>Buku Favorit</h3>
      </div>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-4 py-5">
        <div class="flex flex-col items-center md:items-start">
          <a href="#" class="block overflow-hidden rounded-xl max-w-full">
            <div class="relative overflow-hidden rounded-xl">
              <img src="./images/literasimembaca1.webp" alt="" class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110">
            </div>
            <h6 class="font-normal pt-3">Judul Buku</h6>
            <p class="font-light">Author John Doe</p>
          </a>
        </div>

        <div class="flex flex-col items-center md:items-start">
          <a href="#" class="block overflow-hidden rounded-xl max-w-full">
            <div class="relative overflow-hidden rounded-xl">
              <img src="./images/literasimembaca2.webp" alt="" class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110">
            </div>
            <h6 class="font-normal pt-3">Judul Buku</h6>
            <p class="font-light">Author John Doe</p>
          </a>
        </div>

        <div class="flex flex-col items-center md:items-start">
          <a href="#" class="block overflow-hidden rounded-xl max-w-full">
            <div class="relative overflow-hidden rounded-xl">
              <img src="./images/literasimembaca3.webp" alt="" class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110">
            </div>
            <h6 class="font-normal pt-3">Judul Buku</h6>
            <p class="font-light">Author John Doe</p>
          </a>
        </div>

        <div class="flex flex-col items-center md:items-start">
          <a href="#" class="block overflow-hidden rounded-xl max-w-full">
            <div class="relative overflow-hidden rounded-xl">
              <img src="./images/literasimembaca4.webp" alt="" class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110">
            </div>
            <h6 class="font-normal pt-3">Judul Buku</h6>
            <p class="font-light">Author John Doe</p>
          </a>
        </div>
      </div>
    </div>
  </section>

<!-- Content 4 -->
{{-- <section class="py-5 md:py-10 px-0 mt-5 relative">
  <div class="text-center md:flex md:justify-center">
    <h1 class="text-primary-800 text-[32px] md:text-[48px] w-full md:w-5/12 font-bold mb-5 md:mb-10">Baca Dimana Saja, Kapan Saja</h1>
  </div>
  <div class="relative w-screen">
    <img src="./images/char5.webp" alt="" class="relative m-auto w-auto max-h-[500px] max-w-full object-contain z-10">
    <img src="./images/Rectangle12.webp" alt="" class="absolute bottom-0 left-0 w-screen h-[28vh] md:h-[45vh] object-cover z-0">
  </div>
</section> --}}

{{-- some vidio --}}
<section class="md:px-[160px] px-8 mt-24">
  <div class="max-w-screen-lg mx-auto">
    <div class="font-medium text-[24px] text-center md:text-start">
      <h3>Vidio Literasi</h3>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 py-5">
      <div class="flex flex-col items-center md:items-start">
        <a href="#">
          <img src="./images/img1.webp" alt="" class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110">
          <h6 class="font-normal pt-3">Judul Buku</h6>
          <p class="font-light">Author Jhon Doe</p>
        </a>
      </div>
      <div class="flex flex-col items-center md:items-start">
        <a href="#">
          <img src="./images/img2.webp" alt="" class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110">
          <h6 class="font-normal pt-3">Judul Buku</h6>
          <p class="font-light">Author Jhon Doe</p>
        </a>
      </div>
      <div class="flex flex-col items-center md:items-start">
        <a href="#">
          <img src="./images/img3.webp" alt="" class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110">
          <h6 class="font-normal pt-3">Judul Buku</h6>
          <p class="font-light">Author Jhon Doe</p>
        </a>
      </div>
      <div class="flex flex-col items-center md:items-start">
        <a href="#">
          <img src="./images/img4.webp" alt="" class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110">
          <h6 class="font-normal pt-3">Judul Buku</h6>
          <p class="font-light">Author Jhon Doe</p>
        </a>
      </div>
    </div>
  </div>
</section>

{{-- papan peringkat --}}
<section class="md:px-[160px] py-12 mt-10">
  <div class="max-w-screen-lg mx-auto space-y-10">
    <div class="font-medium text-[24px] text-center md:text-start">
      <h3>Papan Peringkat</h3>
    </div>
    <div class="grid grid-cols-4 md:grid-cols-4 gap-6 px-6 md:px-0">
      <div class="flex justify-center items-center">
        <img src="./images/rank1.webp" alt="gambar rank 1" class="rounded-xl object-cover">
      </div>
      <div class="flex justify-center items-center">
        <img src="./images/rank2.webp" alt="gambar rank 2" class="rounded-xl object-cover">
      </div>
      <div class="flex justify-center items-center">
        <img src="./images/rank3.webp" alt="gambar rank 3" class="rounded-xl object-cover">
      </div>
      <div class="flex justify-center items-center">
        <img src="./images/rank4.webp" alt="gambar rank 4" class="rounded-xl object-cover">
      </div>
    </div>
    <div class="grid grid-cols-4 md:grid-cols-4 gap-6 px-6 md:px-0">
      <div class="flex justify-center items-center">
        <img src="./images/rank5.webp" alt="gambar rank 1" class="rounded-xl object-cover">
      </div>
      <div class="flex justify-center items-center">
        <img src="./images/rank6.webp" alt="gambar rank 2" class="rounded-xl object-cover">
      </div>
      <div class="flex justify-center items-center">
        <img src="./images/rank7.webp" alt="gambar rank 3" class="rounded-xl object-cover">
      </div>
      <div class="flex justify-center items-center">
        <img src="./images/rank8.webp" alt="gambar rank 4" class="rounded-xl object-cover">
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

    <div>
      <img src="{{ asset("images/char6.webp") }}" alt="" class="absolute -z-20 hidden left-1/2 transform -translate-x-1/2 -translate-y-1/2 md:block md:w-96 md:-top-5 xl:-top-14">
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
    <div class="space-y-1.5">
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

<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<script src="{{ asset ('js/navbar.js') }}"></script>
</body>

</html>
