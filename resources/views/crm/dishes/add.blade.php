@extends('crm.layout')

@section('content')
<x-crm.container>
    <h2 class="text-2xl capitalize">new tag</h2>
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
                <x-form.textarea
                    id="description"
                    name="description"
                    label="Description"
                ></x-form.textarea>
                <x-form.input
                    id="ingredients"
                    name="ingredients"
                    type="text"
                    required
                    label="Ingredients"
                ></x-form.input>
                <x-form.textarea
                    id="steps"
                    name="steps"
                    label="Steps"
                ></x-form.textarea>
                <x-form.textarea
                    id="notes"
                    name="notes"
                    label="Notes"
                ></x-form.textarea>
            </div>
            <div class="mt-4">
                <x-button type="submit" class="w-full">{{ __('Save')  }}</x-button>
            </div>
        </form>
    </div>
</x-crm.container>
@endsection
