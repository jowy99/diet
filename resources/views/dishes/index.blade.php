@extends('layouts.app')

@section('title', 'Dishes')

@section('content')
<div>
    <h2 class="p-8 text-4xl text-deep_purple-500 font-semibold text-center">Dishes</h2>

    <!-- SearchBar -->
    <div></div>

    <div>
        <!-- Tags -->
        <div></div>

        <!-- DishesList -->
        <div>
            <div class="grid grid-cols-2 gap-4 mx-4">
                @foreach($dishes as $dish)
                    <div class="w-full h-full space-y-4 bg-sand-500 border-1 border-dark_gray-500 shadow-md rounded-md ">
                        <div class="relative">
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
                        <div class="p-4">
                            <p class="text-deep_purple-500 font-semibold">{{ $dish->name }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
@endsection
