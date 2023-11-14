@props([
    'name',
    'label' => null,
    'on' => false,
])

@php
$id = \Illuminate\Support\Str::uuid()->toString();
@endphp

<div class="flex items-center" x-data="{ on: {{ $on ? 'true' : 'false' }} }">
    <button
        type="button"
        class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-offset-2 bg-gray-200"
        role="switch"
        x-ref="switch"
        :class="{ 'bg-green-600': on, 'bg-gray-200': !(on) }"
        aria-labelledby="{{ $id }}"
        :aria-checked="on.toString()"
        @click="on = !on"
    >
    <span
        :class="{ 'translate-x-5': on, 'translate-x-0': !(on) }"
        class="pointer-events-none relative inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
    >
      <span
          :class="{ 'opacity-0 duration-100 ease-out': on, 'opacity-100 duration-200 ease-in': !(on) }"
          class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity"
          aria-hidden="true"
      >
        <svg class="h-3 w-3 text-gray-400" fill="none" viewBox="0 0 12 12">
          <path
              d="M4 8l2-2m0 0l2-2M6 6L4 4m2 2l2 2"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
          />
        </svg>
      </span>
      <span
          :class="{ 'opacity-100 duration-200 ease-in': on, 'opacity-0 duration-100 ease-out': !(on) }"
          class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity"
          aria-hidden="true"
      >
        <svg class="h-3 w-3 text-green-600" fill="currentColor" viewBox="0 0 12 12">
          <path d="M3.707 5.293a1 1 0 00-1.414 1.414l1.414-1.414zM5 8l-.707.707a1 1 0 001.414 0L5 8zm4.707-3.293a1 1 0 00-1.414-1.414l1.414 1.414zm-7.414 2l2 2 1.414-1.414-2-2-1.414 1.414zm3.414 2l4-4-1.414-1.414-4 4 1.414 1.414z"/>
        </svg>
      </span>
    </span>
    </button>
    <span
        class="ml-3 text-sm cursor-pointer"
        id="{{ $id }}"
        @click="$refs.switch.click(); $refs.switch.focus()"
    >
    {{ $label ?? $slot }}
  </span>
    <input type="hidden" name="{{ $name }}" x-bind:value="on ? 1 : 0">
</div>

