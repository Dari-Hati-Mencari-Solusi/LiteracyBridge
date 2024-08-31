@extends("user.layouts.main")
@section("tab-title")
  Cari Buku
@endsection
@section("content")
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
                <select id="category" name="category" class="w-full h-12 pl-8 pr-8 bg-white-100 rounded-l-lg focus:outline-none focus:border-none focus:ring-0 outline-none border-none appearance-none">
                  <option class="text-neutral-800" selected>Kategori</option>
                  <option>Category 1</option>
                  <option>Category 2</option>
                </select>                
              </div>
              <input type="text" class="w-3/5 h-12 pl-4 bg-white-100 border-neutral-400 focus:outline-none focus:border-y-0 focus:ring-0 border-y-0 border-l border-r font-normal" placeholder="Cari buku berdasarkan..">
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
    
    <section class="container mx-auto px-6 xl:px-24 py-14">
      <div class="gap-x-11 md:flex ">
        
        <div id="filterContainer" class="hidden lg:block w-1/4 space-y-4 transition-all duration-500 ease-out">
          <div class="flex justify-between border-b transition-all duration-300 border-neutral-500 py-2 px-3">
            <div id="filterChild" class="transition-all duration-300">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 pr-2 text-neutral-800 inline-block" viewBox="0 0 24 24">
                <path fill="none" stroke="#525658" stroke-linecap="round" stroke-width="2"
                  d="M18.796 4H5.204a1 1 0 0 0-.753 1.659l5.302 6.058a1 1 0 0 1 .247.659v4.874a.5.5 0 0 0 .2.4l3 2.25a.5.5 0 0 0 .8-.4v-7.124a1 1 0 0 1 .247-.659l5.302-6.059c.566-.646.106-1.658-.753-1.658Z" />
              </svg>            
              <span>Filternya</span>
            </div>
            <div id="btnHiddenFilter">
              <svg id="leftArrowIcon" class="w-8 h-8 transition-all cursor-pointer hover:scale-105" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><path fill="currentColor" d="M128 24a104 104 0 1 0 104 104A104.11 104.11 0 0 0 128 24m0 192a88 88 0 1 1 88-88a88.1 88.1 0 0 1-88 88m48-88a8 8 0 0 1-8 8h-60.69l18.35 18.34a8 8 0 0 1-11.32 11.32l-32-32a8 8 0 0 1 0-11.32l32-32a8 8 0 0 1 11.32 11.32L107.31 120H168a8 8 0 0 1 8 8"/></svg>
              <svg id="rightArrowIcon" class="hidden w-8 h-8 transition-all cursor-pointer hover:scale-105" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 256 256"><path fill="currentColor" d="M128 24a104 104 0 1 0 104 104A104.11 104.11 0 0 0 128 24m0 192a88 88 0 1 1 88-88a88.1 88.1 0 0 1-88 88m45.66-93.66a8 8 0 0 1 0 11.32l-32 32a8 8 0 0 1-11.32-11.32L148.69 136H88a8 8 0 0 1 0-16h60.69l-18.35-18.34a8 8 0 0 1 11.32-11.32Z"/></svg>
            </div>
          </div>
  
          <ul class="pb-8 overflow-y-auto overflow-x-hidden h-[450px] pt-1">
            <li class="py-2 px-2 rounded-md hover:bg-slate-300">
              <a href="#" class="flex  space-x-4">
                <img src="{{ asset('images/literasi.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
                <span class="text-neutral-800">Literasi</span>
              </a>
            </li>
            <li class="py-2 px-2 rounded-md hover:bg-slate-300">
              <a href="#" class="flex  space-x-4">
                <img src="{{ asset('images/romantis.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
                <span class="text-neutral-800">Romantis</span>
              </a>
            </li>
            <li class="py-2 px-2 rounded-md hover:bg-slate-300">
              <a href="#" class="flex  space-x-4">
                <img src="{{ asset('images/sains.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
                <span class="text-neutral-800">Sains</span>
              </a>
            </li>
            <li class="py-2 px-2 rounded-md hover:bg-slate-300">
              <a href="#" class="flex  space-x-4">
                <img src="{{ asset('images/cerita.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
                <span class="text-neutral-800">Cerita</span>
              </a>
            </li>
            <li class="py-2 px-2 rounded-md hover:bg-slate-300">
              <a href="#" class="flex  space-x-4">
                <img src="{{ asset('images/fantasi.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
                <span class="text-neutral-800">Fantasi</span>
              </a>
            </li>
            <li class="py-2 px-2 rounded-md hover:bg-slate-300">
              <a href="#" class="flex  space-x-4">
                <img src="{{ asset('images/sejarah.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
                <span class="text-neutral-800">Sejarah</span>
              </a>
            </li>
            <li class="py-2 px-2 rounded-md hover:bg-slate-300">
              <a href="#" class="flex  space-x-4">
                <img src="{{ asset('images/budaya.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
                <span class="text-neutral-800">Budaya</span>
              </a>
            </li>
            <li class="py-2 px-2 rounded-md hover:bg-slate-300">
              <a href="#" class="flex  space-x-4">
                <img src="{{ asset('images/horor.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
                <span class="text-neutral-800">Horor</span>
              </a>
            </li>
            <li class="py-2 px-2 rounded-md hover:bg-slate-300">
              <a href="#" class="flex  space-x-4">
                <img src="{{ asset('images/comic.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
                <span class="text-neutral-800">Comic</span>
              </a>
            </li>
            <li class="py-2 px-2 rounded-md hover:bg-slate-300">
              <a href="#" class="flex  space-x-4">
                <img src="{{ asset('images/mitos.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
                <span class="text-neutral-800">Mitos</span>
              </a>
            </li>
            <li class="py-2 px-2 rounded-md hover:bg-slate-300">
              <a href="#" class="flex  space-x-4">
                <img src="{{ asset('images/inspirasi.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
                <span class="text-neutral-800">Inspirasi</span>
              </a>
            </li>
            <li class="py-2 px-2 rounded-md hover:bg-slate-300">
              <a href="#" class="flex  space-x-4">
                <img src="{{ asset('images/budaya.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
                <span class="text-neutral-800">Budaya</span>
              </a>
            </li>
            <li class="py-2 px-2 rounded-md hover:bg-slate-300">
              <a href="#" class="flex  space-x-4">
                <img src="{{ asset('images/horor.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
                <span class="text-neutral-800">Horor</span>
              </a>
            </li>
            <li class="py-2 px-2 rounded-md hover:bg-slate-300">
              <a href="#" class="flex  space-x-4">
                <img src="{{ asset('images/comic.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
                <span class="text-neutral-800">Comic</span>
              </a>
            </li>
            <li class="py-2 px-2 rounded-md hover:bg-slate-300">
              <a href="#" class="flex  space-x-4">
                <img src="{{ asset('images/mitos.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
                <span class="text-neutral-800">Mitos</span>
              </a>
            </li>
            <li class="py-2 px-2 rounded-md hover:bg-slate-300">
              <a href="#" class="flex  space-x-4">
                <img src="{{ asset('images/inspirasi.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
                <span class="text-neutral-800">Inspirasi</span>
              </a>
            </li>
          </ul>
        </div>
  
        {{-- buku flex --}}
        <div class="w-full">
          <div class="md:flex gap-8 justify-between">
            <div class="flex items-end">
              <h5 class="text-neutral-800">
                Menampilkan hasil untuk 
                <b class="font-semibold text-black-500">Literasi</b>
              </h5>
            </div>
            <div class="space-y-2">
              <div class="flex items-center gap-x-2 justify-end">
                <span>Filter buku</span>
                <button class="border border-slate-700 p-2 rounded-md transition-all hover:bg-slate-200" data-modal-target="filter-modal" data-modal-toggle="filter-modal">
                  <svg class="fill-slate-600 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 21"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M6.5 4a1 1 0 0 1 1 1v2a1 1 0 1 1-2 0V5a1 1 0 0 1 1-1m12 2h-11m-2 0h-3m4 8a1 1 0 0 1 1 1v2a1 1 0 0 1-2 0v-2a1 1 0 0 1 1-1m12 2h-11m-2 0h-3m12-7a1 1 0 0 1 1 1v2a1 1 0 0 1-2 0v-2a1 1 0 0 1 1-1m-1 2h-11m16 0h-3"/></svg>
                </button>
              </div>
              <div class="flex items-center">
                <span class="text-neutral-600 mr-1">Urutan Berdasarkan: </span>
                <div class="relative flex items-center">
                  <select id="category" name="category"
                    class="bg-white-100 px-3 rounded-l-lg border-none focus:border-none focus:ring-0 focus:outline-none appearance-none w-full">
                    <option class="px-3 text-xs" selected>
                      Populer
                    </option>
                    <option class="px-3 text-xs">Category 1</option>
                    <option class="px-3 text-xs">Category 2</option>
                  </select>                  
                </div>            
              </div>
            </div>
          </div>
          <ul class="grid grid-cols-2 md:grid-cols-4 gap-12 py-5">
            <!-- 1st Image -->
            <li class="relative flex flex-col items-center">
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
                <h6 class="font-normal pt-3  text-black-500">Judul Buku</h6>
                <p class="font-light text-black-400 text-title2">Author <span class="text-primary-800 text-title2">John
                    Doe</span></p>
              </a>
            </li>
            <li class="relative flex flex-col items-center">
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
                <h6 class="font-normal pt-3  text-black-500">Judul Buku</h6>
                <p class="font-light text-black-400 text-title2">Author <span class="text-primary-800 text-title2">John
                    Doe</span></p>
              </a>
            </li>
            <li class="relative flex flex-col items-center">
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
                <h6 class="font-normal pt-3  text-black-500">Judul Buku</h6>
                <p class="font-light text-black-400 text-title2">Author <span class="text-primary-800 text-title2">John
                    Doe</span></p>
              </a>
            </li>
            <li class="relative flex flex-col items-center">
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
                <h6 class="font-normal pt-3  text-black-500">Judul Buku</h6>
                <p class="font-light text-black-400 text-title2">Author <span class="text-primary-800 text-title2">John
                    Doe</span></p>
              </a>
            </li>
            <li class="relative flex flex-col items-center">
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
                <h6 class="font-normal pt-3  text-black-500">Judul Buku</h6>
                <p class="font-light text-black-400 text-title2">Author <span class="text-primary-800 text-title2">John
                    Doe</span></p>
              </a>
            </li>
            <li class="relative flex flex-col items-center">
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
                <h6 class="font-normal pt-3  text-black-500">Judul Buku</h6>
                <p class="font-light text-black-400 text-title2">Author <span class="text-primary-800 text-title2">John
                    Doe</span></p>
              </a>
            </li>
            <li class="relative flex flex-col items-center">
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
                <h6 class="font-normal pt-3  text-black-500">Judul Buku</h6>
                <p class="font-light text-black-400 text-title2">Author <span class="text-primary-800 text-title2">John
                    Doe</span></p>
              </a>
            </li>
            <li class="relative flex flex-col items-center">
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
                <h6 class="font-normal pt-3  text-black-500">Judul Buku</h6>
                <p class="font-light text-black-400 text-title2">Author <span class="text-primary-800 text-title2">John
                    Doe</span></p>
              </a>
            </li>
            <li class="relative flex flex-col items-center">
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
                <h6 class="font-normal pt-3  text-black-500">Judul Buku</h6>
                <p class="font-light text-black-400 text-title2">Author <span class="text-primary-800 text-title2">John
                    Doe</span></p>
              </a>
            </li>
            <li class="relative flex flex-col items-center">
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
                <h6 class="font-normal pt-3  text-black-500">Judul Buku</h6>
                <p class="font-light text-black-400 text-title2">Author <span class="text-primary-800 text-title2">John
                    Doe</span></p>
              </a>
            </li>
            <li class="relative flex flex-col items-center">
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
                <h6 class="font-normal pt-3  text-black-500">Judul Buku</h6>
                <p class="font-light text-black-400 text-title2">Author <span class="text-primary-800 text-title2">John
                    Doe</span></p>
              </a>
            </li>
            <li class="relative flex flex-col items-center">
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
                <h6 class="font-normal pt-3  text-black-500">Judul Buku</h6>
                <p class="font-light text-black-400 text-title2">Author <span class="text-primary-800 text-title2">John
                    Doe</span></p>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </section>
    
    <section>
      <div id="filter-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white-100 rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Filter kategori buku
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="filter-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="py-8 px-4 md:p-5 space-y-4">
                  <ul class="py-8 overflow-y-auto overflow-x-hidden h-[300px]">
                    <li class="py-2 px-2 rounded-md hover:bg-slate-300">
                      <a href="#" class="flex  space-x-4">
                        <img src="{{ asset('images/literasi.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
                        <span class="text-neutral-800">Literasi</span>
                      </a>
                    </li>
                    <li class="py-2 px-2 rounded-md hover:bg-slate-300">
                      <a href="#" class="flex  space-x-4">
                        <img src="{{ asset('images/romantis.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
                        <span class="text-neutral-800">Romantis</span>
                      </a>
                    </li>
                    <li class="py-2 px-2 rounded-md hover:bg-slate-300">
                      <a href="#" class="flex  space-x-4">
                        <img src="{{ asset('images/sains.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
                        <span class="text-neutral-800">Sains</span>
                      </a>
                    </li>
                    <li class="py-2 px-2 rounded-md hover:bg-slate-300">
                      <a href="#" class="flex  space-x-4">
                        <img src="{{ asset('images/cerita.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
                        <span class="text-neutral-800">Cerita</span>
                      </a>
                    </li>
                    <li class="py-2 px-2 rounded-md hover:bg-slate-300">
                      <a href="#" class="flex  space-x-4">
                        <img src="{{ asset('images/fantasi.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
                        <span class="text-neutral-800">Fantasi</span>
                      </a>
                    </li>
                    <li class="py-2 px-2 rounded-md hover:bg-slate-300">
                      <a href="#" class="flex  space-x-4">
                        <img src="{{ asset('images/sejarah.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
                        <span class="text-neutral-800">Sejarah</span>
                      </a>
                    </li>
                    <li class="py-2 px-2 rounded-md hover:bg-slate-300">
                      <a href="#" class="flex  space-x-4">
                        <img src="{{ asset('images/budaya.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
                        <span class="text-neutral-800">Budaya</span>
                      </a>
                    </li>
                    <li class="py-2 px-2 rounded-md hover:bg-slate-300">
                      <a href="#" class="flex  space-x-4">
                        <img src="{{ asset('images/horor.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
                        <span class="text-neutral-800">Horor</span>
                      </a>
                    </li>
                    <li class="py-2 px-2 rounded-md hover:bg-slate-300">
                      <a href="#" class="flex  space-x-4">
                        <img src="{{ asset('images/comic.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
                        <span class="text-neutral-800">Comic</span>
                      </a>
                    </li>
                    <li class="py-2 px-2 rounded-md hover:bg-slate-300">
                      <a href="#" class="flex  space-x-4">
                        <img src="{{ asset('images/mitos.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
                        <span class="text-neutral-800">Mitos</span>
                      </a>
                    </li>
                    <li class="py-2 px-2 rounded-md hover:bg-slate-300">
                      <a href="#" class="flex  space-x-4">
                        <img src="{{ asset('images/inspirasi.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
                        <span class="text-neutral-800">Inspirasi</span>
                      </a>
                    </li>
                    <li class="py-2 px-2 rounded-md hover:bg-slate-300">
                      <a href="#" class="flex  space-x-4">
                        <img src="{{ asset('images/budaya.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
                        <span class="text-neutral-800">Budaya</span>
                      </a>
                    </li>
                    <li class="py-2 px-2 rounded-md hover:bg-slate-300">
                      <a href="#" class="flex  space-x-4">
                        <img src="{{ asset('images/horor.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
                        <span class="text-neutral-800">Horor</span>
                      </a>
                    </li>
                    <li class="py-2 px-2 rounded-md hover:bg-slate-300">
                      <a href="#" class="flex  space-x-4">
                        <img src="{{ asset('images/comic.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
                        <span class="text-neutral-800">Comic</span>
                      </a>
                    </li>
                    <li class="py-2 px-2 rounded-md hover:bg-slate-300">
                      <a href="#" class="flex  space-x-4">
                        <img src="{{ asset('images/mitos.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
                        <span class="text-neutral-800">Mitos</span>
                      </a>
                    </li>
                    <li class="py-2 px-2 rounded-md hover:bg-slate-300">
                      <a href="#" class="flex  space-x-4">
                        <img src="{{ asset('images/inspirasi.webp') }}" alt="icon literasi" class="w-[23px] h-[24px]">
                        <span class="text-neutral-800">Inspirasi</span>
                      </a>
                    </li>
                  </ul>
                </div>       
            </div>
        </div>
    </div>
    </section>
  
    {{-- Banyak Dikoleksi --}}
    <section class="container mx-auto px-6 xl:px-24 py-8">
      <div class="max-w-screen-lg mx-auto space-y-6">
        <div class="font-medium text-[24px] text-center md:text-start">
          <h3>Banyak Dikoleksi</h3>
        </div>
        <div class="md:flex">
          <!-- Konten Grid -->
          <ul class="w-full md:w-9/12 grid grid-cols-1 md:grid-cols-2 gap-3">
            <li class="flex items-start mt-2 mb-4">
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
            </li>
            <li class="flex items-start mt-2 mb-4">
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
            </li>
            <li class="flex items-start mt-2 mb-4">
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
            </li>
            <li class="flex items-start mt-2 mb-4">
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
            </li>
          </ul>
  
          <!-- Gambar animasi -->
          <div class="hidden md:flex w-3/12 items-center">
            <img src="{{ asset('images/animasi.webp') }}" alt="">
          </div>
        </div>
      </div>
    </section>
  
@endsection

@section("js-custom")
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
  <script>    
    $("#btnHiddenFilter").on("click", function () {
      const $filtContainer = $("#filterContainer");
      const $filtChild = $("#filterChild");
      const $leftArrowIcon = $("#leftArrowIcon");
      const $rightArrowIcon = $("#rightArrowIcon");
      
      if ($filtContainer.hasClass('w-1/4')) {
        $filtChild.toggleClass("hidden");      
        $filtContainer.removeClass('w-1/4').addClass('w-[4%]');        

        $leftArrowIcon.toggleClass("hidden");
        $rightArrowIcon.toggleClass("hidden");
      } else if ($filtContainer.hasClass('w-[4%]')) {
        
        setTimeout(() => {
          $filtChild.toggleClass("hidden");   
          $rightArrowIcon.toggleClass("hidden");   
          $leftArrowIcon.toggleClass("hidden");
        }, 490);
        $filtContainer.removeClass('w-[4%]').addClass('w-1/4');
      }
    });
  </script>
@endsection
