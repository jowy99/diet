<!-- Responsive -->

<div class="sm:hidden fixed top-0 right-0 sm:left-0 p-6 text-right z-10 md:w-32 flex md:grow md:flex-col md:gap-y-5 md:bg-light_beige-600 md:rounded-xl md:px-6 md:py-6 md:fixed md:top-1/2 md:right-8 md:transform md:-translate-y-1/2">
    <div class="flex items-center ml-6">
        <x-dropdown align="right">
            <x-slot name="trigger">
                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-light_beige-500 hover:text-light_beige-400 dark:hover:text-light_beige-300 focus:outline-none transition ease-in-out duration-150">
                    <x-radix-hamburger-menu class="w-6 h-6" />
                </button>
            </x-slot>

            <x-slot name="content">
                <div class="max-h-80 relative overflow-y-auto scroll-smooth">
                    <div class="flex flex-col">
                        <x-nav-link :href="route('crm.dishes.index')">
                            <x-bx-dish class="h-6 w-6" />
                            Dishes
                        </x-nav-link>
                        <ul role="list" class="mt-2 mx-6 space-y-1">
                            <li>
                                <x-nav-link :href="route('crm.dishes.add')">
                                    <x-tabler-plus class="h-6 w-6" />
                                    Add
                                </x-nav-link>
                            </li>
                        </ul>
                    </div>
                </div>

                @if (Route::has('auth.login'))
                    <div class="max-h-80 relative overflow-y-auto scroll-smooth">
                        @auth
                        <x-nav-link :href="route('web.profile.edit')">
                            {{ __('Profile') }}
                        </x-nav-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('web.logout') }}">
                            @csrf

                            <x-nav-link :href="route('web.logout')"
                                             onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-nav-link>
                        </form>
                        @endauth
                    </div>
                @endif
            </x-slot>
        </x-dropdown>
    </div>
</div>
