<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- SEO & Other Tools -->
        <link rel="preconnect" href="https://fonts.gstatic.com">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @livewireStyles
        @trixassets

        <!-- Scripts -->
        <script type="module" src="{{ mix('js/app.js') }}"></script>

        <!-- FontAwasome Icons -->
        <script src="https://kit.fontawesome.com/3e940c6fa5.js" crossorigin="anonymous"></script>
    </head>
    <body class="pt-20">
        <x-sections.header />

        {{ $slot }}
       
        <x-sections.footer />
        @livewireScripts
    </body>
</html>
