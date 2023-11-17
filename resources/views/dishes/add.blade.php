@extends('layouts.app')

@section('title', 'Add dish')

@section('content')
<div class="min-h-screen bg-sand-100">
    <div class="w-full h-full px-4">
        <div class="absolute top-4 left-4 bg-sand-500 p-2 rounded-xl shadow-md sm:static">
            <a href="{{ route('web.dishes.index') }}">
                <x-heroicon-o-arrow-left class="w-6 h-6 text-white" />
            </a>
        </div>
        <div class="pt-16 relative flex items-center justify-start">
            <h2 class="p-2 font-semibold text-4xl">Dish</h2>
        </div>
        <form method="post" action="{{ route('web.dishes.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="space-y-8 p-2">
                <div class="space-y-6">
                    <h2 class="text-xl">Name</h2>
                    <x-form.input
                        id="name"
                        name="name"
                        type="text"
                        required
                        label="Name"
                    ></x-form.input>
                </div>

                <div class="space-y-6">
                    <h2 class="text-xl">Image</h2>
                    <input
                        id="image"
                        name="image"
                        type="file"
                        required
                        label="Image"
                        accept=".jpg, .png, .jpeg"
                    />
                </div>

                <div class="space-y-6">
                    <h2 class="text-xl">Time</h2>
                    <div class="flex flex-col gap-y-6 gap-x-4">
                        <select name="time" id="time" class="p-2 border rounded text-dark_gray-500">
                            <option value="Short">15-20 minutos</option>
                            <option value="Mid">30 minutos</option>
                            <option value="Mid_long">1 hora</option>
                            <option value="Long">Más de 1 hora</option>
                        </select>
                    </div>
                </div>


                <div class="space-y-6">
                    <h2 class="text-xl">Tags</h2>
                    <div class="flex flex-col gap-y-6 gap-x-4">
                        @foreach($Ingstags as $tag)
                        <x-form.input-toggle
                            name="IngTag[{{ $tag->id }}]"
                        >
                          <span class="inline-flex items-center rounded px-2 py-1 text-sm font-medium {{ $tag->type->color() }} shadow-md">
                            {{ $tag->name }}
                          </span>
                        </x-form.input-toggle>
                        @endforeach
                    </div>
                </div>


                <div>
                    <x-button type="submit" class="w-full">{{ __('Save')  }}</x-button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
