@props([
    'name',
    'value' => '',
])

@php
$id = \Illuminate\Support\Str::uuid()->toString();
@endphp

<div>
    <input id="{{ $id }}" name="{{ $name }}" type="radio" value="{{ $value }}" class="sr-only">
    <label for="{{ $id }}">
        {{ $slot }}
    </label>
</div>
