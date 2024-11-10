@extends('user.layouts.main')
@section('tab-title')
  Home - LiteracyBridge
@endsection
@section('content')
@php
  \Carbon\Carbon::setLocale('id');
@endphp
<section class="container py-16">
  <div class="md:flex gap-3 md:px-[160px] px-4 justify-between bg-[#3DB3FF]">
    <div class="w-full md:w-6/12">
      <div class="flex flex-col md:flex-row">
        <div class="bg-[#D9D9D9] p-5 md:p-7 rounded-full flex justify-center md:block">
          <img src="{{ asset('images/profile.webp') }}" alt="foto profile" class="w-[110px] h-[130px]">
        </div>
        <div class="py-5 px-5">
          <h5 class="text-black-400 font-bold">{{ $user->name }}</h5>
          <h6 class="text-neutral-700">{{ $user->username }}</h6>
          <h6 class="text-black-400">Bergabung {{ \Carbon\Carbon::parse("$user->created_at")->translatedFormat('F Y') }}</h6>
          <h6 class="text-[#129DF7] font-bold">Bookworms</h6>
          <img src="{{ asset('images/rangking.webp') }}" alt="ranking profile" class="w-[35px] h-[45px]">
        </div>
      </div>
      <div class="py-8 md:py-14 space-y-4">
        <div class="border-t-2 border-neutral-400 w-full md:w-[422px]">
          <h4 class="text-black-400 pt-3 text-lg md:text-[28px] font-bold">Statistik</h4>
        </div>
        <div class="flex flex-wrap gap-4">
          <div class="border-[1.5px] border-primary-200 rounded-xl p-4 flex space-x-3 w-full md:w-[48%]">
            <img src="{{ asset('images/rangking.webp') }}" alt="logo ranking" class="w-[35px] h-[45px]">
            <div>
              <h5 class="text-black-400 font-bold">Bookworms</h5>
              <h6 class="text-neutral-700">Liga saat ini</h6>
            </div>
          </div>
          <div class="border-[1.5px] border-primary-200 rounded-xl p-4 flex space-x-3 w-full md:w-[48%]">
            <img src="{{ asset('images/point-fix.webp') }}" alt="logo ranking" class="w-[35px] h-[45px]">
            <div>
              <h5 class="text-black-400 font-bold">{{ $user->point }}</h5>
              <h6 class="text-neutral-700">Total point</h6>
            </div>
          </div>
        </div>

        <div class="flex flex-wrap gap-4">
          <div class="border-[1.5px] border-primary-200 rounded-xl p-4 flex space-x-3 w-full md:w-[48%]">
            <img src="{{ asset('images/medal.webp') }}" alt="logo ranking" class="w-[35px] h-[45px]">
            <div>
              <h5 class="text-black-400 font-bold">Posisi 3 Besar</h5>
              <h6 class="text-neutral-700">Pencapaian</h6>
            </div>
          </div>
          <div class="border-[1.5px] border-primary-200 rounded-xl p-4 flex space-x-3 w-full md:w-[48%]">
            <img src="{{ asset('images/energi.webp') }}" alt="logo ranking" class="w-[35px] h-[45px]">
            <div>
              <h5 class="text-black-400 font-bold">43</h5>
              <h6 class="text-neutral-700">Total XP</h6>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- <div class="w-full md:w-7/12 space-y-4 mt-8 md:mt-0">
      <div class="border-2 border-primary-200 rounded-xl p-5 space-y-2">
        <h5 class="text-black-400 font-bold">Buku Favorit</h5>
        <div class="flex flex-wrap overflow-x-auto gap-x-2 gap-y-4">
          <a href="#" class="block overflow-hidden rounded-xl">
            <div class="relative overflow-hidden rounded-xl">
              <img src="{{ asset ('./images/literasimembaca1.webp') }}" alt="" class="w-[92px] rounded-lg h-[131px] transform transition-transform duration-300 ease-in-out hover:scale-110">
              <div class="absolute top-0 right-0 flex items-center justify-center w-14 h-5 p-2 bg-blue-500 text-white-100 text-[10px] rounded-tr-xl rounded-bl-xl space-x-1">
                <span>Populer</span>
              </div>
            </div>
          </a>
          <a href="#" class="block overflow-hidden rounded-xl">
            <div class="relative overflow-hidden rounded-xl">
              <img src="{{ asset ('./images/literasimembaca2.webp') }}" alt="" class="w-[92px] rounded-lg h-[131px] transform transition-transform duration-300 ease-in-out hover:scale-110">
            </div>
          </a>
          <a href="#" class="block overflow-hidden rounded-xl">
            <div class="relative overflow-hidden rounded-xl">
              <img src="{{ asset ('./images/literasimembaca3.webp') }}" alt="" class="w-[92px] rounded-lg h-[131px] transform transition-transform duration-300 ease-in-out hover:scale-110">
            </div>
          </a>
          <a href="#" class="block overflow-hidden rounded-xl">
            <div class="relative overflow-hidden rounded-xl">
              <img src="{{ asset ('./images/literasimembaca4.webp') }}" alt="" class="w-[92px] rounded-lg h-[131px] transform transition-transform duration-300 ease-in-out hover:scale-110">
            </div>
          </a>
          <a href="#" class="block overflow-hidden rounded-xl">
            <div class="relative overflow-hidden rounded-xl">
              <img src="{{ asset ('./images/cover-sangkuriang.jpg') }}" alt="" class="w-[92px] rounded-lg h-[131px] transform transition-transform duration-300 ease-in-out hover:scale-110">
              <div class="absolute top-0 right-0 flex items-center justify-center w-14 h-5 p-2 bg-blue-500 text-white-100 text-[10px] rounded-tr-xl rounded-bl-xl space-x-1">
                <span>Populer</span>
              </div>
            </div>
          </a>
        </div>
      </div>

      <!-- Duplikat Buku Favorit lain -->
      <div class="border-2 border-primary-200 rounded-xl p-5 space-y-2">
        <h5 class="text-black-400 font-bold">Terakhir Dibaca</h5>
        <div class="flex flex-wrap overflow-x-auto gap-x-2 gap-y-4">
          <a href="#" class="block overflow-hidden rounded-xl">
            <div class="relative overflow-hidden rounded-xl">
              <img src="{{ asset ('./images/cover-geochemical.jpg') }}" alt="" class="w-[92px] rounded-lg h-[131px] transform transition-transform duration-300 ease-in-out hover:scale-110">
            </div>
          </a>
          <a href="#" class="block overflow-hidden rounded-xl">
            <div class="relative overflow-hidden rounded-xl">
              <img src="{{ asset ('./images/cover-literasi-sebagai-praktik-sosial.jpg') }}" alt="" class="w-[92px] rounded-lg h-[131px] transform transition-transform duration-300 ease-in-out hover:scale-110">
            </div>
          </a>
          <a href="#" class="block overflow-hidden rounded-xl">
            <div class="relative overflow-hidden rounded-xl">
              <img src="{{ asset ('./images/cover-sejenak-hening.jpg') }}" alt="" class="w-[92px] rounded-lg h-[131px] transform transition-transform duration-300 ease-in-out hover:scale-110">
            </div>
          </a>
          <a href="#" class="block overflow-hidden rounded-xl">
            <div class="relative overflow-hidden rounded-xl">
              <img src="{{ asset ('./images/cover-merengkuh-kebahagiaan.jpg') }}" alt="" class="w-[92px] rounded-lg h-[131px] transform transition-transform duration-300 ease-in-out hover:scale-110">
            </div>
          </a>
          <a href="#" class="block overflow-hidden rounded-xl">
            <div class="relative overflow-hidden rounded-xl">
              <img src="{{ asset ('./images/literasimembaca3.webp') }}" alt="" class="w-[92px] rounded-lg h-[131px] transform transition-transform duration-300 ease-in-out hover:scale-110">
              <div class="absolute top-0 right-0 flex items-center justify-center w-14 h-5 p-2 bg-blue-500 text-white-100 text-[10px] rounded-tr-xl rounded-bl-xl space-x-1">
                <span>Populer</span>
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="border-2 border-primary-200 rounded-xl p-5 space-y-2">
        <div class="flex flex-wrap overflow-x-auto gap-x-6 gap-y-3">
          <a href="#"><img src="{{ asset('images/rankunlock.png') }}" alt="gambar ranking" class="w-[37px] rounded-lg h-[49px]"></a>
          <a href="#"><img src="{{ asset('images/ranklock.png') }}" alt="gambar ranking" class="w-[37px] rounded-lg h-[49px]"></a>
          <a href="#"><img src="{{ asset('images/ranklock.png') }}" alt="gambar ranking" class="w-[37px] rounded-lg h-[49px]"></a>
          <a href="#"><img src="{{ asset('images/ranklock.png') }}" alt="gambar ranking" class="w-[37px] rounded-lg h-[49px]"></a>
          <a href="#"><img src="{{ asset('images/ranklock.png') }}" alt="gambar ranking" class="w-[37px] rounded-lg h-[49px]"></a>
          <a href="#"><img src="{{ asset('images/ranklock.png') }}" alt="gambar ranking" class="w-[37px] rounded-lg h-[49px]"></a>
          <a href="#"><img src="{{ asset('images/ranklock.png') }}" alt="gambar ranking" class="w-[37px] rounded-lg h-[49px]"></a>
          <a href="#"><img src="{{ asset('images/ranklock.png') }}" alt="gambar ranking" class="w-[37px] rounded-lg h-[49px]"></a>
        </div>
      </div>
    </div> --}}
  </div>
</section>


@endsection
