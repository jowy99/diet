@props([
'active' => false,
'icon' => null,
'route' => null,
'title' => '',
])
<?php
/** @var \Illuminate\Support\HtmlString $slot */
$hasSlot = $slot->isNotEmpty();
?>
<div
    @if($hasSlot)
    @if($active)
    x-data="{ isOpen: true }"
    @else
    x-data="{ isOpen: false }"
    @endif
    x-on:sidebar-link-toggle.window="$el != $event.detail ? isOpen = false : void(0)"
    x-ref="root"
    @endif
>
    <a
        @if($hasSlot)
        href="javascript:void(0)"
        x-on:click="isOpen = !isOpen; $dispatch('sidebar-link-toggle', $refs.root)"
        x-bind:class="{ 'sidebar-dropdown-open': isOpen }"
        @else
        href="{{ $route }}"
        @endif
        class="@if($hasSlot) sidebar-dropdown @endif @if($active) bg-green-600 sidebar-dropdown-open text-white @else text-gray-300 hover:bg-green-700 hover:text-white transition duration-100 ease-in-out @endif relative group flex items-center px-6 py-3 text-sm leading-normal"
        {{ $attributes }}
    >
        <div class="flex items-center">
            @if($icon !== null)
            <x-icon style="height: 18px" class="w-auto mr-4" :name='"feathericon-$icon"'/>
            @endif
            <div class="@if(!$active) text-gray-300 group-hover:text-white @endif">
                {{ $title }}
            </div>
        </div>
    </a>
    @if($hasSlot)
    <div
        x-ref="content"
        class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden bg-green-900"
        role="menu"
        x-bind:aria-expanded="isOpen ? 'true' : 'false'"
        x-bind:style="isOpen ? `max-height: ${$refs.content.scrollHeight}px` : ''"
        @if($active)
        style="max-height: 100%"
        @endif
    >
        {{ $slot }}
    </div>
    @endif
</div>
