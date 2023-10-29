@extends('crm.layout')

@section('title', 'Dashboard')

@section('content')
    <div class="flex space-x-8">
        <a href="{{ route('crm.ingredient-tags.index') }}" class="text-lg text-white">
            Ingredients tag
        </a>
    </div>
@endsection
