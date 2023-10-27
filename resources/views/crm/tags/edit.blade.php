@extends('crm.layout')

@section('content')
<div class="bg-white rounded-lg p-4 dark:bg-gray-800">
    <h2 class="text-2xl capitalize">new tag</h2>
    <div>
        <form action="">
            <div class="mt-4 gap-12">
                <x-form.input
                    id="name"
                    name="name"
                    type="text"
                    required
                    label="Name"
                ></x-form.input>
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="potato" type="checkbox" name="type[potato]" class="rounded dark:bg-gray-800 border-gray-300 dark:border-gray-700 text-orange-600 shadow-sm focus:ring-orange-500 dark:focus:ring-orange-600 dark:focus:ring-offset-gray-800">
                        <label for="potato" class="ml-2 text-xl text-orange-600 dark:text-orange-400">{{ __('Potato') }}</label>
                    </label>
                </div>
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="fish" type="checkbox" name="type[fish]" class="rounded dark:bg-gray-800 border-gray-300 dark:border-gray-700 text-orange-600 shadow-sm focus:ring-orange-500 dark:focus:ring-orange-600 dark:focus:ring-offset-gray-800">
                        <label for="fish" class="ml-2 text-xl text-orange-600 dark:text-orange-400">{{ __('Fish') }}</label>
                    </label>
                </div>
            </div>
            <div class="mt-4">
                <x-button type="submit" class="w-full">{{ __('Save')  }}</x-button>
            </div>
        </form>
    </div>
</div>
@endsection
