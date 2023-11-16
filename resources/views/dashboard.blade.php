@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    @if (Route::has('auth.login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
            <a href="{{ url('/dishes') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
            <a href="{{ route('auth.login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

            @if (Route::has('auth.register'))
            <a href="{{ route('auth.register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
            @endauth
        </div>
    @endif
    <div class="flex flex-col space-y-8">
        <a href="{{ route('web.dishes.index') }}" class="text-lg text-white bg-orange-500 px-2 py-3 shadow-md rounded-full w-full text-center">
            Dishes
        </a>
        <a href="{{ route('web.ingredient-tags.index') }}" class="text-lg text-white bg-orange-500 px-2 py-3 shadow-md rounded-full w-full text-center">
            Ingredients tag
        </a>
    </div>
@endsection
