@props(['active'])

@php
$classes = ($active ?? false)
    ? 'text-teal-500 transition-all group rounded-md p-2 text-sm leading-6 font-bold'
    : 'text-dark_gray-200 group rounded-md p-2 text-sm leading-6 font-semibold';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
