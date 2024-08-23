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

<body class="antialiased font-poppins">
  <nav class="bg-white border-gray-200 md:px-[160px]">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 md:pf-[22px]">
      <!-- Logo dan Navigasi -->
      <div class="flex items-center w-full md:w-auto md:space-x-[32px] rtl:space-x-reverse">
        <a href="#" class="flex items-center">
          <img src="./images/logo.webp" class="w-[56px]" alt="Flowbite Logo" />
        </a>
      <!-- Tombol Menu Mobile -->
      <button data-collapse-toggle="navbar-default" type="button" class="ml-auto inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
      </button>

        <!-- Navigasi -->
        <div class="hidden md:flex md:items-center md:mx-6">
          <ul class="font-medium flex flex-col md:flex-row md:space-x-8 rtl:space-x-reverse mt-4 md:mt-0 border border-gray-100 md:border-0 rounded-lg md:bg-transparent">
            <li>
              <a href="#" class="block py-2 px-3 text-gray-700 rounded md:bg-transparent md:p-0 dark:text-white" aria-current="page">Home</a>
            </li>
            <li>
              <a href="#" class="block py-2 px-3 text-gray-700 rounded md:bg-transparent md:p-0 dark:text-white" aria-current="page">Vidio</a>
            </li>
            <li>
              <a href="#" class="block py-2 px-3 text-gray-700 rounded md:bg-transparent md:p-0 dark:text-white" aria-current="page">Peringkat</a>
            </li>
          </ul>
        </div>
      </div>


      <!-- Navigasi Mobile -->
      <div class="hidden md:hidden w-full" id="navbar-default">
        <ul class="font-medium flex flex-col space-y-2 mt-4 border border-gray-100 rounded-lg bg-gray-50">
          <li>
            <a href="#" class="block py-2 px-3 text-gray-700 rounded md:bg-transparent md:p-0 dark:text-white" aria-current="page">Home</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-3 text-gray-700 rounded md:bg-transparent md:p-0 dark:text-white" aria-current="page">Vidio</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-3 text-gray-700 rounded md:bg-transparent md:p-0 dark:text-white" aria-current="page">Peringkat</a>
          </li>
        </ul>
      </div>

      {{-- icon --}}
      <div class="flex items-center">
        <div class="border-[1.5px] p-2 rounded-full border-neutral-500 md:inline hidden">
          <!-- SVG icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-neutral-600" viewBox="0 0 24 24" fill="none" fill-rule="evenodd">
            <g fill="none" fill-rule="evenodd">
              <path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.019-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/>
              <path fill="currentColor" d="M10.5 2a8.5 8.5 0 1 0 5.262 15.176l3.652 3.652a1 1 0 0 0 1.414-1.414l-3.652-3.652A8.5 8.5 0 0 0 10.5 2M4 10.5a6.5 6.5 0 1 1 13 0a6.5 6.5 0 0 1-13 0"/>
            </g>
          </svg>
        </div>

        <!-- Tombol Masuk -->
        <button type="submit" class="custom-button hidden md:flex justify-center rounded-full bg-gradient-to-r from-[#39ADF8] to-[#84CCFA] px-[22px] py-2 text-lg font-semibold leading-6 text-white shadow-sm hover:bg-indigo-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 hover:bg-gradient-to-l hover:from-[#39ADF8] hover:to-[#84CCFA] ml-4 " style="color:white !important">Masuk</button>
      </div>
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

  {{-- some book1 --}}
  <section class="md:px-[160px]">
    <div class="max-w-screen-lg mx-auto">
      <div class="font-medium text-[24px] text-center md:text-start">
        <h3>Buku Favorit</h3>
      </div>
      <div class="py-5 space-y-4 md:space-y-0 md:flex md:gap-4 w-full text-center">
        <div class="md:text-left">
          <a href="#" class="block overflow-hidden rounded-xl max-w-full">
            <div class="relative overflow-hidden rounded-xl">
              <img src="./images/literasimembaca1.webp" alt="" class="rounded-xl mx-auto transform transition-transform duration-300 ease-in-out hover:scale-110">
            </div>
            <h6 class="font-normal md:pt-3 pt-3">Judul Buku</h6>
            <p class="font-light">Author John Doe</p>
          </a>
        </div>

        <div class="md:text-left">
          <a href="#" class="block overflow-hidden rounded-xl max-w-full">
            <div class="relative overflow-hidden rounded-xl">
              <img src="./images/literasimembaca2.webp" alt="" class="rounded-xl mx-auto transform transition-transform duration-300 ease-in-out hover:scale-110">
            </div>
            <h6 class="font-normal md:pt-3 pt-3">Judul Buku</h6>
            <p class="font-light">Author John Doe</p>
          </a>
        </div>
        <div class="md:text-left">
          <a href="#" class="block overflow-hidden rounded-xl max-w-full">
            <div class="relative overflow-hidden rounded-xl">
              <img src="./images/literasimembaca3.webp" alt="" class="rounded-xl mx-auto transform transition-transform duration-300 ease-in-out hover:scale-110">
            </div>
            <h6 class="font-normal md:pt-3 pt-3">Judul Buku</h6>
            <p class="font-light">Author John Doe</p>
          </a>
        </div>
        <div class="md:text-left">
          <a href="#" class="block overflow-hidden rounded-xl max-w-full">
            <div class="relative overflow-hidden rounded-xl">
              <img src="./images/literasimembaca4.webp" alt="" class="rounded-xl mx-auto transform transition-transform duration-300 ease-in-out hover:scale-110">
            </div>
            <h6 class="font-normal md:pt-3 pt-3">Judul Buku</h6>
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
  <section class="md:px-[160px] md:py-10">
    <div class="max-w-screen-lg mx-auto">
      <div class="font-medium text-[24px] text-center md:text-start">
        <h3>Buku Terbaru</h3>
      </div>
      <div class="py-5 space-y-4 md:space-y-0 md:flex md:gap-4 w-full text-center">
        <div class="md:text-left">
          <a href="#" class="block overflow-hidden rounded-xl max-w-full">
            <div class="relative overflow-hidden rounded-xl">
              <img src="./images/literasimembaca1.webp" alt="" class="rounded-xl mx-auto transform transition-transform duration-300 ease-in-out hover:scale-110">
            </div>
            <h6 class="font-normal md:pt-3 pt-3">Judul Buku</h6>
            <p class="font-light">Author John Doe</p>
          </a>
        </div>

        <div class="md:text-left">
          <a href="#" class="block overflow-hidden rounded-xl max-w-full">
            <div class="relative overflow-hidden rounded-xl">
              <img src="./images/literasimembaca2.webp" alt="" class="rounded-xl mx-auto transform transition-transform duration-300 ease-in-out hover:scale-110">
            </div>
            <h6 class="font-normal md:pt-3 pt-3">Judul Buku</h6>
            <p class="font-light">Author John Doe</p>
          </a>
        </div>
        <div class="md:text-left">
          <a href="#" class="block overflow-hidden rounded-xl max-w-full">
            <div class="relative overflow-hidden rounded-xl">
              <img src="./images/literasimembaca3.webp" alt="" class="rounded-xl mx-auto transform transition-transform duration-300 ease-in-out hover:scale-110">
            </div>
            <h6 class="font-normal md:pt-3 pt-3">Judul Buku</h6>
            <p class="font-light">Author John Doe</p>
          </a>
        </div>
        <div class="md:text-left">
          <a href="#" class="block overflow-hidden rounded-xl max-w-full">
            <div class="relative overflow-hidden rounded-xl">
              <img src="./images/literasimembaca4.webp" alt="" class="rounded-xl mx-auto transform transition-transform duration-300 ease-in-out hover:scale-110">
            </div>
            <h6 class="font-normal md:pt-3 pt-3">Judul Buku</h6>
            <p class="font-light">Author John Doe</p>
          </a>
        </div>
      </div>
    </div>
  </section>

