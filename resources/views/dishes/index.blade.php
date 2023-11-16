@extends('layouts.app')

@section('title', 'Dishes')

@section('content')
<div>
    <h2 class="p-8 text-4xl text-deep_purple-500 font-semibold text-center">Dishes</h2>

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
            <div class="grid grid-cols-2 gap-4 mx-4">
                @foreach($dishes as $dish)
                    <div class="w-full h-full space-y-4 bg-sand-500 border-1 border-dark_gray-500 shadow-md rounded-md ">
                        <div class="relative h-10/12 w-full">
                            <div class="absolute z-10 top-1 left-1">
                                @foreach($dish->IngredientsTag as $tag)
                                <span class="inline-flex items-center rounded px-2 py-1 text-sm font-medium {{ $tag->type->color() }} shadow-md">{{ $tag->name }}</span>
                                @endforeach
                            </div>
                            <div class="">
                                <img src="https://images.hola.com/imagenes/cocina/recetas/20220208204252/pizza-pepperoni-mozzarella/1-48-890/pepperoni-pizza-abob-t.jpg"
                                     class="w-full h-full rounded-tr-md rounded-tl-md"
                                     alt="">
                            </div>
                        </div>
                        <div class="p-4 h-1/6 w-full">
                            <p class="text-deep_purple-500 font-semibold">{{ $dish->name }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
@endsection
