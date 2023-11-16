@extends('layouts.app')

@section('title', $dish->name.' - details')

@section('content')
<div class="min-h-screen h-screen">
    <div class="">
        <img src="https://images.hola.com/imagenes/cocina/recetas/20220208204252/pizza-pepperoni-mozzarella/1-48-890/pepperoni-pizza-abob-t.jpg"
             class="w-full h-full"
             alt="">
    </div>
    <div class="w-full h-full bg-sand-500">
        <div class="relative flex items-center justify-start">
            <h2 class="p-4 font-semibold text-4xl">{{ $dish->name }}</h2>
            <p class="p-2 absolute rounded-xl bg-salmon-500 left-3/4">
                {{ $dish->time }}
            </p>
        </div>
        <div class="px-4">
            @foreach($dish->IngredientsTag as $tag)
            <span class="inline-flex items-center rounded px-2 py-1 text-sm font-medium {{ $tag->type->color() }} shadow-md">{{ $tag->name }}</span>
            @endforeach
        </div>

        <div class="flex items-center justify-center w-full mt-32">
            <a href="{{ route('web.dishes.edit', $dish->id) }}">
                <x-button class="w-full">
                    Edit dish
                </x-button>
            </a>
        </div>
    </div>
</div>
@endsection
