@extends('layouts.logins')

@section('main')
<div class="sm:flex sm:w-1/2 sm:items-center sm:justify-center shadow-md rounded-md bg-light_beige-500 mx-4 mt-8 sm:mt-0">

    <div class="hidden sm:w-1/2 sm:flex">
        <img src="{{ url('/images/Lata.png') }}" alt="" class="w-full h-full rounded-tl-md rounded-bl-md object-fill">
    </div>

    <div class="sm:w-1/2">
        <!-- Header -->
        <div class="flex items-center justify-center p-8 sm:grid sm:grid-cols-[10%_90%]">
            <div class="absolute left-8 sm:static">
                <a href="{{ route('web.home') }}">
                    <x-heroicon-o-arrow-left class="w-6 h-6 text-salmon-300 hover:text-salmon-100" />
                </a>
            </div>
            <div class="">
                <h2 class="text-xl text-center text-salmon-300">Register</h2>
            </div>
        </div>

        <!-- Title -->
        <div>
            <h2 class="text-2xl text-salmon-500 px-12">Welcome!</h2>
        </div>

        <!-- Form -->
        <form method="POST" action="{{ route('auth.register') }}">
            @csrf
            <div class="space-y-12 m-12 flex-col items-center justify-center">
                <div class="flex w-full flex-col gap-12">
                    <div class="relative h-11 w-full min-w-[200px]">
                        <input
                            id="name"
                            name="name"
                            class="peer h-full w-full border-none ring-0 bg-transparent pt-4 pb-1.5 outline-none font-sans text-sm font-normal text-salmon-700 transition-all focus:ring-0 focus:outline-none"
                            placeholder=" "
                            type="text"
                            :value="old('name')" required autofocus autocomplete="name"
                        />
                        <label class="after:content[' '] outline-none ring-0 focus:ring-0 pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-dark_gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-salmon-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-dark_gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-salmon-500 peer-focus:after:scale-x-100 peer-focus:after:border-salmon-500">
                            Name
                        </label>
                    </div>
                    <div class="relative h-11 w-full min-w-[200px]">
                        <input
                            id="email"
                            name="email"
                            class="peer h-full w-full border-none ring-0 bg-transparent pt-4 pb-1.5 outline-none font-sans text-sm font-normal text-salmon-700 transition-all focus:ring-0 focus:outline-none"
                            placeholder=" "
                            type="email"
                            :value="old('email')" required autocomplete="username"
                        />
                        <label class="after:content[' '] outline-none ring-0 focus:ring-0 pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-dark_gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-salmon-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-dark_gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-salmon-500 peer-focus:after:scale-x-100 peer-focus:after:border-salmon-500">
                            Email
                        </label>
                    </div>
                    <div class="relative h-11 w-full min-w-[200px]">
                        <input
                            id="password"
                            name="password"
                            class="peer h-full w-full border-none ring-0 bg-transparent pt-4 pb-1.5 outline-none font-sans text-sm font-normal text-salmon-700 transition-all focus:ring-0 focus:outline-none"
                            placeholder=" "
                            type="password"
                            required
                            autocomplete="new-password"
                        />
                        <label class="after:content[' '] outline-none ring-0 focus:ring-0 pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-dark_gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-salmon-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-dark_gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-salmon-500 peer-focus:after:scale-x-100 peer-focus:after:border-salmon-500">
                            Password
                        </label>
                    </div>
                    <div class="relative h-11 w-full min-w-[200px]">
                        <input
                            id="password_confirmation"
                            name="password_confirmation"
                            class="peer h-full w-full border-none ring-0 bg-transparent pt-4 pb-1.5 outline-none font-sans text-sm font-normal text-salmon-700 transition-all focus:ring-0 focus:outline-none"
                            placeholder=" "
                            type="password"
                            required
                            autocomplete="new-password"
                        />
                        <label class="after:content[' '] outline-none ring-0 focus:ring-0 pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-dark_gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-salmon-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-dark_gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-salmon-500 peer-focus:after:scale-x-100 peer-focus:after:border-salmon-500">
                            Confirm password
                        </label>
                    </div>
                </div>
                <div class="flex z-20 absolute top-0 left-0 sm:hidden">
                    <img src="{{ url('/images/Lata.png') }}" alt="" class="w-full h-full opacity-10 select-none">
                </div>
                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-dark_gray-600 dark:text-dark_gray-400 hover:text-dark_gray-900 dark:hover:text-dark_gray-90000 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-dark_gray-800" href="{{ route('auth.login') }}">
                        {{ __('Already registered?') }}
                    </a>
                </div>
                <div>
                    <x-button type="submit" class="w-full">
                        {{ __('Register') }}
                    </x-button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
