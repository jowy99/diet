@extends('layouts.app')

@section('title', 'Dishes')

@section('content')
<div>

    <div class="relative flex items-center justify-center">
        <h2 class="p-8 text-4xl text-deep_purple-500 font-semibold text-center mx-auto">Dishes</h2>
        <a href="{{ route('web.dishes.add') }}" class="p-2 absolute rounded-xl bg-salmon-500 left-3/4">
            <x-tabler-plus class="h-4 w-4 text-white" />
        </a>
    </div>

    <!-- SearchBar -->
    <div class="mx-4 mb-8 space-y-2">
        <h2 class="text-2xl text-ocher-500 font-semibold">Looking for some dish?</h2>
        <form action="" method="get" role="search">
            <div class="relative z-0 flex flex-1 items-center justify-center sm:absolute sm:inset-0">
                <div class="w-full sm:max-w-xs">
                    <label for="search" class="sr-only">Search</label>
                    <div class="relative">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                            <x-bi-search class="w-5 h-5 text-dark_gray-500" />
                        </div>
                        <input id="search" name="search" class="block w-full rounded-md border-0 bg-white py-3 pl-10 pr-3 text-dark_gray-900 ring-1 ring-inset ring-dark_gray-300 placeholder:text-dark_gray-400 focus:ring-2 focus:ring-inset focus:ring-teal-500 sm:text-sm sm:leading-6" placeholder="Search" type="search">
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div>
        <!-- Tags -->
        <div></div>

        <!-- DishesList -->
        <div>
            <div class="grid grid-cols-1 gap-4 mx-4">
                @forelse($dishes as $dish)
                <a href="{{ route('web.dishes.details', $dish->id) }}">
                    <div class="w-full h-full space-y-4 bg-sand-500 border-1 border-dark_gray-500 shadow-md rounded-md ">
                        <div class="relative h-10/12 w-full">
                            <div class="absolute z-10 top-1 left-1 space-y-1">
                                @foreach($dish->IngredientsTag as $tag)
                                <span class="inline-flex items-center rounded px-2 py-1 text-sm font-medium {{ $tag->type->color() }} shadow-md">{{ $tag->name }}</span>
                                @endforeach
                            </div>
                            <div class="">
                                <img src="{{ $dish->getFirstMedia('dishes')->getUrl('web') }}"
                                     class="w-full h-full rounded-tr-md rounded-tl-md"
                                     alt="">
                            </div>
                        </div>
                        <div class="p-4 h-1/6 w-full">
                            <p class="text-deep_purple-500 font-semibold">{{ $dish->name }}</p>
                        </div>
                    </div>
                </a>
                @empty
                    <p>There are no dishes yet.</p>
                @endforelse
            </div>
        </div>
    </div>

</div>
@endsection
