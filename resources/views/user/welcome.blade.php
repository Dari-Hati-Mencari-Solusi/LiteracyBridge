@extends('user.layouts.main')
@section('tab-title')
  Welcome to LiteracyBridge
@endsection
@section('content')
  {{-- hero section --}}
  <section class="py-[114px] md:px-[160px]">
    <div class="md:flex md:justify-around justify-center items-center text-center">
      <div class="w-full md:w-auto flex justify-center mb-4 md:mb-0">
        {{-- <img src="./images/char4.webp" alt="" > --}}
        <iframe class="md:w-[393px] w-full h-[460px] " src="https://lottie.host/embed/849e88e5-eea0-44f6-9038-9430c64f5674/Mdks9tSD7W.json"></iframe>
      </div>
      <div class="font-semibold space-y-5">
        <div class="md:text-[33px] text-[28px] ">
          <h3>Baca Lebih Banyak Buku,</h3>
          <h3>Capai Lebih Jauh Ilmu.</h3>
        </div>
        <div class="md:flex justify-center">
          <button
            id="btnGo"
            class="md:flex justify-center rounded-full bg-gradient-to-r from-[#39ADF8] to-[#84CCFA] px-[120px] py-3 text-lg font-semibold leading-6 text-white shadow-sm hover:bg-indigo-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 hover:bg-gradient-to-l hover:from-[#39ADF8] hover:to-[#84CCFA] ml-4"
            style="color:white !important">Ayo Mulai</button>
        </div>
        <div class="md:flex justify-center">
          <a href="{{ route("login") }}"
            class="transition duration-300 md:flex justify-center rounded-full border-[1.5px] border-neutral-500 bg-transparent px-[55px] py-3 text-lg font-semibold leading-6 text-[#39ADF8] shadow-sm hover:bg-gradient-to-l hover:from-[#39ADF8] hover:to-[#84CCFA] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 ml-4 hover:text-white-100">
            Saya Sudah Memiliki Akun
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="md:px-[160px] px-8">
    <div class="max-w-screen-lg mx-auto">
      <div class="font-medium text-[24px] text-center md:text-start">
        <h3>Buku Favorit</h3>
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

  {{-- content 1 --}}
  <section class="py-[114px] md:px-[160px] px-6">
    <div class="flex flex-col-reverse md:flex-row md:justify-between items-center">
      <div class="space-y-2 w-full md:w-6/12 text-center md:text-left">
        <h3 class="text-[24px] md:text-[33px] font-bold text-primary-500">Baca. Pahami. Berkembang</h3>
        <h6 class="font-normal text-sm md:text-base">Literacy Bridge adalah aplikasi yang menghubungkan Anda dengan
          buku-buku pilihan untuk membaca, memahami, dan berkembang. Tingkatkan literasi Anda dan raih potensi penuh
          melalui pengetahuan yang didapatkan.</h6>
      </div>
      <div class="w-full md:w-auto flex mb-4 md:mb-0 left-4">
        <img src="./images/animasi.webp" alt="" class="w-[260px] md:w-[290px]">
        {{-- <iframe class="md:w-[290px] w-full h-[460px]" src="https://lottie.host/embed/427f1e0d-d710-4ea7-92f7-724d9f3d42ae/kmOLCRQB1d.json"></iframe> --}}
      {{-- <dotlottie-player class="" src="https://lottie.host/427f1e0d-d710-4ea7-92f7-724d9f3d42ae/kmOLCRQB1d.json" background="transparent" speed="1" style="" loop autoplay resizeMode='right'></dotlottie-player> --}}
      </div>
    </div>
  </section>

  {{-- content 2 --}}
  <section class="py-10 md:px-[160px] px-6 mt-[-24px]">
    <div class="flex flex-col-reverse md:flex-row md:justify-between justify-center items-center">
      <div class="w-full md:w-auto flex justify-center mb-4 md:mb-0 order-2 md:order-1">
        {{-- <img src="./images/animasi2.webp" alt="" class="w-[260px] md:w-[290px]"> --}}
      <dotlottie-player src="https://lottie.host/c3175f20-b91b-41fa-b359-539a1f7d8bc0/TgSqL4PVuC.json" background="transparent" speed="1" style="width: 400px; height: 400px;" loop autoplay></dotlottie-player>
      </div>
      <div class="space-y-2 w-full md:w-6/12 text-center md:text-right order-1 md:order-2">
        <h3 class="text-[24px] md:text-[33px] font-bold text-primary-500">Menjadi Motivasi Membaca</h3>
        <h6 class="font-normal text-sm md:text-base">Menghadirkan sistem ranking pembaca yang memotivasi Anda untuk
          membaca lebih banyak. Tingkatkan peringkat Anda dengan setiap buku yang selesai, dan raih penghargaan atas
          pencapaian literasi Anda.</h6>
      </div>
    </div>
  </section>


  {{-- content 3 --}}
  <section class="py-16 md:px-[160px] px-6">
    <div class="flex flex-col-reverse md:flex-row md:justify-between justify-center items-center">
      <div class="space-y-2 w-full md:w-6/12 text-center md:text-left">
        <h3 class="text-[24px] md:text-[33px] font-bold text-primary-500">Jembatan Pengetahuan</h3>
        <h6 class="font-normal text-sm md:text-base">Literasi Baca adalah jembatan menuju mimpi Anda. Dengan membaca, Anda
          dapat mengakses pengetahuan dan inspirasi yang diperlukan untuk mewujudkan impian dan mencapai kesuksesan.</h6>
      </div>
      <div class="w-full md:w-auto flex justify-center mb-4 md:mb-0">
        {{-- <img src="./images/animasi3.webp" alt="" class="w-[260px] md:w-[290px]"> --}}
        {{-- <iframe class="md:w-[290px] w-full h-[460px]" src="https://lottie.host/embed/80907445-f1ae-4617-8321-b615807846c5/R2CrvD40Tj.json"></iframe> --}}
        <dotlottie-player src="https://lottie.host/80907445-f1ae-4617-8321-b615807846c5/R2CrvD40Tj.json" background="transparent" speed="1" style="width: 400px; height: 400px;" loop autoplay></dotlottie-player>
      </div>
    </div>
  </section>

  {{-- some book2 --}}
  <section class="md:px-[160px] px-8">
    <div class="max-w-screen-lg mx-auto">
      <div class="font-medium text-[24px] text-center md:text-start">
        <h3>Buku Terbaru</h3>
      </div>
      <ul class="grid grid-cols-2 md:grid-cols-4 gap-4 py-5">
        @foreach ($latestBooks as $book)
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

  <!-- Content 4 -->
  <section class="py-5 md:py-10 px-0 mt-5 relative">
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

  {{-- some vidio --}}
  <section class="md:px-[160px] px-8 mt-24">
    <div class="max-w-screen-lg mx-auto">
      <div class="font-medium text-[24px] text-center md:text-start">
        <h3>Vidio Literasi</h3>
      </div>
      <ul class="grid grid-cols-2 md:grid-cols-4 gap-4 py-5">
        @foreach ($videos as $video)
        <li class="flex flex-col items-center md:items-start">
          <a href="https://www.youtube.com/watch?v={{ $video->youtube_link }}" target="_blank" class="block overflow-hidden rounded-xl max-w-full">
            <!-- Atur tinggi gambar menjadi lebih kecil dengan h-40 -->
            <div class="relative overflow-hidden rounded-xl h-40 sm:h-52">
              <img src="https://img.youtube.com/vi/{{ $video->youtube_link }}/hqdefault.jpg" alt="Youtube thumbnail"
                class="h-full w-full object-cover object-top transform transition-transform duration-300 ease-in-out hover:scale-110">
            </div>
            <div class="flex flex-col justify-between mt-2">
              <h6 class="text-sm font-medium line-clamp-2 sm:text-base">{{ $video->title }}</h6>
              <p class="text-xs font-light sm:text-sm">Creator {{ $video->creator }}</p>
            </div>
          </a>
        </li>


          {{-- <li class="flex flex-col items-center md:items-start">
            <a href="https://www.youtube.com/watch?v={{ $video->youtube_link }}" target="_blank">
              <img src="https://img.youtube.com/vi/{{ $video->youtube_link }}/hqdefault.jpg" alt="Youtube thumbnail"
                class="rounded-xl transform transition-transform duration-300 ease-in-out hover:scale-110">

              <h6 class="text-sm mb-2 font-medium pt-3 line-clamp-2 sm:text-base">{{ $video->title }}</h6>
              <p class="text-xs font-light sm:text-sm">Creator {{ $video->creator }}</p>
            </a>
          </li> --}}
        @endforeach
      </ul>
    </div>
  </section>

  {{-- papan peringkat --}}
  <section class="md:px-[160px] py-12 mt-10">
    <div class="max-w-screen-lg mx-auto space-y-10">
      <div class="font-medium text-[24px] text-center md:text-start">
        <h3>Papan Peringkat</h3>
      </div>

      <!-- Bagian gambar 1-4 -->
      <div class="grid grid-cols-4 sm:grid-cols-4 gap-4 px-4 md:px-0">
        <div class="flex justify-center items-center transform transition hover:animate-rotate-back-and-forth">
          <img src="{{ asset ('./images/rank1.png') }}" alt="gambar rank 1" class="rounded-xl object-cover w-full md:w-[160px] md:h-[180px]" style="height: auto;">
        </div>
        <div class="flex justify-center items-center transform transition hover:animate-rotate-back-and-forth">
          <img src="{{ asset ('./images/rank2.png') }}" alt="gambar rank 2" class="rounded-xl object-cover w-full md:w-[160px] md:h-[180px]" style="height: auto;">
        </div>
        <div class="flex justify-center items-center transform transition hover:animate-rotate-back-and-forth">
          <img src="{{ asset ('./images/rank3.png') }}" alt="gambar rank 3" class="rounded-xl object-cover w-full md:w-[160px] md:h-[180px]" style="height: auto;">
        </div>
        <div class="flex justify-center items-center transform transition hover:animate-rotate-back-and-forth">
          <img src="{{ asset ('./images/rank4.png') }}" alt="gambar rank 4" class="rounded-xl object-cover w-full md:w-[160px] md:h-[180px]" style="height: auto;">
        </div>
      </div>

      <!-- Bagian gambar 5-8 -->
      <div class="grid grid-cols-4 sm:grid-cols-4 gap-4 px-4 md:px-0">
        <div class="flex justify-center items-center transform transition hover:animate-rotate-back-and-forth">
          <img src="{{ asset ('./images/rank5.png') }}" alt="gambar rank 5" class="rounded-xl object-cover w-full md:w-[160px] md:h-[180px]" style="height: auto;">
        </div>
        <div class="flex justify-center items-center transform transition hover:animate-rotate-back-and-forth">
          <img src="{{ asset ('./images/rank6.png')}}" alt="gambar rank 6" class="rounded-xl object-cover w-full md:w-[160px] md:h-[180px]" style="height: auto;">
        </div>
        <div class="flex justify-center items-center transform transition hover:animate-rotate-back-and-forth">
          <img src="{{ asset ('./images/rank7.png') }}" alt="gambar rank 7" class="rounded-xl object-cover w-full md:w-[160px] md:h-[180px]" style="height: auto;">
        </div>
        <div class="flex justify-center items-center transform transition hover:animate-rotate-back-and-forth">
          <img src="{{ asset ('./images/rank8.png') }}" alt="gambar rank 8" class="rounded-xl object-cover w-full md:w-[160px] md:h-[180px]" style="height: auto;">
        </div>
      </div>
    </div>
  </section>

  {{-- <section class="md:px-[160px] py-12 mt-10">
    <div class="max-w-screen-lg mx-auto space-y-10">
      <div class="font-medium text-[24px] text-center md:text-start">
        <h3>Papan Peringkat</h3>
      </div>
      <div class="grid grid-cols-4 md:grid-cols-4 gap-6 px-6 md:px-0">
        <div class="flex justify-center items-center transform transition hover:animate-rotate-back-and-forth">
          <img src="{{ asset ('./images/rank1.png') }}" alt="gambar rank 1" class="rounded-xl object-cover" style="width:164px; height:237px;">
        </div>
        <div class="flex justify-center items-center transform transition hover:animate-rotate-back-and-forth">
          <img src="{{ asset ('./images/rank2.png') }}" alt="gambar rank 2" class="rounded-xl object-cover" style="width:160px; height:237px;">
        </div>
        <div class="flex justify-center items-center transform transition hover:animate-rotate-back-and-forth">
          <img src="{{ asset ('./images/rank3.png') }}" alt="gambar rank 3" class="rounded-xl object-cover" style="width:200px; height:237px;" >
        </div>
        <div class="flex justify-center items-center transform transition hover:animate-rotate-back-and-forth">
          <img src="{{ asset ('./images/rank4.png') }}" alt="gambar rank 4" class="rounded-xl object-cover" style="width:170px; height:237px;" >
        </div>
      </div>
      <div class="grid grid-cols-4 md:grid-cols-4 gap-6 px-6 md:px-0">
        <div class="flex justify-center items-center transform transition hover:animate-rotate-back-and-forth">
          <img src="{{ asset ('./images/rank5.png') }}" alt="gambar rank 5" class="rounded-xl object-cover" style="width:164px; height:237px;" >
        </div>
        <div class="flex justify-center items-center transform transition hover:animate-rotate-back-and-forth">
          <img src="{{ asset ('./images/rank6.png')}}" alt="gambar rank 6" class="rounded-xl object-cover" style="width:160px; height:237px;" >
        </div>
        <div class="flex justify-center items-center transform transition hover:animate-rotate-back-and-forth">
          <img src="{{ asset ('./images/rank7.png') }}" alt="gambar rank 7" class="rounded-xl object-cover" style="width:170px; height:233px;" >
        </div>
        <div class="flex justify-center items-center transform transition hover:animate-rotate-back-and-forth">
          <img src="{{ asset ('./images/rank8.png') }}" alt="gambar rank 8" class="rounded-xl object-cover" style="width:170px; height:237px;" >
        </div>
      </div>
    </div>
  </section> --}}
@endsection
@section("js-custom")
  <script>

  </script>
@endsection
