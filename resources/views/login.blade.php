@extends('layouts.logins')

@section('main')
<div class="min-h-screen w-full mt-12 space-y-12">
    <div class="flex flex-col items-center justify-center space-y-12 mx-4 lg:flex">
        <img src="https://i.pinimg.com/564x/da/b4/59/dab459576ce6988d79375b4a19d73534.jpg" alt="" class="w-10/12 lg:w-full lg:h-full">
        <div class="space-y-12 lg:w-full lg:h-full">
            <h2 class="text-center text-orange-500 font-semibold text-xl">Plan your week, eat better: Your menu, your lifestyle!</h2>
            <div class="grid grid-cols-2 gap-4">
                <a href="{{ route('auth.register') }}">
                    <x-button>register</x-button>
                </a>
                <a href="{{ route('auth.login') }}">
                    <x-button variant="secondary">log in</x-button>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
