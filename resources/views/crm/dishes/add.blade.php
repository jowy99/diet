@extends('crm.layout')

@section('content')
<x-crm.container>
    <h2 class="text-2xl capitalize text-beige-500">new dish</h2>
    <div>
        <form method="POST" action="{{ route('crm.dishes.store') }}">
            @csrf
            <div class="mt-4 space-y-6">
                <x-form.input
                    id="name"
                    name="name"
                    type="text"
                    required
                    label="Name"
                ></x-form.input>
            </div>
            <div class="mt-4">
                <x-button type="submit" class="w-full">{{ __('Save')  }}</x-button>
            </div>
        </form>
    </div>
</x-crm.container>
@endsection
