@extends('crm.layout')

@section('content')
<x-crm.container class="space-y-12">
      <span class="inline-flex items-center rounded px-2 py-1 text-sm font-medium {{ $tag->type->color() }} shadow-md">
        {{ $tag->name }}
      </span>
    <form method="POST" action="{{ route('crm.tags.update', $tag->id) }}" class="space-y-12">
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
