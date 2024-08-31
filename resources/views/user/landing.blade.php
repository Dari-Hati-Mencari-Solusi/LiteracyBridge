@extends('user.layouts.main')
@section('tab-title')
  Home - LiteracyBridge
@endsection
@section('content')
  {{-- hero section --}}
  <section class="py-[60px] md:py-[114px] px-4 md:px-[160px]">
    <div class="flex flex-col-reverse md:flex-row md:justify-between justify-center items-center text-left">
      <div class="text-center md:text-left">
        <div class="text-[24px] md:text-[33px] font-semibold">
          <h3>Gratis Untuk Meningkatkan <span>Literasimu</span></h3>
        </div>
        <div class="py-4 md:py-5 w-full md:w-8/12 mx-auto md:mx-0">
          <h6>Cara mudah untuk meningkatkan literasi membaca dengan sistem poin rangking</h6>
        </div>
        <div class="flex justify-center md:justify-start">
          <button
            class="rounded-full bg-gradient-to-r from-[#39ADF8] to-[#84CCFA] px-[60px] md:px-[120px] py-3 text-base md:text-lg font-semibold leading-6 text-white shadow-sm hover:bg-indigo-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 hover:bg-gradient-to-l hover:from-[#39ADF8] hover:to-[#84CCFA]"
            style="color:white !important">Mulai Membaca</button>
        </div>
      </div>
      <div class="font-semibold space-y-5">
        <div class="w-full md:w-auto flex justify-center mb-4 md:mb-0">
          <img src="./images/char7.webp" alt="Character" class="w-[250px] md:w-[393px]">
        </div>
      </div>
    </div>
  </section>



  {{-- content 1 --}}
  <section class="md:px-[160px] px-8">
    <div class="max-w-screen-lg mx-auto">
      <div class="font-medium text-[24px] text-center md:text-start">
        <h3>Rekomendasi Buku</h3>
      </div>
      <ul class="grid grid-cols-2 md:grid-cols-4 gap-4 py-5">
        @foreach ($favoriteBooks as $book)
          <li class="flex flex-col items-center md:items-start">
            <a href="{{ "books/" . $book->slug }}" class="block overflow-hidden rounded-xl max-w-full">
              <div class="h-64 relative overflow-hidden rounded-xl sm:h-[366px]">
                <img src="{{ asset("images/$book->cover_name") }}" alt="Cover {{ $book->title }}"
                  class="h-full w-full object-cover object-top rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110">
              </div>
              <div class="flex flex-col justify-between">
                <h6 class="mb-2 text-sm font-medium pt-3 line-clamp-2 hover:underline sm:text-base">{{ $book->title }}</h6>
                <p class="text-xs font-light line-clamp-1 sm:text-sm">Penulis {{ $book->author }}</p>
              </div>
            </a>
          </li>             
        @endforeach
      </ul>
    </div>
  </section>

  {{-- Pesan Literasi Untuk Siswa --}}
  {{-- Pesan Literasi Untuk Siswa --}}
  <section class="py-12 md:py-16">
    <div class="relative bg-gradient-to-t from-[#39ADF8] to-[#84CCFA] py-8 md:py-16 flex justify-center">
      <div class="text-center md:text-left p-4">
        <h1 class="pb-6 md:pb-8 text-2xl md:text-3xl font-semibold text-center" style="color: white !important">Pesan
          Literasi Untuk Siswa</h1>
        <img src="{{ asset('images/thumbnail.webp') }}" alt="Thumbnail"
          class="rounded-xl max-w-full md:max-w-[716px] mx-auto">
      </div>
    </div>
  </section>

  {{-- Rekomendasi Buku Literasi --}}
  <section class="md:px-[160px] px-8 pt-12 pb-16">
    <div class="max-w-screen-lg mx-auto">
      <div class="font-medium text-[24px] text-center md:text-start">
        <h3>Rekomendasi Buku Literasi</h3>
      </div>
      <ul class="grid grid-cols-2 md:grid-cols-4 gap-4 py-5">
        @foreach ($literationBooks as $book)
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


  {{-- some book3 --}}
  <section class="md:px-[160px] px-8 py-16 md:py-24">
    <div class="max-w-screen-lg mx-auto">
      <div class="font-medium text-[24px] text-center md:text-start">
        <h3>Buku Terbaru</h3>
      </div>
      <ul class="grid grid-cols-2 md:grid-cols-4 gap-4 py-5">
        @foreach ($latestBooks as $book)
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

  {{-- Liga bookworms --}}
  <section class="md:px-[160px]">
    <div class="max-w-screen-lg mx-auto space-y-10">
      <div class="grid grid-cols-4 md:grid-cols-8 gap-12 px-6 md:px-0">
        <div class="flex justify-center items-center">
          <img src="{{ asset('./images/rankunlock.webp') }}" alt="gambar rank unlock" class="rounded-xl object-cover">
        </div>
        <div class="flex justify-center items-center">
          <img src="{{ asset('./images/ranklock.webp') }}" alt="gambar lock" class="rounded-xl object-cover">
        </div>
        <div class="flex justify-center items-center">
          <img src="{{ asset('./images/ranklock.webp') }}" alt="gambar lock" class="rounded-xl object-cover">
        </div>
        <div class="flex justify-center items-center">
          <img src="{{ asset('./images/ranklock.webp') }}" alt="gambar lock" class="rounded-xl object-cover">
        </div>
        <div class="flex justify-center items-center">
          <img src="{{ asset('./images/ranklock.webp') }}" alt="gambar lock" class="rounded-xl object-cover">
        </div>
        <div class="flex justify-center items-center">
          <img src="{{ asset('./images/ranklock.webp') }}" alt="gambar lock" class="rounded-xl object-cover">
        </div>
        <div class="flex justify-center items-center">
          <img src="{{ asset('./images/ranklock.webp') }}" alt="gambar lock" class="rounded-xl object-cover">
        </div>
        <div class="flex justify-center items-center">
          <img src="{{ asset('./images/ranklock.webp') }}" alt="gambar lock" class="rounded-xl object-cover">
        </div>
      </div>
      <div class="text-center">
        <h1 class="text-neutral-800 text-[28px] font-bold">Liga Bookworms</h1>
        <h6 class="text-neutral-800 font-normal text-lg">Selesaikan membaca satu buku untuk bergabung di papan skor ini
        </h6>
        <div class="md:flex justify-center pt-2">
          <button
            class="md:flex justify-center rounded-full border-[1.5px] border-neutral-500 bg-transparent px-[55px] py-3 text-lg font-semibold leading-6 text-[#39ADF8] shadow-sm hover:bg-gradient-to-l hover:from-[#39ADF8] hover:to-[#84CCFA] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 ml-4 hover:text-white-100">
            Mulai Membaca
          </button>
        </div>
      </div>
    </div>
  </section>

  {{-- vidio literasi --}}
  <section class="md:px-[160px] px-8 py-32">
    <div class="max-w-screen-lg mx-auto">
      <div class="font-medium text-[24px] text-center md:text-start">
        <h3>Vidio Literasi</h3>
      </div>
      <ul class="grid grid-cols-2 md:grid-cols-4 gap-4 py-5">
        @foreach ($videos as $video)
          <li class="flex flex-col items-center md:items-start">
            <a href="https://www.youtube.com/watch?v={{ $video->youtube_link }}" target="_blank">
              <img src="https://img.youtube.com/vi/{{ $video->youtube_link }}/hqdefault.jpg" alt="Youtube thumbnail"
                class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110">
              <h6 class="text-sm mb-2 font-medium pt-3 line-clamp-2 sm:text-base">{{ $video->title }}</h6>
              <p class="text-xs font-light sm:text-sm">Creator {{ $video->creator }}</p>
            </a>
          </li>
        @endforeach
      </ul>
    </div>
  </section>

  <!-- Content 4 -->
  <section class=" px-0 mt-5 relative">
    <div class="text-center md:flex md:justify-center">
      <h1 class="text-primary-800 text-[32px] md:text-[48px] w-full md:w-5/12 font-bold mb-5 md:mb-10">Baca Dimana Saja,
        Kapan Saja</h1>
    </div>
    <div class="relative w-screen">
      <img src="./images/char5.webp" alt=""
        class="relative m-auto w-auto max-h-[500px] max-w-full object-contain z-10">
      <img src="./images/Rectangle12.webp" alt=""
        class="absolute bottom-0 left-0 w-screen h-[28vh] md:h-[45vh] object-cover z-0">
    </div>
  </section>
@endsection
