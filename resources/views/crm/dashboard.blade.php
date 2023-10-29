@extends('crm.layout')

@section('title', 'Dashboard')

@section('content')
    <div class="flex space-x-8">
        <a href="{{ route('crm.ingredient-tags.index') }}" class="text-lg text-white bg-orange-500 px-2 py-3 shadow-md">
            Ingredients tag
        </a>
        <a href="{{ route('crm.time-tags.index') }}" class="text-lg text-white bg-orange-500 px-2 py-3 shadow-md">
            Times tag
        </a>
    </div>
@endsection
