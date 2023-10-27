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
        @vite(['resources/css/app.css', 'resources/js/crm.js'])
        @livewireStyles
    </head>
    <body class="antialiased font-sans bg-gray-200 dark:bg-gray-800">
        <div id="app" class="flex overflow-x-hidden md:overflow-x-auto">
            <div
                class="bg-gray-100 transition-all duration-200 ease-out -ml-64 lg:ml-0 print:hidden dark:bg-gray-800"
                style="min-width: 16rem; max-width: 16rem"
                x-data="Sidebar()"
                x-bind="root"
            >
                @include('crm.partials.sidebar')
            </div>
            <div class="flex flex-col min-h-screen w-full">
                @include('crm.partials.navbar')
                <main
                    class="h-full flex-1 relative overflow-y-auto focus:outline-none"
                    tabindex="0"
                >
                    <div class="py-6 h-full">
                        <div class="h-full relative max-w-7xl mx-auto sm:px-6 md:px-8 space-y-6">
                            @if($errors->any())
                            <div class="rounded-md bg-red-50 p-4">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path
                                                fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z"
                                                clip-rule="evenodd"
                                            />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <h3 class="text-sm font-medium text-red-800">Se han encontrado errores:</h3>
                                        <div class="mt-2 text-sm text-red-700">
                                            <ul role="list" class="list-disc space-y-1 pl-5">
                                                @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @yield('content')
                        </div>
                    </div>
                </main>
            </div>
        </div>
        @livewireScripts
    </body>
</html>