<!-- Content 4 -->
<section class="py-5 md:py-10 px-0 mt-5 relative">
  <div class="text-center md:flex md:justify-center">
    <h1 class="text-primary-800 text-[32px] md:text-[48px] w-full md:w-5/12 font-bold mb-5 md:mb-10">Baca Dimana Saja, Kapan Saja</h1>
  </div>
  <div class="relative w-screen">
    <img src="./images/char5.webp" alt="" class="relative m-auto w-auto max-h-[500px] max-w-full object-contain z-10">
    <img src="./images/Rectangle12.webp" alt="" class="absolute bottom-0 left-0 w-screen h-[28vh] md:h-[45vh] object-cover z-0">
  </div>
</section>




{{-- some vidio --}}
<section class="md:px-[160px] mt-24">
  <div class="max-w-screen-lg mx-auto">
    <div class="font-medium text-[24px] text-center md:text-start">
      <h3>Vidio Literasi</h3>
    </div>
    <div class="py-5 space-y-4 md:space-y-0 md:flex md:gap-4 w-full text-center">
      <div class="md:text-left">
        <a href="">
          <img src="./images/img1.webp" alt="" class="rounded-xl mx-auto">
          <h6 class="font-normal md:pt-3 pt-3">Judul Buku</h6>
          <p class="font-light">Author Jhon Doe</p>
        </a>
      </div>
      <div class="md:text-left">
        <a href="">
          <img src="./images/img2.webp" alt="" class="rounded-xl mx-auto">
          <h6 class="font-normal md:pt-3 pt-3">Judul Buku</h6>
          <p class="font-light">Author Jhon Doe</p>
        </a>
      </div>
      <div class="md:text-left">
        <a href="">
          <img src="./images/img3.webp" alt="" class="rounded-xl mx-auto">
          <h6 class="font-normal md:pt-3 pt-3">Judul Buku</h6>
          <p class="font-light">Author Jhon Doe</p>
        </a>
      </div>
      <div class="md:text-left">
        <a href="">
          <img src="./images/img4.webp" alt="" class="rounded-xl mx-auto">
          <h6 class="font-normal md:pt-3 pt-3">Judul Buku</h6>
          <p class="font-light">Author Jhon Doe</p>
        </a>
      </div>
    </div>
  </div>
