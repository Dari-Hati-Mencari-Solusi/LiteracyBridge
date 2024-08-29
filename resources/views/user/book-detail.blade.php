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

{{-- detail book --}}

<section  class="bg-neutral-100 py-8 container px-4">
  <div class="md:px-[160px] px-4">
    <div class="md:flex space-x-1 items-center py-4 justify-center md:justify-start">
      <div class="flex items-center space-x-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24">
          <path fill="#666666" d="M4 21V9l8-6l8 6v12h-6v-7h-4v7z"/>
        </svg>
        <div class="text-center md:text-left pt-2">
          <a href="#" class="text-black-300 font-light">/Literasi</a>
          <a href="#" class="text-black-300 font-medium">/Literasi Membaca</a>
        </div>
      </div>
    </div>


    <div class="md:flex w-full md:space-x-0 space-x-2">
      <div class="w-full md:w-1/3">
        <img src="{{ asset('images/literasimembaca1.webp') }}" alt="gambar buku literasi membaca" class="rounded-2xl w-full md:w-64">
      </div>

      <div class="md:flex md:w-2/3 md:space-x-4 flex flex-col w-full space-y-8">
        <div class="flex flex-col space-y-8">
          <div class=" md:py-0 pt-8 space-y-3">
            <h3 class="md:text-[33px] text-[20px] font-semibold">Literasi Membaca</h3>
            <div class="md:flex md:space-x-4 space-y-2 md:space-y-0 flex-col md:flex-row"> <!-- Tambahkan flex-col pada versi mobile -->
              <div class="flex items-center space-x-1">
                <img src="{{ asset('images/literasi.webp') }}" alt="gambar icon literasi" class="w-7 h-7">
                <span class="text-title1 text-black-900 font-medium px-3">Literasi</span>
              </div>
              <div class="flex items-center space-x-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24">
                  <path fill="#E98B8B" fill-rule="evenodd" d="M4.536 5.778a5 5 0 0 1 7.07 0q.275.274.708.682q.432-.408.707-.682a5 5 0 0 1 7.125 7.016L13.02 19.92a1 1 0 0 1-1.414 0L4.48 12.795a5 5 0 0 1 .055-7.017z"/>
                </svg>
                <span class="text-title1 text-black-900 font-medium px-1">12k</span>
              </div>
              <div class="flex items-center space-x-1">
                <img src="{{ asset('images/point-fix.webp') }}" alt="gambar point" class="w-7 h-7">
                <span class="text-title1 text-black-900 font-medium px-3">5 Point</span>
              </div>
            </div>

            <p class="text-black-400 pt-2">Author: <span class="text-primary-800">Jhon Doe</span></p>
          </div>

          <div class="space-y-3 md:pt-16">
            <div class="flex flex-col md:flex-row md:space-x-2 space-y-3 md:space-y-0">
              <button class="w-full md:w-auto rounded-full bg-gradient-to-r from-[#39ADF8] to-[#84CCFA] px-8 py-2 text-base md:text-lg font-medium leading-6 text-white shadow-sm hover:bg-indigo-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 hover:bg-gradient-to-l hover:from-[#39ADF8] hover:to-[#84CCFA] text-white-100">Baca</button>

              <button class="w-full md:w-auto rounded-full bg-gradient-to-r flex justify-center pr-5 items-center gap-2 from-[#39ADF8] to-[#84CCFA] px-3 py-2 text-sm md:text-lg font-medium leading-6 text-white shadow-sm hover:bg-indigo-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 hover:bg-gradient-to-l hover:from-[#39ADF8] hover:to-[#84CCFA] text-white-100">
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="md:w-7 md:h-7 w-5 h-5" viewBox="0 0 512 512">
                  <path fill="#ffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M352 48H160a48 48 0 0 0-48 48v368l144-128l144 128V96a48 48 0 0 0-48-48"/>
                </svg></a>
                Suka buku ini
              </button>
            </div>
            <div>
              <button class="w-full rounded-full md:w-auto bg-gradient-to-r flex justify-center pr-4 items-center gap-2 from-[#E98B8B] to-[#D77C7C] px-3 py-2 text-base md:text-lg font-medium leading-6 text-white shadow-sm hover:bg-indigo-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 hover:bg-gradient-to-l text-white-100 hover:from-[#E98B8B] hover:to-[#D77C7C]">
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24">
                    <path fill="#ffff" fill-rule="evenodd" d="M4.536 5.778a5 5 0 0 1 7.07 0q.275.274.708.682q.432-.408.707-.682a5 5 0 0 1 7.125 7.016L13.02 19.92a1 1 0 0 1-1.414 0L4.48 12.795a5 5 0 0 1 .055-7.017z"/>
                  </svg>
                </a>
                Suka buku ini
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


