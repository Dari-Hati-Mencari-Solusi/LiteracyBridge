<nav class="bg-white border-gray-200 md:px-[160px] px-4">
  <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4 md:py-[22px]">
    <!-- Bagian Kiri: Logo dan Navigasi -->
    <div class="flex items-center space-x-4">
      <a href="#" class="flex items-center">
        <img src="./images/logo.webp" class="w-[56px]" alt="Flowbite Logo" />
      </a>
      <!-- Navigasi Desktop -->
      <ul class="hidden md:flex font-medium space-x-8 rtl:space-x-reverse">
        <li><a href="#" class="block py-2 px-3 text-gray-700 rounded md:bg-transparent md:p-0 dark:text-white"
            aria-current="page">Home</a></li>
        <li><a href="#" class="block py-2 px-3 text-gray-700 rounded md:bg-transparent md:p-0 dark:text-white"
            aria-current="page">Vidio</a></li>
        <li><a href="#" class="block py-2 px-3 text-gray-700 rounded md:bg-transparent md:p-0 dark:text-white"
            aria-current="page">Peringkat</a></li>
      </ul>
    </div>

    <!-- Bagian Kanan: Form Pencarian dan Tombol Masuk -->
    <div class="flex items-center space-x-4">
      <!-- Form Pencarian untuk Desktop -->
      <div class="relative max-w-md hidden md:block">
        <form action="" class="relative w-full">
          <input type="search"
            class="peer cursor-pointer relative z-10 h-12 w-12 rounded-full border bg-transparent outline-none transition-all duration-500 focus:w-80 focus:cursor-text focus:border-[#39ADF8] focus:pl-16 focus:pr-4" />
          <svg xmlns="http://www.w3.org/2000/svg"
            class="absolute inset-y-0 my-auto h-8 w-12 border-r border-transparent stroke-gray-500 px-3.5 peer-focus:border-[#39ADF8] peer-focus:stroke-[#39ADF8] transition-all duration-500 ease-in-out"
            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
        </form>
      </div>
      <!-- Tombol Masuk untuk Desktop -->
      @auth()
        <form action="{{ route("logout") }}" method="post">
          @csrf
          <button
          type="submit" class="custom-button hidden md:flex justify-center rounded-full bg-gradient-to-r from-[#39ADF8] to-[#84CCFA] px-[22px] py-2 text-lg font-semibold leading-6 text-white shadow-sm hover:bg-indigo-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 hover:bg-gradient-to-l hover:from-[#39ADF8] hover:to-[#84CCFA]"
          style="color:white !important">Logout</button>         
        </form>
      @else  
        <a href="{{ route("login") }}"
        class="custom-button hidden md:flex justify-center rounded-full bg-gradient-to-r from-[#39ADF8] to-[#84CCFA] px-[22px] py-2 text-lg font-semibold leading-6 text-white shadow-sm hover:bg-indigo-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 hover:bg-gradient-to-l hover:from-[#39ADF8] hover:to-[#84CCFA]"
        style="color:white !important">Masuk</a>    
      @endauth
    </div>

    <!-- Tombol Menu Mobile -->
    <button id="menu-toggle" type="button"
      class="ml-auto inline-flex items-center p-2 w-10 h-10 justify-center text-sm rounded-lg md:hidden focus:outline-none focus:ring-2 focus:ring-neutral-00 text-gray-400 hover:bg-[#39ADF8] focus:ring-white"
      aria-controls="navbar-default" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
        <path stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M1 1h15M1 7h15M1 13h15" />
      </svg>
    </button>
  </div>

  <!-- Navigasi Mobile -->
  <div id="navbar-default" class="hidden md:hidden w-full">
    <ul class="font-medium flex flex-col space-y-2 mt-4 rounded-lg">
      <li><a href="#" class="block py-2 px-3 text-gray-700 rounded md:bg-transparent md:p-0 dark:text-white"
          aria-current="page">Home</a></li>
      <li><a href="#" class="block py-2 px-3 text-gray-700 rounded md:bg-transparent md:p-0 dark:text-white"
          aria-current="page">Vidio</a></li>
      <li><a href="#" class="block py-2 px-3 text-gray-700 rounded md:bg-transparent md:p-0 dark:text-white"
          aria-current="page">Peringkat</a></li>
    </ul>
    <!-- Form Pencarian untuk Mobile -->
    <div class="relative flex-grow max-w-md mt-4 md:hidden">
      <form action="" class="relative w-full">
        <input type="search"
          class="peer cursor-pointer relative z-10 h-12 w-full rounded-full border bg-transparent pl-12 outline-none focus:w-full focus:cursor-text focus:border-[#39ADF8] focus:pl-16 focus:pr-4 transition-all duration-500" />
        <svg xmlns="http://www.w3.org/2000/svg"
          class="absolute inset-y-0 my-auto h-8 w-12 border-r border-transparent stroke-gray-500 px-3.5 peer-focus:border-[#39ADF8] peer-focus:stroke-[#39ADF8] transition-all duration-500 ease-in-out"
          fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
      </form>
    </div>
    <!-- Tombol Masuk untuk Mobile -->
    <a href="{{ route("login") }}"
      class="custom-button flex justify-center rounded-full bg-gradient-to-r from-[#39ADF8] to-[#84CCFA] px-[22px] py-2 text-lg font-semibold leading-6 text-white shadow-sm hover:bg-indigo-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 hover:bg-gradient-to-l hover:from-[#39ADF8] hover:to-[#84CCFA] mt-4"
      style="color:white !important">Masuk</a>
  </div>
</nav>