</section>


{{-- papan peringkat --}}
<section class="md:px-[160px] py-12 mt-12">
  <div class="max-w-screen-lg mx-auto space-y-10">
    <div class="font-medium text-[24px] text-center md:text-start">
      <h3>Papan Peringkat</h3>
    </div>
    <div class="md:flex md:gap-8 space-y-8 md:space-y-0">
      <div class="flex-1 flex justify-center items-center">
        <img src="./images/rank1.webp" alt="" class="rounded-xl h-[200px] object-cover">
      </div>
      <div class="flex-1 flex justify-center items-center">
        <img src="./images/rank2.webp" alt="" class="rounded-xl h-[200px] object-cover">
      </div>
      <div class="flex-1 flex justify-center items-center">
        <img src="./images/rank3.webp" alt="" class="rounded-xl h-[200px] object-cover">
      </div>
      <div class="flex-1 flex justify-center items-center">
        <img src="./images/rank4.webp" alt="" class="rounded-xl h-[200px] object-cover">
      </div>
    </div>
    <div class="md:flex md:gap-8 space-y-8 md:space-y-0">
      <div class="flex-1 flex justify-center items-center">
        <img src="./images/rank5.webp" alt="" class="rounded-xl h-[200px] object-cover">
      </div>
      <div class="flex-1 flex justify-center items-center">
        <img src="./images/rank6.webp" alt="" class="rounded-xl h-[200px] object-cover">
      </div>
      <div class="flex-1 flex justify-center items-center">
        <img src="./images/rank7.webp" alt="" class="rounded-xl h-[200px] object-cover">
      </div>
      <div class="flex-1 flex justify-center items-center">
        <img src="./images/rank8.webp" alt="" class="rounded-xl h-[200px] object-cover">
      </div>
    </div>
  </div>
</section>


<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
