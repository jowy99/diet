@extends('crm.layout')

@section('content')
<x-crm.container>
    <div class="flex flex-col flex-wrap space-y-4 md:space-y-0 md:space-x-4 md:flex-row md:items-center">
    </div>
    <div class="relative">
        <table class="min-w-full divide-y divide-gray-200">
            <thead>
            <tr>
                <th scope="col" class="pr-3 pl-4 text-left text-sm font-semibold text-beige-900 py-3.5 sm:pl-0">
                    Nombre
                </th>
                <th scope="col" class="px-3 text-right text-sm font-semibold text-beige-900 py-3.5">
                    Propiedades con la etiqueta
                </th>
                <th scope="col" class="relative pr-4 pl-3 text-right py-3.5 sm:pr-0">
                    <span class="sr-only">Actions</span>
                </th>
            </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
            <?php
            /** @var \App\Models\Tag $tag */ ?>
            @forelse($tags as $tag)
            <tr>
                <td class="whitespace-nowrap py-4 pr-3 pl-4 text-sm font-medium text-beige-900 sm:pl-0">
            <span class="inline-flex items-center rounded px-2 py-1 text-sm font-medium {{ $tag->type->color() }} shadow-md">
              {{ $tag->name }}
            </span>
                </td>
                <td class="whitespace-nowrap px-3 py-4 text-right text-sm text-beige-500">
                    {{ $tag->properties_count }}
                </td>
                <td class="flex py-4">
                    <a
                        class="flex flex-1 justify-center"
                        href="{{ route('crm.tags.edit', $tag->id) }}"
                    >
                        <x-icon class="h-6 w-6 text-orange-600" name="heroicon-o-pencil-square"/>
                    </a>
                </td>
            </tr>
            @empty
            <tr class="flex justify-center px-4 py-12 text-gray-600 sm:px-6">
                @lang('website.search.no_results')
            </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</x-crm.container>
@endsection
