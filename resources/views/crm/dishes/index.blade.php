@extends('crm.layout')

@section('content')
<x-crm.container>
    <div class="flex flex-col w-full">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead>
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-beige-500 uppercase">Name</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-beige-500 uppercase">Description</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-beige-500 uppercase">Notes</th>
                            <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-beige-500 uppercase">Action</th>
                        </tr>
                        </thead>
                        @forelse($dishes as $dish)
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-ocher-500">{{ $dish->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-ocher-500">{{ $dish->description }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-ocher-500">{{ $dish->notes }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a class="text-red-500 hover:text-red-700" href="#">Delete</a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap font-semibold text-wine-50" colspan="4">
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
</x-crm.container>
@endsection
