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
            <div>
                <h2>Time expend</h2>
                <div class="grid grid-cols-2 gap-4">
                    <select name="time" id="time">
                        <option value="1">15-20 min</option>
                        <option value="2">30-40 min</option>
                        <option value="3">1h</option>
                        <option value="4">+1h</option>
                    </select>
                </div>
            </div>
            <div>
                <h2>Ingredient</h2>
                <div class="grid grid-cols-2 gap-4">
                    @foreach($Ingstags as $Ingtag)
                        <x-form.input-toggle
                            name="IngTag[{{ $Ingtag->id }}]"
                        >
                          <span class="inline-flex items-center rounded px-2 py-1 text-sm font-medium {{ $Ingtag->type->color() }} shadow-md">
                            {{ $Ingtag->name }}
                          </span>
                        </x-form.input-toggle>
                    @endforeach
                </div>
            </div>
            <div class="mt-4">
                <x-button type="submit" class="w-full">{{ __('Save')  }}</x-button>
            </div>
        </form>
    </div>
</x-crm.container>
@endsection
