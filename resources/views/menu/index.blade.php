@extends('layouts.app')

@section('title', 'Menu')

@section('content')
<div class="p-4 bg-light_beige-500 rounded-md shadow-md m-4">
    <form action="{{ route('web.menu.create') }}" method="post">
        <div class="space-y-4 p-4">
            <h2 class="text-dark_gray-500">How many meals do you want?</h2>

            <div class="flex items-center justify-center w-full space-x-4">
                <x-form.input
                    id="meals"
                    name="meals"
                    type="number"
                    required
                    label="Meals"
                >
                </x-form.input>
                <x-button type="submit">Send</x-button>
            </div>
        </div>
    </form>
</div>
@endsection
