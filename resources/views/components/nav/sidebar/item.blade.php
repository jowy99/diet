@props([
'route',
'active' => false,
'icon' => null,
])
<a
    href="{{ $route }}"
    class="@if($active) bg-green-600 text-white @else text-gray-300 hover:bg-green-700 hover:text-white transition duration-150 ease-in-out shadow-inner @endif group flex items-center pl-9 pr-6 py-3 text-sm"
    {{ $attributes }}
>
    <div class="flex items-center">
        @if($icon !== null)
        <x-icon style="height: 18px" class="w-auto mr-4" :name='"feathericon-$icon"'/>
        @endif
        <div class="@if(!$active) group-hover:text-white @endif">
            {{ $slot }}
        </div>
    </div>
</a>
