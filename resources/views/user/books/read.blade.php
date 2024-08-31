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
          <button class="w-full md:w-auto rounded-full bg-gradient-to-r from-[#39ADF8] to-[#84CCFA] flex justify-center items-center gap-2 px-3 py-2 text-base md:text-lg font-medium leading-6 text-white shadow-sm hover:bg-indigo-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 hover:bg-gradient-to-l text-white-100 hover:from-[#39ADF8] hover:to-[#84CCFA] mb-4 md:mb-0">
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
        <div class="bg-gray-100 p-4 rounded-lg shadow-md">
            <h2 class="text-4xl font-bold">Mulai Membaca</h2>
        </div>
    </div>

    <div class="flex justify-center space-x-4 my-6 p-4">
        <button class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition" id="prev-page"
            onclick="PdfViewer.showPrevPage()">Prev</button>
        <button class="bg-blue-300 text-white py-2 px-4 rounded hover:bg-blue-400 transition" id="next-page"
            onclick="PdfViewer.showNextPage()">Next</button>
    </div>

    <div class="flex justify-center">
        <canvas id="pdfArea" class="border pdfArea border-gray-300 w-full max-w-4xl"></canvas>
    </div>
    <div class="flex justify-center my-6">
      <button id="finish-reading-button" class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600 transition" style="display: none;" data-user-id="{{ auth()->user()->id }}">
          Selesai Membaca
      </button>
  </div>

</section>
@endsection
@section("js-custom")
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.12.313/pdf.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="{{ asset('js/pdfviewer.js') }}"></script>
@endsection