<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins:wght@300&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="font-sans antialiased font-body">

        <div class="min-h-screen bg-gray-100 dark:bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <footer class="bg-gray-900 h-96 font-body">
            <div class="container mx-auto">
                <div class="flex justify-between  text-white">

            <div class="mt-5 flex flex-col gap-5 text-2xl ">
                <h3>Contact us</h3>
                <p>mail: firekicks@mail.com</p>
                <p>numbers: 0201312391203</p>
                <p>09123091230</p>

            </div>
            <div class="mt-5 flex flex-col gap-5 text-2xl">
                <h3>About us</h3>
                <p>you can find as at: </p>
                <p>london street</p>
                <p>Lorem ipsum dolor.</p>
                <p>Lorem ipsum dolor.</p>
            </div>
            <div class="mt-5 flex flex-col gap-5 text-2xl mr-5 items-center">
                <h3 class="ml-7">Socials</h3>
                <div class="flex  w-10 mr-10">
                <img src="/images/instagram.png" alt="">
                <img  src="/images/twiter.png" alt="">
                <img  src="/images/tiktok.png" alt="" >

                </div>
            </div>
                </div>

            </div>
        </footer>
    @livewireScripts
    </body>
</html>
