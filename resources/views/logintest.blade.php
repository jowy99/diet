@extends('layouts.logins')

@section('main')
<div>

    <!-- Header -->
    <div class="flex items-center justify-center p-8">
        <div class="absolute left-4">
            <a href="{{ route('auth.register') }}">
                <x-heroicon-o-arrow-left class="w-6 h-6 text-orange-300" />
            </a>
        </div>
        <div class="">
            <h2 class="text-xl text-center text-orange-300">Login</h2>
        </div>
    </div>

    <!-- Title -->
    <div>
        <h2 class="text-2xl text-orange-500 px-12">Welcome back!</h2>
    </div>

    <!-- Form -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('auth.login') }}">
        @csrf
        <div class="space-y-12 m-12 flex-col items-center justify-center">
            <div class="flex w-72 flex-col gap-12">
                <div class="relative h-11 w-full min-w-[200px]">
                    <input
                        id="email"
                        class="peer h-full w-full border-none ring-0 bg-transparent pt-4 pb-1.5 outline-none font-sans text-sm font-normal text-orange-700 transition-all focus:ring-0 focus:outline-none"
                        placeholder=" "
                        type="email"
                        name="email"
                        :value="old('email')"
                        required
                        autofocus
                        autocomplete="username"
                    />
                    <label class="after:content[' '] outline-none ring-0 focus:ring-0 pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-orange-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-orange-500 peer-focus:after:scale-x-100 peer-focus:after:border-orange-500">
                        Email
                    </label>
                </div>
                <div class="relative h-11 w-full min-w-[200px]">
                    <input
                        id="password"
                        class="peer h-full w-full border-none ring-0 bg-transparent pt-4 pb-1.5 outline-none font-sans text-sm font-normal text-orange-700 transition-all focus:ring-0 focus:outline-none"
                        placeholder=" "
                        type="password"
                        name="password"
                        required
                        autocomplete="current-password"
                    />
                    <label class="after:content[' '] outline-none ring-0 focus:ring-0 pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-orange-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-orange-500 peer-focus:after:scale-x-100 peer-focus:after:border-orange-500">
                        Password
                    </label>
                </div>
            </div>
            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-800 border-gray-300 dark:border-gray-700 text-orange-600 shadow-sm focus:ring-orange-500 dark:focus:ring-orange-600 dark:focus:ring-offset-gray-800" name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif

                <x-button type="submit" class="w-full">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </div>

    </form>
</div>
@endsection