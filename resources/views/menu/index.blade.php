@extends('layouts.app')

@section('title', 'Menu')

@section('content')
<div class="grid grid-cols-1 gap-4 mx-4">
    @forelse($menu->Dishes as $dish)
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
@endsection
