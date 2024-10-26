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

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
    <div class="mt-1">
        <img src="{{ asset('imagenes/remesa-express.png') }}" style="width: 130px; height: auto;" class="ml-auto mr-auto"  alt="Logo Remesa Express"/>

        <div class="min-h-screen">
            @livewire('navigation-menu')

            <!-- Page Content -->
            <div class="font-sans text-gray-900 dark:text-gray-100 antialiased">
                {{ $slot }}
            </div>
        </div>
    </div>
        @livewireScripts
    </body>
</html>
