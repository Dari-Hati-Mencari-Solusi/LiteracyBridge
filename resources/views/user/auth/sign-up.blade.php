<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Daftar Akun LiteracyBridge</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased font-poppins">
  <section class="flex flex-col md:flex-row w-full">

    {{-- row 1 --}}
    <div class="w-full md:w-1/2 lg:w-5/12 bg-white  h-screen min-h-[650px]">
      <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm flex items-center">
          <img src="{{ asset ('images/logo.webp')  }}" alt="">
          <h1 class="text-[18px] text-[#171717] font-semibold ps-4">Literacy Bridge</h1>
        </div>
        <div class="sm:mx-auto sm:w-full sm:max-w-sm space-y-4">
          <h2 class="mt-10 text-3xl font-semibold leading-9 tracking-tight text-gray-900 text-start">Selamat Datang Bridger!</h2>
          <p class="text-neutral-600 font-normal font-md">Literacy Bridge meningkatkan literasi membaca melalui buku digital dan sistem reward menarik.</p>
        </div>

        @if ($errors->has('error_message'))
          <div id="toast-danger"
            class="mt-4 border-2 border-red-500 flex items-center w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow sm:mx-auto sm:w-full sm:max-w-sm"
            role="alert">
            <div
              class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg">
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                  d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
              </svg>
              <span class="sr-only">Error icon</span>
            </div>
            <div class="ms-3 text-sm font-medium">{{ $errors->first('error_message') }}</div>
            <button type="button"
              class="ms-auto -mx-1.5 -my-1.5 bg-white text-black-500 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-200 inline-flex items-center justify-center h-8 w-8"
              data-dismiss-target="#toast-danger" aria-label="Close">
              <span class="sr-only">Close</span>
              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
              </svg>
            </button>
          </div>
        @endif

        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
          <form class="space-y-6" action="/signup" method="POST">
            @csrf
            <div>
              <label for="text" class="block text-sm font-semibold leading-6 text-black-5600">Nama Lengkap</label>
              <div class="mt-2">
                <input id="text" name="fullname" type="text" value="{{ old('fullname') }}" autocomplete="off"
                  class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset border-neutral-600 ring-neutral-600 placeholder:text-neutral-400 focus:ring-1 focus:ring-inset focus:ring-[#EE9F9F] sm:text-sm sm:leading-6 px-3 font-normal placeholder:text-md transition-all duration-300 ease-in-out"
                  placeholder="Jhon Doe">
              </div>
            </div>

            {{-- <div>
              <label for="text" class="block text-sm font-normal leading-6 text-black-5600">Username</label>
              <div class="mt-2">
                <input id="text" name="username" type="text" value="{{ old('username') }}"
                  autocomplete="new-username" required
                  class="@error('username') is-invalid @else is-valid @enderror block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset border-neutral-600 ring-neutral-600 placeholder:text-neutral-400 focus:ring-1 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-3 font-normal placeholder:text-md transition-all duration-300 ease-in-out"
                  placeholder="Jhon">
              </div>
            </div> --}}

            <div>
              <label for="email" class="block text-sm font-semibold leading-6 text-black-5600">Email</label>
              <div class="mt-2">
                <input id="email" name="email" type="email" value="{{ old('email') }}" required
                  class="@error('email') is-invalid @else is-valid @enderror block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset border-neutral-600 ring-neutral-600 placeholder:text-neutral-400 focus:ring-1 focus:ring-inset focus:ring-[#EE9F9F] sm:text-sm sm:leading-6 px-3 font-normal placeholder:text-md transition-all duration-300 ease-in-out"
                  placeholder="Contoh@gmail.com">
              </div>
            </div>

            <div>
              <div class="flex items-center justify-between">
                <label for="password" class="block text-sm font-semibold leading-6 text-black-500">Kata Sandi</label>
              </div>
              <div class="relative">
                <input id="password" name="password" type="password" autocomplete="new-password" required
                  class="block w-full rounded-md border-0 py-2.5 pr-10 text-gray-900 shadow-sm ring-1 ring-inset border-neutral-600 ring-neutral-600 placeholder:text-neutral-400 focus:ring-1 focus:ring-inset focus:ring-[#EE9F9F] sm:text-sm sm:leading-6 px-3 transition-all duration-300 ease-in-out"
                  placeholder="Masukan sandi anda">

                <span class="absolute inset-y-0 right-0 flex items-center pr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                        <path d="M15.0004 3.75C21.7405 3.75 27.348 8.5997 28.5236 15C27.348 21.4002 21.7405 26.25 15.0004 26.25C8.26015 26.25 2.65269 21.4002 1.47705 15C2.65269 8.5997 8.26015 3.75 15.0004 3.75ZM15.0004 23.75C20.2949 23.75 24.8254 20.065 25.9721 15C24.8254 9.93504 20.2949 6.25 15.0004 6.25C9.70575 6.25 5.17528 9.93504 4.02848 15C5.17528 20.065 9.70575 23.75 15.0004 23.75ZM15.0004 20.625C11.8937 20.625 9.37533 18.1066 9.37533 15C9.37533 11.8934 11.8937 9.375 15.0004 9.375C18.1069 9.375 20.6254 11.8934 20.6254 15C20.6254 18.1066 18.1069 20.625 15.0004 20.625ZM15.0004 18.125C16.7263 18.125 18.1254 16.7259 18.1254 15C18.1254 13.2741 16.7263 11.875 15.0004 11.875C13.2745 11.875 11.8753 13.2741 11.8753 15C11.8753 16.7259 13.2745 18.125 15.0004 18.125Z" fill="#878787"/>
                    </svg>
                </span>
            </div>
            </div>

            {{-- <div>
              <div class="flex items-center justify-between">
                <label for="password_confirmation" class="block text-sm font-normal leading-6 text-black-5600">Ulangi
                  kata
                  Sandi</label>
              </div>
              <div>
                <input id="password_confirmation" name="password_confirmation" type="password" required
                  class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset border-neutral-600 ring-neutral-600 placeholder:text-neutral-400 focus:ring-1 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-3 font-normal placeholder:text-md transition-all duration-300 ease-in-out"
                  placeholder="Masukan sandi anda">
              </div>
              <div class="flex justify-end py-5">
                <a href="#" class="font-normal text-black hover:text-indigo-500 text-sm hover:underline">Lupa kata
                  sandi?</a>
              </div>
            </div> --}}

            <div>
              <button type="submit"
                class="custom-button flex w-full justify-center rounded-[8px] bg-gradient-to-r from-[#39ADF8] to-[#84CCFA] px-5 py-4 text-lg font-semibold leading-6 text-white shadow-sm hover:bg-indigo-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 hover:bg-gradient-to-l">Daftar</button>
            </div>
            <div>

              <button type="submit"
                class="custom-button flex w-full justify-center rounded-[8px] bg-black-500 px-5 py-4 text-lg font-semibold leading-6 text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 hover:bg-gradient-to-l"><span class="px-4"> <img src="{{ asset('images/Google svg.png') }}" alt="" class="w-[22px] h-[22px]"></span>Masuk dengan Google</button>
            </div>
          </form>

          <p class="mt-10 text-center text-sm text-black font-normal">
            Sudah punya akun?
            <a href="{{ route('login') }}" class="font-semibold leading-6 underline">Masuk</a>
          </p>
        </div>
      </div>
    </div>

    {{-- row 2 --}}
    <div class="h-full md:w-8/12 bg-black hidden justify-center md:flex items-center p-6">
      <div class="bg-center relative h-full w-full ">
        <img src="{{ asset ('images/image.png') }}" alt="background image" class="w-full h-[976px]">
        {{-- <img src="./images/char1.webp" alt="character"
          class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"> --}}
          {{-- <iframe class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[52rem] h-[44rem]" src="https://lottie.host/embed/885c852e-a278-439d-8a75-7a842bb3b987/udR1icHknq.json"></iframe> --}}
      </div>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="{{ asset('js/signup.js') }}"></script>
</body>

</html>
