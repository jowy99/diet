@extends('layouts.guest')

@section('main')
<div class="min-h-screen w-full mt-12 space-y-12">
    <div class="flex flex-col items-center justify-center space-y-12">
        <img src="https://i.pinimg.com/564x/da/b4/59/dab459576ce6988d79375b4a19d73534.jpg" alt="" class="w-10/12">
        <h2 class="text-center text-orange-500 font-semibold text-xl">Plan your week, eat better: Your menu, your lifestyle!</h2>
        <div class="grid grid-cols-2 gap-4">
            <a href="">
                <x-button>register</x-button>
            </a>
            <a href="">
                <x-button variant="secondary">log in</x-button>
            </a>
        </div>
    </div>
</div>
@endsection
