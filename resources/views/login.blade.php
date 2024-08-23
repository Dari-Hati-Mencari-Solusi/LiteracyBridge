<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Home</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  {{-- tailwind --}}
  @vite('resources/css/app.css')
</head>

<body class="antialiased font-poppins">
  <section class="flex flex-col md:flex-row w-full h-screen min-h-[650px]">
    {{-- row 1 --}}
    <div class="h-full md:w-8/12 md:bg-primary-400 bg-black hidden justify-center md:flex items-center">
      <div class="bg-center relative h-full w-full">
        <img src="./images/bg1.webp" alt="background image" class="w-full h-full">
        <img src="./images/char1.webp" alt="character" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
      </div>
    </div>

    {{-- row 2 --}}
    <div class="w-full md:w-5/12 bg-white">
      <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
          <h2 class="mt-10 text-3xl font-bold leading-9 tracking-tight text-gray-900 text-start">Masuk</h2>
          <p class="text-neutral-600 font-normal font-md">Masuk ke akun anda</p>
        </div>

        <div class="mt-3 sm:mx-auto sm:w-full sm:max-w-sm">
          <form class="space-y-5" action="#" method="POST">
            <div>
              <label for="email" class="block text-sm font-normal leading-6 text-black-300">Email</label>
              <div class="mt-2">
                <input id="email" name="email" type="email" autocomplete="new-username" required class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset border-neutral-600 ring-neutral-600 placeholder:text-neutral-400 focus:ring-1 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-3 font-normal placeholder:text-md transition-all duration-300 ease-in-out" placeholder="Contoh@gmail.com">
              </div>
            </div>

            <div>
              <div class="flex items-center justify-between">
                <label for="password" class="block text-sm font-normal leading-6 text-black-300">Kata Sandi</label>
              </div>
              <div>
                <input id="password" name="password" type="password" autocomplete="new-password" required class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset border-neutral-600 ring-neutral-600 placeholder:text-neutral-400 focus:ring-1 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-3 transition-all duration-300 ease-in-out" placeholder="Masukan sandi anda ">
              </div>
              <div class="flex justify-between py-3">
                <div class="flex items-center gap-x-3 mb-4">
                  <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                  <label for="default-checkbox" class="ms-2 text-sm text-neutral-900">Ingat saya</label>
                </div>
                <a href="#" class="text-neutral-900 hover:text-indigo-500 text-sm hover:underline">Lupa kata sandi?</a>
              </div>
            </div>

            <div>
              <button type="submit" class="custom-button flex w-full justify-center rounded-full bg-gradient-to-r from-[#39ADF8] to-[#84CCFA] px-3 py-4 text-lg font-semibold leading-6 text-white shadow-sm hover:bg-indigo-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 hover:bg-gradient-to-l">Masuk</button>
            </div>
          </form>

          <p class="mt-10 text-center text-sm text-black font-normal">
            Baru disini?
            <a href="#" class="font-normal leading-6 text-primary-500 hover:text-indigo-500">Buat akun anda</a>
          </p>
        </div>
      </div>
    </div>
  </section>


</body>

</html>