{{-- ringkasan --}}
<section class="container px-2 py-8">
  <div class="md:px-[160px] px-6 space-y-2">
    <div>
      <h1 class="text-[33px] font-semibold">Tentang</h1>
      <h5 class="font-semibold text-[23px] text-neutral-900 pt-3">Ringkasan</h5>
    </div>
    <div class="relative w-full mx-auto bg-white">
      <title1 id="textContent" class="text-black-400 transition-all duration-500 ease-in-out overflow-hidden">
        <span class="block">Buku ini menggali pentingnya literasi membaca dalam membentuk masyarakat yang cerdas dan berdaya saing. Di dalamnya, penulis menjelaskan bagaimana membaca bukan hanya sekadar aktivitas, tetapi kunci untuk membuka pintu pengetahuan, memperluas wawasan, dan memperkuat daya pikir kritis. Melalui berbagai contoh nyata, buku ini menunjukkan dampak positif dari kebiasaan membaca terhadap perkembangan pribadi dan sosial. Pembaca akan diajak untuk memahami strategi meningkatkan minat baca, mengenali berbagai genre, dan memanfaatkan teknologi digital untuk mengakses sumber daya literasi. Buku ini menjadi panduan praktis bagi siapa saja yang ingin menjadikan membaca sebagai bagian tak terpisahkan dari kehidupan sehari-hari...</span>
        <span id="moreText" class="hidden transition-opacity duration-500 ease-in-out opacity-0">
        Buku ini juga menekankan pentingnya peran keluarga dan lingkungan dalam membudayakan membaca. Dengan panduan ini, membaca menjadi bagian tak terpisahkan dari kehidupan sehari-hari, membawa dampak positif yang berkelanjutan.Terima kasih telah membaca buku ini.
        </span>
      </title1>
      <div class="pt-12">
        <button data-target="moreText" class="toggle-button absolute bottom-0 right-0 p-1 rounded-md text-white shadow-lg focus:outline-none bg-neutral-500 hover:bg-neutral-600 transition duration-500 ease-in-out">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
            <g fill="none" stroke="#129df7" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
              <circle cx="12" cy="12" r="9" />
              <path id="iconPath" d="m9 11l3 3l3-3" />
            </g>
          </svg>
        </button>
      </div>
    </div>
  </div>
</section>

{{-- Banyak Dikoleksi --}}
<section class="md:px-[160px] px-8">
  <div class="max-w-screen-lg mx-auto space-y-6">
    <div class="font-medium text-[24px] text-center md:text-start">
      <h3>Kategori yang sama</h3>
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

