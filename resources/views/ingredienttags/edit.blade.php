@extends('layouts.guest')

@section('content')
<x-crm.container class="space-y-12">
    <div class="flex gap-4">
        <a href="{{ route('crm.ingredient-tags.index') }}">
            <x-heroicon-o-arrow-left class="w-6 h-6 text-orange-300" />
        </a>
        <span class="inline-flex items-center rounded px-2 py-1 text-sm font-medium {{ $tag->type->color() }} shadow-md">
        {{ $tag->name }}
    </span>
    </div>
    <form method="POST" action="{{ route('crm.ingredient-tags.update', $tag->id) }}" class="space-y-12">
        @csrf
        <x-form.input
            id="name"
            name="name"
            value="{{ $tag->name }}"
            required
            label="Name"
        ></x-form.input>
        <x-button type="submit" class="w-full">Save</x-button>
    </form>
</x-crm.container>
@endsection
