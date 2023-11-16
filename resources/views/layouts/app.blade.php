<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{--@formatter:off--}}
        <title>@hasSection('title')@yield('title')@endIf</title>
        {{--@formatter:on--}}


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=acme:400|albert-sans:100,200,300,400,500,600" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Work+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap"
        >


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased dark:bg-zinc-800">
        <main class="min-h-screen flex flex-col relative justify-center items-center dark:text-white z-0">
            @yield('content')
        </main>
    </body>
</html>
