@extends('layouts.logins')

@section('title', 'Welcome')

@section('content')
<div class="sm:flex sm:rounded-md sm:bg-light_beige-700">
    <div class="w-1/2 flex items-center justify-center m-8 mx-auto top-12 bg-light_beige-500 shadow-md rounded-full p-8 sm:bg-transparent sm:p-20 sm:rounded-none sm:shadow-none">
        <img src="{{ url('/images/Wok.png') }}" alt="" class="w-full h-full rounded-tl-md rounded-bl-md object-fill">
    </div>

    <div class="flex flex-col items-center justify-center gap-12 mt-24 sm:w-1/2">
        <!-- Title -->
        <div>
            <h2 class="text-2xl text-white-300 text-center font-semibold px-12">Plan your week, eat better: Your menu, your lifestyle!</h2>
        </div>
        <div class="flex flex-col gap-12 items-center justify-center w-9/12">
            <a href="{{ route('auth.login') }}" class="w-full">
                <x-button class="w-full" variant="secondary">log in</x-button>
            </a>
            <a href="{{ route('auth.register') }}" class="w-full">
                <x-button class="w-full">register</x-button>
            </a>
        </div>
    </div>
</div>
@endsection
