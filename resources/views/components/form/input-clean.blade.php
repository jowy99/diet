@props([
    'id',
    'name',
    'class' => '',
    'type' => '',
    ':value' => '',
    'autofocus' => false,
    'required' => false,
    'autocomplete' => false,
    'label' => '',
])

<div class="relative h-11 w-full min-w-[200px]">
    <input
        id="{{ $id }}"
        name="{{ $name }}"
        class="peer h-full w-full border-none ring-0 bg-transparent pt-4 pb-1.5 outline-none font-sans text-sm font-normal text-orange-700 transition-all focus:ring-0 focus:outline-none"
        type="{{ $type }}"
        placeholder=" "
        :value="old('email')"
        @if($required)required="required"@endif
        @if($autofocus)autofocus="autofocus"@endif
        @if($autocomplete)autocomplete=""@endif
    />
    <label class="after:content[' '] outline-none ring-0 focus:ring-0 pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-orange-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-orange-500 peer-focus:after:scale-x-100 peer-focus:after:border-orange-500">
        {{ $label }}
    </label>
</div>
