<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Es kelapa Airy</title>
        <link rel="shortcut icon" type="x-icon" href="gambar/icons8-coconut-48.png">

        <!-- Fonts -->
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>


    <body>
        <header class="bg-blue-300">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-1">
                <a href="/" class="flex title-font font-medium items-center text-gray-900 md:mb-0">
                    <div><img src="/gambar/icons8-coconut-48.svg"></div>
                    <div class="ml-1 text-xl">Es kelapa Airy</div>
                </a>
                <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400 flex flex-wrap items-center text-base justify-center">
                    <a class="mr-5 hover:text-gray-900" href="/about">tentang kami</a>
                    <a class="mr-5 hover:text-gray-900" href="/product">produk</a>
                    <a class="mr-5 hover:text-gray-900" href="/contact-us">kontak</a>
                    <a class="mr-5 hover:text-gray-900" href="/testimony">Testimoni</a>
                </nav>
                <div>
                    @auth 
                        @include('layouts.navigation')
                    @else
                        @if (Route::has('login'))
                            <a class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0 mr-4"
                                href="{{ route('login') }}">
                                Log in
                            </a>
                        @endif
                        @if (Route::has('register'))
                            <a class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0 mr-4"
                                href="{{ route('register') }}">
                                Register
                            </a>
                        @endif
                    @endauth
                </div>
            </div>
        </header>
    </body>


    <main class="bg-gray-100">
    {{$slot}}
    </main>


    <footer class="fixed bottom-0 left-0 z-20 w-full bg-blue-200 text-gray-600 body-font">
    <div class="container flex items-center justify-between sm:flex-row flex-col py-2">
        <div class="flex items-center">
            <img src="/gambar/icons8-coconut-48.svg" class="pl-20">
            <div>
                <p class="title-font font-medium text-gray-900 text-xl">Es kelapa Airy</p>
                <p class="text-gray-500 text-sm">penyegar hidup dan berkhasiat</p>
            </div>
        </div>
        <div class="flex items-center">
            <nav>
                <a class="mr-5 hover:text-gray-900" href="/about">tentang kami</a>
                <a class="mr-5 hover:text-gray-900" href="/product">produk</a>
                <a class="mr-5 hover:text-gray-900" href="/contact-us">kontak</a>
                <a class="mr-5 hover:text-gray-900" href="/testimony">Testimoni</a>
            </nav>
        </div>
    </div>
</footer>
</html>
