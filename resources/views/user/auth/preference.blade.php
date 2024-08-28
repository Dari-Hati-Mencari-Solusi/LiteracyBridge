<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Preferensi Pengguna</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  {{-- tailwind --}}
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-primary-900">  
  <section>    
    <div class="container mx-auto px-6 xl:px-24">
      <div class="pt-11 flex justify-center gap-x-4 items-center md:pt-[74px]">
        <div id="btnBack" class="hidden group p-1 rounded-full cursor-pointer hover:bg-primary-700 transition-colors">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9" viewBox="0 0 24 24">
            <path fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m12 19l-7-7l7-7m7 7H5" />
          </svg>
        </div>
  
        <div class="w-4/5 h-3 md:h-6 bg-primary-800 rounded-full">
          <div id="progressBar" class="h-full bg-gradient-to-b from-[#84CCFA] to-[#39ADF8] rounded-full transition-all duration-1000 ease-in" style="width: 25%"></div>
        </div>
          
      </div>

      <form action="/preference" method="POST">
        @csrf
        <ul class="mt-9 overflow-hidden overflow-y-auto" id="preferenceList">
          @foreach ($preferences as $preference)
            <li class="transition-all duration-700 {{ $loop->iteration != 1 ? "hidden" : "" }}">
              <div>
                <div class="w-fit m-auto border-4 border-primary-800 text-white-100 px-6 py-[22px] rounded-2xl text-base lg:text-h5">
                  {{ $preference->question }}
                </div>
              </div>
        
              <div class="mt-4 mb-10 flex flex-col lg:flex-row lg:gap-x-20 xl:gap-x-36">
                <div class="w-32 mx-auto mt-6 lg:w-1/3">
                  <img src="{{ asset("images/$preference->image_name") }}" alt="karakter preference" class="w-full">
                </div>
        
                <ul class="mt-16 flex flex-wrap gap-y-5 gap-x-6 md:gap-x-12 lg:w-4/6 xl:self-start">
                  @foreach ($preference->user_preference_types as $preference_type)
                    <li class="flex gap-x-4 cursor-pointer items-center h-max p-3 lg:py-4 lg:px-6 border-2 lg:border-4 border-primary-800 rounded-2xl hover:bg-primary-800">                      
                      @if ($preference_type->icon_name)
                        <img src="{{ asset("images/$preference_type->icon_name") }}" class="w-5 h-5 lg:w-8 lg:h-8" alt="{{ $preference_type->name }} Icon">                        
                      @endif
                      <span class="text-white-100 text-xs lg:text-h5">{{ $preference_type->name }}</span>
                      <input type="checkbox" name="preferences[]" class="hidden" value="{{ "{$preference->id}_{$preference_type->id}" }}">
                    </li>                    
                  @endforeach        
                </ul>
              </div>                  
            </li>            
          @endforeach      
        </ul>  
        
        <div id="message" class="mb-5">
          <p class="text-end text-red-500 font-semibold animate-pulse"></p>
        </div>
  
        <div class="py-16 border-t border-primary-800 flex justify-end">   
          <a id="btnNext" class="cursor-pointer bg-gradient-to-l from-[#84CCFA] to-[#39ADF8] text-white-100 text-sm py-3 px-8 rounded-[33px] transition-all duration-300 hover:scale-105 md:px-28 md:py-5 md:text-h5">
            Lanjut
          </a>        
          <button  type="submit" class="hidden cursor-pointer bg-gradient-to-l from-[#84CCFA] to-[#39ADF8] text-white-100 text-sm py-3 px-8 rounded-[33px] transition-all duration-300 hover:scale-105 md:px-28 md:py-5 md:text-h5">
            Lanjut Membaca
          </button>
        </div>
      </form>
    </div>
  </section>
  
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="{{ asset("js/user_preferences.js") }}"></script>
</body>

</html>
