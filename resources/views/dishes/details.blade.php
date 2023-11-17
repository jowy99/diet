@extends('layouts.app')

@section('title', $dish->name.' - details')

@section('content')
<div class="min-h-screen bg-sand-500">
    <div class="">
        <img src="{{ $dish->getFirstMedia('dishes')->getUrl('web') }}"
             class="w-full h-full"
             alt="">
    </div>
    <div class="absolute top-4 left-4 bg-sand-500 p-2 rounded-xl shadow-md sm:static">
        <a href="{{ route('web.dishes.index') }}">
            <x-heroicon-o-arrow-left class="w-6 h-6 text-white" />
        </a>
    </div>

    <div class="w-full h-full">
        <div class="p-4">
            <p class="p-2 absolute rounded-xl bg-salmon-500 left-4">
                {{ $dish->time }}
            </p>
        </div>

        <div class="pt-4 relative flex items-center justify-start">
            <h2 class="p-4 font-semibold text-4xl">{{ $dish->name }}</h2>
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
