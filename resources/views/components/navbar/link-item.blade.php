@props([
'href' => '#',
'active' => false,
])
<a
    class="border-y-2 border-t-transparent transition-[border] @if($active) border-b-green-600 @else border-b-transparent hover:border-b-green-600 @endif  ease-in-out text-green-950"
    href="{{ $href }}"
>
    {{ $slot }}
</a>
