@props(['active'])

@php
$classes = ($active ?? false)
    ? 'text-teal-500 border-b-2 border-teal-500  group p-2 text-sm leading-6 font-semibold'
    : 'text-dark_gray-200 group p-2 text-sm leading-6 font-semibold';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
