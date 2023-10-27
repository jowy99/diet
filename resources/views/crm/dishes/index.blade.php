@extends('crm.layout')

@section('content')
<div class="overflow-hidden bg-white shadow sm:rounded-lg">
    <div class="border-b border-gray-200 bg-white px-4 py-6 md:px-6">
        <div class="flex flex-col w-full">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead>
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Description</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Notes</th>
                                <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Action</th>
                            </tr>
                            </thead>
                            @forelse($dishes as $dish)
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">{{ $dish->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{ $dish->descriptionn }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{ $dish->notes }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a class="text-blue-500 hover:text-blue-700" href="#">Delete</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap font-semibold" colspan="4">
                                    {{ __('Tabla vacía') }}
                                </td>
                            </tr>
                            </tbody>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
