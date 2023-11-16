<!DOCTYPE html>
<html class="h-full bg-gray-200" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{--@formatter:off--}}
        <title>@hasSection('title')@yield('title') -@endIf Admin</title>
        {{--@formatter:on--}}

        <!-- Fonts -->
        <link rel="preconnect" href="https://rsms.me/">
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="dark:bg-zinc-800">
        <div class="min-h-screen sm:flex">
            @include('crm.partials.navbar')
            <main class="w-full lg:w-10/12 min-h-screen flex flex-col relative dark:text-white z-0">
                @yield('content')
            </main>
        </div>
    </body>
</html>
