@extends('crm.layout')

@section('title', 'Dashboard')

@section('content')
    <div class="flex flex-col space-y-8">
        <a href="{{ route('crm.dishes.index') }}" class="text-lg text-white bg-orange-500 px-2 py-3 shadow-md rounded-full w-full text-center">
            Dishes
        </a>
        <a href="{{ route('crm.ingredient-tags.index') }}" class="text-lg text-white bg-orange-500 px-2 py-3 shadow-md rounded-full w-full text-center">
            Ingredients tag
        </a>
        <a href="{{ route('crm.time-tags.index') }}" class="text-lg text-white bg-orange-500 px-2 py-3 shadow-md rounded-full w-full text-center">
            Times tag
        </a>
    </div>
@endsection
