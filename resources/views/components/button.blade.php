@props([
    'type' => 'button',
    'class' => '',
    'variant' => 'primary',
])

<button type="{{ $type === 'button' ? 'button' : $type }}"
        class="capitalize rounded-full px-6 py-3 shadow-md border border-1 border-salmon-500
        {{ $variant === 'secondary' ? 'hover:bg-salmon-500' : 'bg-salmon-500 text-white hover:bg-salmon-400' }}
        {{ $class }}">
    {{ trim($slot) }}
</button>
