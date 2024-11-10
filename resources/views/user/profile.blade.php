@extends('user.layouts.main')
@section('tab-title')
  Home - LiteracyBridge
@endsection
@section('content')
@php
  \Carbon\Carbon::setLocale('id');
@endphp

<style>
  body {
  background-color: #F8F8FF;
  }
</style>

<section class="px-16 py-12">
  <div class="bg-gradient-to-b from-[#3DB3FF] to-[#FFFFFF] rounded-[24px]">
    <a href="#" class="flex justify-end p-2">
      <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.5066 4.17999V6.96666H6.9666V26.4733H26.4733V13.9333H29.2599V27.8667C29.2599 28.2362 29.1131 28.5906 28.8518 28.8519C28.5905 29.1132 28.2361 29.26 27.8666 29.26H5.57327C5.20373 29.26 4.84933 29.1132 4.58803 28.8519C4.32673 28.5906 4.17993 28.2362 4.17993 27.8667V5.57333C4.17993 5.20379 4.32673 4.84939 4.58803 4.58809C4.84933 4.32679 5.20373 4.17999 5.57327 4.17999H19.5066ZM27.783 4.67323L28.7681 5.65832C28.8987 5.78896 28.9721 5.96613 28.9721 6.15086C28.9721 6.33559 28.8987 6.51276 28.7681 6.64341L15.7641 19.646L12.9886 21.0115C12.9102 21.0503 12.8216 21.0636 12.7353 21.0494C12.649 21.0352 12.5693 20.9943 12.5074 20.9325C12.4456 20.8706 12.4047 20.7909 12.3905 20.7046C12.3764 20.6183 12.3896 20.5297 12.4285 20.4513L13.7939 17.6758L26.7979 4.67184C26.9286 4.54123 27.1057 4.46786 27.2905 4.46786C27.4752 4.46786 27.6524 4.54123 27.783 4.67184V4.67323Z" fill="#073F63"/>
      </svg>
    </a>
    <div class="flex flex-col md:flex-row items-center md:items-start gap-6 md:px-12 py-5">
      <!-- Profile Section -->
      <div class="bg-[#D9D9D9] p-5 md:p-7 rounded-full flex justify-center md:block">
        <img src="{{ asset('images/profile.webp') }}" alt="foto profile" class="w-[110px] h-[130px]">
      </div>

      <!-- Profile Details and Statistics -->
      <div class="flex-1">
        <div class="flex flex-col md:flex-row items-center md:items-start gap-4">
          <!-- Profile Details -->
          <div class="py-5 px-5 md:flex-1">
            <h5 class="text-black-400 font-bold">{{ $user->name }}</h5>
            <h6 class="text-neutral-700">{{ $user->username }}</h6>
            <h6 class="text-black-400">Bergabung {{ \Carbon\Carbon::parse("$user->created_at")->translatedFormat('F Y') }}</h6>
            <h6 class="text-[#129DF7] font-bold">Bookworms</h6>
            <img src="{{ asset('images/rangking.webp') }}" alt="ranking profile" class="w-[35px] h-[45px]">
          </div>

          <!-- Statistics Section -->
          <div class="py-8 md:py-0 space-y-4 md:space-y-0">
            <div class="flex flex-wrap gap-2"> <!-- Mengurangi jarak antar kartu -->
              <!-- Card 1 -->
              <div class="border-[1.5px] border-slate-500 bg-white rounded-xl p-4 flex space-x-3 w-full md:w-[48%]">
                <img src="{{ asset('images/rangking.webp') }}" alt="logo ranking" class="w-[35px] h-[45px]">
                <div>
                  <h5 class="text-black-400 font-bold">Bookworms</h5>
                  <h6 class="text-neutral-700">Liga saat ini</h6>
                </div>
              </div>

              <!-- Card 2 -->
              <div class="border-[1.5px] border-slate-500 bg-white rounded-xl p-4 flex space-x-3 w-full md:w-[48%]">
                <img src="{{ asset('images/point-fix.webp') }}" alt="logo ranking" class="w-[35px] h-[45px]">
                <div>
                  <h5 class="text-black-400 font-bold">{{ $user->point }}</h5>
                  <h6 class="text-neutral-700">Total point</h6>
                </div>
              </div>

              <!-- Card 3 -->
              <div class="border-[1.5px] border-slate-500 bg-white rounded-xl p-4 flex space-x-3 w-full md:w-[48%]">
                <img src="{{ asset('images/medal.webp') }}" alt="logo ranking" class="w-[35px] h-[45px]">
                <div>
                  <h5 class="text-black-400 font-bold">Posisi 3 Besar</h5>
                  <h6 class="text-neutral-700">Pencapaian</h6>
                </div>
              </div>

              <!-- Card 4 -->
              <div class="border-[1.5px] border-slate-500 bg-white rounded-xl p-4 flex space-x-3 w-full md:w-[48%]">
                <img src="{{ asset('images/energi.webp') }}" alt="logo ranking" class="w-[35px] h-[45px]">
                <div>
                  <h5 class="text-black-400 font-bold">43</h5>
                  <h6 class="text-neutral-700">Total XP</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="px-16 flex gap-8">
  <div class="relative rounded-[24px] p-4 bg-white-100 px-10 md:w-5/12 w-[100%] py-4">
    <h1 class="text-[16px] font-semibold text-[#073F63]">Genre Favorit</h1>
    <div class="py-2">
        <hr class="absolute left-0 right-0 border-[#A4ABB0] border-1">
    </div>

    <div class="mt-4 flex flex-wrap gap-4">
        <!-- Card 1 -->
        <a href="#" class="flex-shrink-0 border-[1.5px] border-primary-200 bg-white rounded-xl p-2 flex items-center space-x-2">
            <img src="{{ asset('images/literasi.webp') }}" alt="logo ranking" class="w-[25px] h-[35px]">
            <div>
                <h5 class="text-black-400 font-bold">Literacy</h5>
            </div>
        </a>

        <!-- Card 2 -->
        <a href="#" class="flex-shrink-0 border-[1.5px] border-primary-200 bg-white rounded-xl p-2 flex items-center space-x-2">
            <img src="{{ asset('images/romantis.webp') }}" alt="logo ranking" class="w-[25px] h-[35px]">
            <div>
                <h5 class="text-black-400 font-bold">Romantis</h5>
            </div>
        </a>

        <!-- Card 3 -->
        <a href="#" class="flex-shrink-0 border-[1.5px] border-primary-200 bg-white rounded-xl p-2 flex items-center space-x-2">
            <img src="{{ asset('images/sains.webp') }}" alt="logo ranking" class="w-[25px] h-[35px]">
            <div>
                <h5 class="text-black-400 font-bold">Sains</h5>
            </div>
        </a>

        <!-- Card 4 -->
        <a href="#" class="flex-shrink-0 border-[1.5px] border-primary-200 bg-white rounded-xl p-2 flex items-center space-x-2">
            <img src="{{ asset('images/cerita.webp') }}" alt="logo ranking" class="w-[25px] h-[35px]">
            <div>
                <h5 class="text-black-400 font-bold">Cerita</h5>
            </div>
        </a>

        <!-- Card 5 -->
        <a href="#" class="flex-shrink-0 border-[1.5px] border-primary-200 bg-white rounded-xl p-2 flex items-center space-x-2">
            <img src="{{ asset('images/fantasi.webp') }}" alt="logo ranking" class="w-[25px] h-[35px]">
            <div>
                <h5 class="text-black-400 font-bold">Fantasi</h5>
            </div>
        </a>
    </div>
</div>




  <div class="relative md:w-7/12 bg-white-100 rounded-[24px] px-10 p-4 w-[100%]">
    <div class="space-x-9">
        <a href="#" class="text-[16px] font-semibold text-[#073F63]">Ambil Hadiah</a>
        <a href="#" class="text-[16px] font-semibold text-[#073F63]">Buku Rekomendasi</a>
        <a href="#" class="text-[16px] font-semibold text-[#073F63]">Following</a>
    </div>
    <div class="py-2">
      <hr class="absolute left-0 right-0 border-[#A4ABB0] border-1 ">
    </div>
  </div>
</section>


@endsection
