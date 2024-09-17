@extends('user.layouts.main')

@section('tab-title')
  Baca - LiteracyBridge
@endsection

@section('content')
<section>
  <div class="flex justify-center py-16">
    <input type="hidden" name="inpFileName" value="{{ $book->file_name }}">
    <div class="w-full md:w-2/4 flex-wrap px-6">
      <div class="px-5">
        <img src="{{ asset("images/$book->cover_name") }}" alt="gambar buku literasi membaca" class="rounded-2xl w-full md:w-64 mx-auto">
      </div>
      <div class="pt-6 space-y-2 text-center">
        <h3 class="md:text-[33px] text-[20px] font-semibold">{{ $book->title }}</h3>
        <p class="text-black-400">Author: <span class="text-primary-800">{{ $book->author }}</span></p>
        <div class="md:flex flex md:justify-center md:space-x-4 space-y-2 md:space-y-0 justify-center gap-6 md:flex-row items-center">
          <div class="flex items-center space-x-2">
            <img src="{{ asset('images/literasi.webp') }}" alt="gambar icon literasi" class="w-7 h-7">
            <span class="text-title1 text-black-900 font-medium">Literasi</span>
          </div>
          <div class="flex items-center space-x-2 pb-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24">
              <path fill="#E98B8B" fill-rule="evenodd" d="M4.536 5.778a5 5 0 0 1 7.07 0q.275.274.708.682q.432-.408.707-.682a5 5 0 0 1 7.125 7.016L13.02 19.92a1 1 0 0 1-1.414 0L4.48 12.795a5 5 0 0 1 .055-7.017z"/>
            </svg>
            <span class="text-title1 text-black-900 font-medium">12k</span>
          </div>
          <div class="flex items-center space-x-2 pb-2">
            <img src="{{ asset('images/point-fix.webp') }}" alt="gambar point" class="w-7 h-7">
            <span class="text-title1 text-black-900 font-medium">5 Point</span>
          </div>
        </div>
      </div>

      <div class="space-y-3 md:pt-4 flex flex-col items-center">
        <div class="md:flex md:gap-3 flex-col md:flex-row w-full md:w-auto gap-4 px-2">
          <button class="btn-blue w-full md:w-auto rounded-full flex justify-center items-center gap-2 px-3 py-2 text-base md:text-lg font-medium leading-6 text-white shadow-sm mb-4 md:mb-0">
            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 md:w-7 md:h-7" viewBox="0 0 512 512">
              <path fill="#ffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M352 48H160a48 48 0 0 0-48 48v368l144-128l144 128V96a48 48 0 0 0-48-48"/>
            </svg></a>
            Baca nanti
          </button>
          <button class="w-full md:w-auto rounded-full bg-gradient-to-r from-[#E98B8B] to-[#D77C7C] flex justify-center items-center gap-2 px-3 py-2 text-base md:text-lg font-medium leading-6 text-white shadow-sm hover:bg-indigo-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 hover:bg-gradient-to-l text-white-100 hover:from-[#E98B8B] hover:to-[#D77C7C]">
            <a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 md:w-7 md:h-7" viewBox="0 0 24 24">
                <path fill="#ffff" fill-rule="evenodd" d="M4.536 5.778a5 5 0 0 1 7.07 0q.275.274.708.682q.432-.408.707-.682a5 5 0 0 1 7.125 7.016L13.02 19.92a1 1 0 0 1-1.414 0L4.48 12.795a5 5 0 0 1 .055-7.017z"/>
              </svg>
            </a>
            Suka buku ini
          </button>
        </div>

      </div>
    </div>
  </div>

    <div class="container mx-auto text-center py-6">
        <div class="bg-primary-100/30 p-4 rounded-lg shadow-md">
            <h2 class="text-slate-700 text-4xl font-bold">Mulai Membaca</h2>
        </div>
    </div>

    <div class="flex justify-center">
        <canvas id="pdfArea" class="border pdfArea border-gray-300 w-full max-w-4xl"></canvas>
    </div>

    
    <div class="flex justify-center space-x-4 my-6 p-4">
      <button class="hidden btn-blue py-3 px-5 rounded-lg space-x-2" id="prev-page">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 inline-block" viewBox="0 0 32 32">
          <path fill="currentColor" d="m16 8l1.43 1.393L11.85 15H24v2H11.85l5.58 5.573L16 24l-8-8z" />
          <path fill="currentColor" d="M16 30a14 14 0 1 1 14-14a14.016 14.016 0 0 1-14 14m0-26a12 12 0 1 0 12 12A12.014 12.014 0 0 0 16 4" />
        </svg>
        <span class="inline-block text-xl">Sebelumnya</span>
      </button>
      <button class="btn-blue py-3 px-5 rounded-lg flex items-center space-x-2" id="next-page">
        <span class="text-xl">Selanjutnya</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="w-7" viewBox="0 0 32 32">
          <path fill="currentColor" d="m16 8l-1.43 1.393L20.15 15H8v2h12.15l-5.58 5.573L16 24l8-8z" />
          <path fill="currentColor" d="M16 30a14 14 0 1 1 14-14a14.016 14.016 0 0 1-14 14m0-26a12 12 0 1 0 12 12A12.014 12.014 0 0 0 16 4" />
        </svg>
      </button>

      <button id="finish-reading-button" class="text-xl btn-green py-3 px-5 rounded-lg space-x-2" style="display: none;" data-user-id="{{ auth()->user()->id }}">
          <span class="inline-block">Selesai Membaca</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="w-7 inline-block" viewBox="0 0 16 16">
            <path fill="currentColor" fill-rule="evenodd" d="M3 13.5a.5.5 0 0 1-.5-.5V3a.5.5 0 0 1 .5-.5h9.25a.75.75 0 0 0 0-1.5H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V9.75a.75.75 0 0 0-1.5 0V13a.5.5 0 0 1-.5.5zm12.78-8.82a.75.75 0 0 0-1.06-1.06L9.162 9.177L7.289 7.241a.75.75 0 1 0-1.078 1.043l2.403 2.484a.75.75 0 0 0 1.07.01z" clip-rule="evenodd" />
          </svg>
      </button>
    </div>

    <div class="flex justify-center my-6">
    </div>

</section>
@endsection
@section("js-custom")
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.12.313/pdf.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="{{ asset('js/pdfviewer.js') }}"></script>
@endsection
