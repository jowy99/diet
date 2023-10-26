@props([
    'type' => 'button',
    'class' => '',
    'variant' => 'primary',
])

<button type="{{ $type === 'button' ? 'button' : $type }}"
        class="capitalize rounded-full px-6 py-3 shadow-md border border-1 border-orange-500
        {{ $variant === 'secondary' ? 'hover:bg-orange-500' : 'bg-orange-500 text-white hover:bg-orange-400' }}
        {{ $class }}">
    {{ trim($slot) }}
</button>