{{-- komentar --}}
<section class="contaniner px-2 py-16">
  <div class="md:px-[160px] px-6 space-y-8">
    <div>
      <h1 class="text-title1 font-semibold uppercase text-black-400">Populer</h1>
    </div>
    <div class="space-y-4 border-b-2 py-3">
      <div class="flex items-center space-x-3">
        <a href="" class="flex items-center justify-center w-10 h-10 text-sm rounded-full bg-primary-500 text-gray-100 focus:outline-none focus:ring-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 12c2.208 0 4-1.791 4-4s-1.792-4-4-4-4 1.791-4 4 1.792 4 4 4zm0 2c-4.418 0-8 1.791-8 4 0 1.104.896 2 2 2h12c1.104 0 2-.896 2-2 0-2.209-3.582-4-8-4z" />
          </svg>
            </a>
            <title1 class="text-black-400 font-semibold">KangKomen</title1>
            <img src="{{ asset('images/Rangking.webp') }}" alt="" class="w-[22px] h-[24px]">
            </div>
            <div>
              <div class="relative w-full mx-auto bg-white">
                <title1 id="textContent1" class="text-black-400 transition-all duration-500 ease-in-out overflow-hidden">
                  <span class="block">Setelah membaca buku ini, saya benar-benar merasa tercerahkan. Penulis berhasil menggabungkan teori dan praktik dengan cara yang sangat menarik, membuat saya semakin sadar akan pentingnya literasi membaca dalam kehidupan sehari-hari..</span>
                  <span id="moreText1" class="hidden transition-opacity duration-500 ease-in-out opacity-0">
                    Buku ini juga menekankan pentingnya peran keluarga dan lingkungan dalam membudayakan membaca. Dengan panduan ini, membaca menjadi bagian tak terpisahkan dari kehidupan sehari-hari, membawa dampak positif yang berkelanjutan. Terima kasih telah membaca buku ini.
                  </span>
                </title1>
                <div class="pt-12">
                  <button data-target="moreText1" class="toggle-button absolute bottom-0 right-0 p-1 rounded-md text-white shadow-lg focus:outline-none bg-neutral-500 hover:bg-neutral-600 transition duration-500 ease-in-out">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                      <g fill="none" stroke="#129df7" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                        <circle cx="12" cy="12" r="9" />
                        <path id="iconPath" d="m9 11l3 3l3-3" />
                      </g>
                    </svg>
                  </button>
                </div>
              </div>
              <div class="md:flex justify-between py-4">
                <caption class="text-color-400">2 jam yang lalu</caption>
                <div class="flex items-center space-x-2">
                  <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 14 14"><g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round"><path d="M1.046 5.814h2.351v6.26h-2.35a.496.496 0 0 1-.497-.496V6.31a.496.496 0 0 1 .496-.496"/><path d="m3.397 5.814l2.52-4.028a1.08 1.08 0 0 1 .933-.516a1.1 1.1 0 0 1 1.14 1.09v2.887h4.356a1.14 1.14 0 0 1 1.091 1.31l-.793 5.119a1.13 1.13 0 0 1-1.121.992H5.014c-.31.001-.615-.07-.892-.208l-.715-.357m-.01-6.289v6.26"/></g></svg></a> <span>112</span>
                  <a href="#" class="pl-8">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7"  viewBox="0 0 24 24"><path fill="black" d="M4.5 20.25a.75.75 0 0 1-.72-1L5.38 14a7.8 7.8 0 0 1-.52-2.83a8 8 0 0 1 .62-3.1a8.1 8.1 0 0 1 1.7-2.52a7.8 7.8 0 0 1 2.53-1.7a7.92 7.92 0 0 1 6.19 0a8 8 0 0 1 4.85 7.32a8 8 0 0 1-2.33 5.62a8.1 8.1 0 0 1-2.52 1.7a8 8 0 0 1-5.93.1l-5.25 1.6a.8.8 0 0 1-.22.06m8.3-15.5a6.49 6.49 0 0 0-5.94 3.94a6.55 6.55 0 0 0 0 5a.75.75 0 0 1 0 .51l-1.23 4.17l4.15-1.26a.75.75 0 0 1 .51 0a6.52 6.52 0 0 0 5 0a6.44 6.44 0 0 0 3.43-8.45a6.45 6.45 0 0 0-5.92-3.91"/></svg>
                  </a>
                </div>
              </div>
              <div class="md:flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-10 rotate-6" viewBox="0 0 16 16">
                  <path fill="#84CCFA" d="M8 13c3.866 0 7-2 7-6s-3.134-6-7-6s-7 2-7 6c0 2.16.914 3.737 2.364 4.73l.09 2.161a1.157 1.157 0 0 0 1.857.872l2.322-1.77Q7.816 13 8 13" />
                  <path fill="#39ADF8" d="M8 13c3.866 0 7-2 7-6s-3.134-6-7-6s-7 2-7 6c0 2.16.914 3.737 2.364 4.73l.09 2.161a1.157 1.157 0 0 0 1.857.872l2.322-1.77Q7.816 13 8 13" />
                </svg>
                <a href="#" id="show-popup" class="text-title2 text-primary-500 px-2">Lihat 12 balasan</a>
              </div>

              <!-- Popup -->
              <div id="popup" class="relative z-10 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                <div class="fixed inset-0 bg-gray-900 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
                <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                        <div class="relative transform overflow-hidden rounded-lg bg-white bg-opacity-100 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                            <div class="bg-white-100 px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                                <div class="sm:flex sm:items-start">
                                    <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Komen pengguna</h3>
                                </div>
                                <div class="mt-4 max-h-80 overflow-y-auto space-y-3">
                                    <!-- Item 1 -->
                                    <div class="space-y-4 border-b-2 py-3">
                                      <div class="flex items-center space-x-3">
                                        <a href="" class="flex items-center justify-center w-10 h-10 text-sm rounded-full bg-primary-500 text-gray-100 focus:outline-none focus:ring-2">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 12c2.208 0 4-1.791 4-4s-1.792-4-4-4-4 1.791-4 4 1.792 4 4 4zm0 2c-4.418 0-8 1.791-8 4 0 1.104.896 2 2 2h12c1.104 0 2-.896 2-2 0-2.209-3.582-4-8-4z" />
                                          </svg>
                                            </a>
                                            <title1 class="text-black-400 font-semibold">KangKomen</title1>
                                            <img src="{{ asset('images/Rangking.webp') }}" alt="" class="w-[22px] h-[24px]">
                                            </div>
                                            <div>
                                              <div class="relative w-full mx-auto bg-white">
                                                <title1 id="textContent2" class="text-black-400 transition-all duration-500 ease-in-out overflow-hidden">
                                                  <span class="block">Setelah membaca buku ini, saya benar-benar merasa tercerahkan. Penulis berhasil menggabungkan teori dan praktik dengan cara yang sangat menarik, membuat saya semakin sadar akan pentingnya literasi membaca dalam kehidupan sehari-hari..</span>
                                                  <span id="moreText2" class="hidden transition-opacity duration-500 ease-in-out opacity-0">
                                                    Buku ini juga menekankan pentingnya peran keluarga dan lingkungan dalam membudayakan membaca. Dengan panduan ini, membaca menjadi bagian tak terpisahkan dari kehidupan sehari-hari, membawa dampak positif yang berkelanjutan. Terima kasih telah membaca buku ini.
                                                  </span>
                                                </title1>
                                                <div class="pt-12">
                                                  <button data-target="moreText2" class="toggle-button absolute bottom-0 right-0 p-1 rounded-md text-white shadow-lg focus:outline-none bg-neutral-500 hover:bg-neutral-600 transition duration-500 ease-in-out">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                                                      <g fill="none" stroke="#129df7" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                                        <circle cx="12" cy="12" r="9" />
                                                        <path id="iconPath" d="m9 11l3 3l3-3" />
                                                      </g>
                                                    </svg>
                                                  </button>
                                                </div>
                                              </div>
                                              <div class="md:flex justify-between py-4">
                                                <caption class="text-color-400">2 jam yang lalu</caption>
                                                <div class="flex items-center space-x-2">
                                                  <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 14 14"><g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round"><path d="M1.046 5.814h2.351v6.26h-2.35a.496.496 0 0 1-.497-.496V6.31a.496.496 0 0 1 .496-.496"/><path d="m3.397 5.814l2.52-4.028a1.08 1.08 0 0 1 .933-.516a1.1 1.1 0 0 1 1.14 1.09v2.887h4.356a1.14 1.14 0 0 1 1.091 1.31l-.793 5.119a1.13 1.13 0 0 1-1.121.992H5.014c-.31.001-.615-.07-.892-.208l-.715-.357m-.01-6.289v6.26"/></g></svg></a> <span>112</span>
                                                  <a href="#" class="pl-8">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7"  viewBox="0 0 24 24"><path fill="black" d="M4.5 20.25a.75.75 0 0 1-.72-1L5.38 14a7.8 7.8 0 0 1-.52-2.83a8 8 0 0 1 .62-3.1a8.1 8.1 0 0 1 1.7-2.52a7.8 7.8 0 0 1 2.53-1.7a7.92 7.92 0 0 1 6.19 0a8 8 0 0 1 4.85 7.32a8 8 0 0 1-2.33 5.62a8.1 8.1 0 0 1-2.52 1.7a8 8 0 0 1-5.93.1l-5.25 1.6a.8.8 0 0 1-.22.06m8.3-15.5a6.49 6.49 0 0 0-5.94 3.94a6.55 6.55 0 0 0 0 5a.75.75 0 0 1 0 .51l-1.23 4.17l4.15-1.26a.75.75 0 0 1 .51 0a6.52 6.52 0 0 0 5 0a6.44 6.44 0 0 0 3.43-8.45a6.45 6.45 0 0 0-5.92-3.91"/></svg>
                                                  </a>
                                                </div>
                                              </div>
                                              <div>
                                        </div>
                                      </div>
                                    </div>

                                    <!-- Item 2 -->
                                    <div class="space-y-4 border-b-2 py-3">
                                      <div class="flex items-center space-x-3">
                                        <a href="" class="flex items-center justify-center w-10 h-10 text-sm rounded-full bg-primary-500 text-gray-100 focus:outline-none focus:ring-2">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 12c2.208 0 4-1.791 4-4s-1.792-4-4-4-4 1.791-4 4 1.792 4 4 4zm0 2c-4.418 0-8 1.791-8 4 0 1.104.896 2 2 2h12c1.104 0 2-.896 2-2 0-2.209-3.582-4-8-4z" />
                                          </svg>
                                            </a>
                                            <title1 class="text-black-400 font-semibold">KangKomen</title1>
                                            <img src="{{ asset('images/Rangking.webp') }}" alt="" class="w-[22px] h-[24px]">
                                            </div>
                                            <div>
                                              <div class="relative w-full mx-auto bg-white">
                                                <title1 id="textContent3" class="text-black-400 transition-all duration-500 ease-in-out overflow-hidden">
                                                  <span class="block">Setelah membaca buku ini, saya benar-benar merasa tercerahkan. Penulis berhasil menggabungkan teori dan praktik dengan cara yang sangat menarik, membuat saya semakin sadar akan pentingnya literasi membaca dalam kehidupan sehari-hari..</span>
                                                  <span id="moreText3" class="hidden transition-opacity duration-500 ease-in-out opacity-0">
                                                    Buku ini juga menekankan pentingnya peran keluarga dan lingkungan dalam membudayakan membaca. Dengan panduan ini, membaca menjadi bagian tak terpisahkan dari kehidupan sehari-hari, membawa dampak positif yang berkelanjutan. Terima kasih telah membaca buku ini.
                                                  </span>
                                                </title1>
                                                <div class="pt-12">
                                                  <button data-target="moreText3" class="toggle-button absolute bottom-0 right-0 p-1 rounded-md text-white shadow-lg focus:outline-none bg-neutral-500 hover:bg-neutral-600 transition duration-500 ease-in-out">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                                                      <g fill="none" stroke="#129df7" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                                        <circle cx="12" cy="12" r="9" />
                                                        <path id="iconPath" d="m9 11l3 3l3-3" />
                                                      </g>
                                                    </svg>
                                                  </button>
                                                </div>
                                              </div>
                                              <div class="md:flex justify-between py-4">
                                                <caption class="text-color-400">2 jam yang lalu</caption>
                                                <div class="flex items-center space-x-2">
                                                  <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 14 14"><g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round"><path d="M1.046 5.814h2.351v6.26h-2.35a.496.496 0 0 1-.497-.496V6.31a.496.496 0 0 1 .496-.496"/><path d="m3.397 5.814l2.52-4.028a1.08 1.08 0 0 1 .933-.516a1.1 1.1 0 0 1 1.14 1.09v2.887h4.356a1.14 1.14 0 0 1 1.091 1.31l-.793 5.119a1.13 1.13 0 0 1-1.121.992H5.014c-.31.001-.615-.07-.892-.208l-.715-.357m-.01-6.289v6.26"/></g></svg></a> <span>112</span>
                                                  <a href="#" class="pl-8">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7"  viewBox="0 0 24 24"><path fill="black" d="M4.5 20.25a.75.75 0 0 1-.72-1L5.38 14a7.8 7.8 0 0 1-.52-2.83a8 8 0 0 1 .62-3.1a8.1 8.1 0 0 1 1.7-2.52a7.8 7.8 0 0 1 2.53-1.7a7.92 7.92 0 0 1 6.19 0a8 8 0 0 1 4.85 7.32a8 8 0 0 1-2.33 5.62a8.1 8.1 0 0 1-2.52 1.7a8 8 0 0 1-5.93.1l-5.25 1.6a.8.8 0 0 1-.22.06m8.3-15.5a6.49 6.49 0 0 0-5.94 3.94a6.55 6.55 0 0 0 0 5a.75.75 0 0 1 0 .51l-1.23 4.17l4.15-1.26a.75.75 0 0 1 .51 0a6.52 6.52 0 0 0 5 0a6.44 6.44 0 0 0 3.43-8.45a6.45 6.45 0 0 0-5.92-3.91"/></svg>
                                                  </a>
                                                </div>
                                              </div>
                                              <div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                <button id="close-popup" type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-white-100 bg-gradient-to-r from-[#39ADF8] to-[#84CCFA] sm:mt-0 sm:w-auto hover:from-[#39ADF8] hover:to-[#84CCFA] hover:bg-gradient-to-l ">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              <div>
        </div>
      </div>
    </div>

      <div class="space-y-4 border-b-2 py-3">
        <div class="flex items-center space-x-3">
          <a href="" class="flex items-center justify-center w-10 h-10 text-sm rounded-full bg-primary-500 text-gray-100 focus:outline-none focus:ring-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 12c2.208 0 4-1.791 4-4s-1.792-4-4-4-4 1.791-4 4 1.792 4 4 4zm0 2c-4.418 0-8 1.791-8 4 0 1.104.896 2 2 2h12c1.104 0 2-.896 2-2 0-2.209-3.582-4-8-4z" />
            </svg>
              </a>
              <title1 class="text-black-400 font-semibold">KangKomen</title1>
              <img src="{{ asset('images/Rangking.webp') }}" alt="" class="w-[22px] h-[24px]">
              </div>
              <div>
                <div class="relative w-full mx-auto bg-white">
                  <title1 id="textContent4" class="text-black-400 transition-all duration-500 ease-in-out overflow-hidden">
                    <span class="block">Setelah membaca buku ini, saya benar-benar merasa tercerahkan. Penulis berhasil menggabungkan teori dan praktik dengan cara yang sangat menarik, membuat saya semakin sadar akan pentingnya literasi membaca dalam kehidupan sehari-hari..</span>
                    <span id="moreText4" class="hidden transition-opacity duration-500 ease-in-out opacity-0">
                      Buku ini juga menekankan pentingnya peran keluarga dan lingkungan dalam membudayakan membaca. Dengan panduan ini, membaca menjadi bagian tak terpisahkan dari kehidupan sehari-hari, membawa dampak positif yang berkelanjutan. Terima kasih telah membaca buku ini.
                    </span>
                  </title1>
                  <div class="pt-12">
                    <button data-target="moreText4" class="toggle-button absolute bottom-0 right-0 p-1 rounded-md text-white shadow-lg focus:outline-none bg-neutral-500 hover:bg-neutral-600 transition duration-500 ease-in-out">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                        <g fill="none" stroke="#129df7" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                          <circle cx="12" cy="12" r="9" />
                          <path id="iconPath" d="m9 11l3 3l3-3" />
                        </g>
                      </svg>
                    </button>
                  </div>
                </div>
                <div class="md:flex justify-between py-4">
                  <caption class="text-color-400">2 jam yang lalu</caption>
                  <div class="flex items-center space-x-2">
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 14 14"><g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round"><path d="M1.046 5.814h2.351v6.26h-2.35a.496.496 0 0 1-.497-.496V6.31a.496.496 0 0 1 .496-.496"/><path d="m3.397 5.814l2.52-4.028a1.08 1.08 0 0 1 .933-.516a1.1 1.1 0 0 1 1.14 1.09v2.887h4.356a1.14 1.14 0 0 1 1.091 1.31l-.793 5.119a1.13 1.13 0 0 1-1.121.992H5.014c-.31.001-.615-.07-.892-.208l-.715-.357m-.01-6.289v6.26"/></g></svg></a> <span>112</span>
                    <a href="#" class="pl-8">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7"  viewBox="0 0 24 24"><path fill="black" d="M4.5 20.25a.75.75 0 0 1-.72-1L5.38 14a7.8 7.8 0 0 1-.52-2.83a8 8 0 0 1 .62-3.1a8.1 8.1 0 0 1 1.7-2.52a7.8 7.8 0 0 1 2.53-1.7a7.92 7.92 0 0 1 6.19 0a8 8 0 0 1 4.85 7.32a8 8 0 0 1-2.33 5.62a8.1 8.1 0 0 1-2.52 1.7a8 8 0 0 1-5.93.1l-5.25 1.6a.8.8 0 0 1-.22.06m8.3-15.5a6.49 6.49 0 0 0-5.94 3.94a6.55 6.55 0 0 0 0 5a.75.75 0 0 1 0 .51l-1.23 4.17l4.15-1.26a.75.75 0 0 1 .51 0a6.52 6.52 0 0 0 5 0a6.44 6.44 0 0 0 3.43-8.45a6.45 6.45 0 0 0-5.92-3.91"/></svg>
                    </a>
                  </div>
                </div>
                <div class="md:flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-10 rotate-6" viewBox="0 0 16 16">
                  <path fill="#84CCFA" d="M8 13c3.866 0 7-2 7-6s-3.134-6-7-6s-7 2-7 6c0 2.16.914 3.737 2.364 4.73l.09 2.161a1.157 1.157 0 0 0 1.857.872l2.322-1.77Q7.816 13 8 13" />
                  <path fill="#39ADF8" d="M8 13c3.866 0 7-2 7-6s-3.134-6-7-6s-7 2-7 6c0 2.16.914 3.737 2.364 4.73l.09 2.161a1.157 1.157 0 0 0 1.857.872l2.322-1.77Q7.816 13 8 13" />
                </svg>
                <a href="#" id="show-popup2" class="text-title2 text-primary-500 px-2">Lihat 12 balasan</a>
              </div>

              <!-- Popup -->
              <div id="popup2" class="relative z-10 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                <div class="fixed inset-0 bg-gray-900 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
                <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                        <div class="relative transform overflow-hidden rounded-lg bg-white bg-opacity-100 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                            <div class="bg-white-100 px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                                <div class="sm:flex sm:items-start">
                                    <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Komen pengguna</h3>
                                </div>
                                <div class="mt-4 max-h-80 overflow-y-auto space-y-3">
                                    <!-- Item 1 -->
                                    <div class="space-y-4 border-b-2 py-3">
                                      <div class="flex items-center space-x-3">
                                        <a href="" class="flex items-center justify-center w-10 h-10 text-sm rounded-full bg-primary-500 text-gray-100 focus:outline-none focus:ring-2">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 12c2.208 0 4-1.791 4-4s-1.792-4-4-4-4 1.791-4 4 1.792 4 4 4zm0 2c-4.418 0-8 1.791-8 4 0 1.104.896 2 2 2h12c1.104 0 2-.896 2-2 0-2.209-3.582-4-8-4z" />
                                          </svg>
                                            </a>
                                            <title1 class="text-black-400 font-semibold">KangKomen</title1>
                                            <img src="{{ asset('images/Rangking.webp') }}" alt="" class="w-[22px] h-[24px]">
                                            </div>
                                            <div>
                                              <div class="relative w-full mx-auto bg-white">
                                                <title1 id="textContent5" class="text-black-400 transition-all duration-500 ease-in-out overflow-hidden">
                                                  <span class="block">Setelah membaca buku ini, saya benar-benar merasa tercerahkan. Penulis berhasil menggabungkan teori dan praktik dengan cara yang sangat menarik, membuat saya semakin sadar akan pentingnya literasi membaca dalam kehidupan sehari-hari..</span>
                                                  <span id="moreText5" class="hidden transition-opacity duration-500 ease-in-out opacity-0">
                                                    Buku ini juga menekankan pentingnya peran keluarga dan lingkungan dalam membudayakan membaca. Dengan panduan ini, membaca menjadi bagian tak terpisahkan dari kehidupan sehari-hari, membawa dampak positif yang berkelanjutan. Terima kasih telah membaca buku ini.
                                                  </span>
                                                </title1>
                                                <div class="pt-12">
                                                  <button data-target="moreText5" class="toggle-button absolute bottom-0 right-0 p-1 rounded-md text-white shadow-lg focus:outline-none bg-neutral-500 hover:bg-neutral-600 transition duration-500 ease-in-out">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                                                      <g fill="none" stroke="#129df7" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                                        <circle cx="12" cy="12" r="9" />
                                                        <path id="iconPath" d="m9 11l3 3l3-3" />
                                                      </g>
                                                    </svg>
                                                  </button>
                                                </div>
                                              </div>
                                              <div class="md:flex justify-between py-4">
                                                <caption class="text-color-400">2 jam yang lalu</caption>
                                                <div class="flex items-center space-x-2">
                                                  <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 14 14"><g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round"><path d="M1.046 5.814h2.351v6.26h-2.35a.496.496 0 0 1-.497-.496V6.31a.496.496 0 0 1 .496-.496"/><path d="m3.397 5.814l2.52-4.028a1.08 1.08 0 0 1 .933-.516a1.1 1.1 0 0 1 1.14 1.09v2.887h4.356a1.14 1.14 0 0 1 1.091 1.31l-.793 5.119a1.13 1.13 0 0 1-1.121.992H5.014c-.31.001-.615-.07-.892-.208l-.715-.357m-.01-6.289v6.26"/></g></svg></a> <span>112</span>
                                                  <a href="#" class="pl-8">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7"  viewBox="0 0 24 24"><path fill="black" d="M4.5 20.25a.75.75 0 0 1-.72-1L5.38 14a7.8 7.8 0 0 1-.52-2.83a8 8 0 0 1 .62-3.1a8.1 8.1 0 0 1 1.7-2.52a7.8 7.8 0 0 1 2.53-1.7a7.92 7.92 0 0 1 6.19 0a8 8 0 0 1 4.85 7.32a8 8 0 0 1-2.33 5.62a8.1 8.1 0 0 1-2.52 1.7a8 8 0 0 1-5.93.1l-5.25 1.6a.8.8 0 0 1-.22.06m8.3-15.5a6.49 6.49 0 0 0-5.94 3.94a6.55 6.55 0 0 0 0 5a.75.75 0 0 1 0 .51l-1.23 4.17l4.15-1.26a.75.75 0 0 1 .51 0a6.52 6.52 0 0 0 5 0a6.44 6.44 0 0 0 3.43-8.45a6.45 6.45 0 0 0-5.92-3.91"/></svg>
                                                  </a>
                                                </div>
                                              </div>
                                              <div>
                                        </div>
                                      </div>
                                    </div>

                                    <!-- Item 2 -->
                                    <div class="space-y-4 border-b-2 py-3">
                                      <div class="flex items-center space-x-3">
                                        <a href="" class="flex items-center justify-center w-10 h-10 text-sm rounded-full bg-primary-500 text-gray-100 focus:outline-none focus:ring-2">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 12c2.208 0 4-1.791 4-4s-1.792-4-4-4-4 1.791-4 4 1.792 4 4 4zm0 2c-4.418 0-8 1.791-8 4 0 1.104.896 2 2 2h12c1.104 0 2-.896 2-2 0-2.209-3.582-4-8-4z" />
                                          </svg>
                                            </a>
                                            <title1 class="text-black-400 font-semibold">KangKomen</title1>
                                            <img src="{{ asset('images/Rangking.webp') }}" alt="" class="w-[22px] h-[24px]">
                                            </div>
                                            <div>
                                              <div class="relative w-full mx-auto bg-white">
                                                <title1 id="textContent6" class="text-black-400 transition-all duration-500 ease-in-out overflow-hidden">
                                                  <span class="block">Setelah membaca buku ini, saya benar-benar merasa tercerahkan. Penulis berhasil menggabungkan teori dan praktik dengan cara yang sangat menarik, membuat saya semakin sadar akan pentingnya literasi membaca dalam kehidupan sehari-hari..</span>
                                                  <span id="moreText6" class="hidden transition-opacity duration-500 ease-in-out opacity-0">
                                                    Buku ini juga menekankan pentingnya peran keluarga dan lingkungan dalam membudayakan membaca. Dengan panduan ini, membaca menjadi bagian tak terpisahkan dari kehidupan sehari-hari, membawa dampak positif yang berkelanjutan. Terima kasih telah membaca buku ini.
                                                  </span>
                                                </title1>
                                                <div class="pt-12">
                                                  <button data-target="moreText6" class="toggle-button absolute bottom-0 right-0 p-1 rounded-md text-white shadow-lg focus:outline-none bg-neutral-500 hover:bg-neutral-600 transition duration-500 ease-in-out">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                                                      <g fill="none" stroke="#129df7" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                                        <circle cx="12" cy="12" r="9" />
                                                        <path id="iconPath" d="m9 11l3 3l3-3" />
                                                      </g>
                                                    </svg>
                                                  </button>
                                                </div>
                                              </div>
                                              <div class="md:flex justify-between py-4">
                                                <caption class="text-color-400">2 jam yang lalu</caption>
                                                <div class="flex items-center space-x-2">
                                                  <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 14 14"><g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round"><path d="M1.046 5.814h2.351v6.26h-2.35a.496.496 0 0 1-.497-.496V6.31a.496.496 0 0 1 .496-.496"/><path d="m3.397 5.814l2.52-4.028a1.08 1.08 0 0 1 .933-.516a1.1 1.1 0 0 1 1.14 1.09v2.887h4.356a1.14 1.14 0 0 1 1.091 1.31l-.793 5.119a1.13 1.13 0 0 1-1.121.992H5.014c-.31.001-.615-.07-.892-.208l-.715-.357m-.01-6.289v6.26"/></g></svg></a> <span>112</span>
                                                  <a href="#" class="pl-8">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7"  viewBox="0 0 24 24"><path fill="black" d="M4.5 20.25a.75.75 0 0 1-.72-1L5.38 14a7.8 7.8 0 0 1-.52-2.83a8 8 0 0 1 .62-3.1a8.1 8.1 0 0 1 1.7-2.52a7.8 7.8 0 0 1 2.53-1.7a7.92 7.92 0 0 1 6.19 0a8 8 0 0 1 4.85 7.32a8 8 0 0 1-2.33 5.62a8.1 8.1 0 0 1-2.52 1.7a8 8 0 0 1-5.93.1l-5.25 1.6a.8.8 0 0 1-.22.06m8.3-15.5a6.49 6.49 0 0 0-5.94 3.94a6.55 6.55 0 0 0 0 5a.75.75 0 0 1 0 .51l-1.23 4.17l4.15-1.26a.75.75 0 0 1 .51 0a6.52 6.52 0 0 0 5 0a6.44 6.44 0 0 0 3.43-8.45a6.45 6.45 0 0 0-5.92-3.91"/></svg>
                                                  </a>
                                                </div>
                                              </div>
                                              <div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                <button id="close-popup2" type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-white-100 bg-gradient-to-r from-[#39ADF8] to-[#84CCFA] sm:mt-0 sm:w-auto hover:from-[#39ADF8] hover:to-[#84CCFA] hover:bg-gradient-to-l ">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <div>
          </div>
        </div>
      </div>
  </div>
</section>



{{-- anda mungkin menyukainya --}}
<section class="md:px-[160px] px-8 py-8">
  <div class="max-w-screen-lg mx-auto">
    <div class="font-medium text-[24px] text-center md:text-start">
      <h3>Anda mungkin juga menyukainya</h3>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-5 gap-4 py-5">
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
          <h6 class="font-normal pt-3">Judul Buku</h6>
          <p class="font-light">Author John Doe</p>
        </a>
      </div>
            <!-- 2 Image -->
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
                <h6 class="font-normal pt-3">Judul Buku</h6>
                <p class="font-light">Author John Doe</p>
              </a>
            </div>
                  <!-- 3 Image -->
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
          <h6 class="font-normal pt-3">Judul Buku</h6>
          <p class="font-light">Author John Doe</p>
        </a>
      </div>
            <!-- 4 Image -->
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
                <h6 class="font-normal pt-3">Judul Buku</h6>
                <p class="font-light">Author John Doe</p>
              </a>
            </div>
                  <!-- 5 Image -->
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
          <h6 class="font-normal pt-3">Judul Buku</h6>
          <p class="font-light">Author John Doe</p>
        </a>
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

<script src="{{ asset('js/popup.js') }}"></script>
<script src="{{ asset('js/showtext.js') }}"></script>
<script src="{{ asset('js/navbar.js') }}"></script>
</body>

</html>
