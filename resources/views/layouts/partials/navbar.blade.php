<!-- Responsive -->

<div class="w-full fixed bottom-0 bg-light_beige-500 p-4 z-50 shadow md:hidden">
    <div class="relative grid grid-cols-4 gap-4 place-items-center">
        <x-responsive-nav-link :href="route('web.home')" :active="request()->routeIs('web.home')">
            <x-sui-home-door class="h-6 w-6" />
        </x-responsive-nav-link>
        <x-responsive-nav-link>
            <x-gmdi-restaurant-menu-s class="h-6 w-6" />
        </x-responsive-nav-link>
        <x-responsive-nav-link :href="route('web.dishes.index')" :active="request()->routeIs('web.dishes.*')">
            <x-bx-dish class="h-6 w-6" />
        </x-responsive-nav-link>
        <x-responsive-nav-link :href="route('web.user')" :active="request()->routeIs('web.user')">
            <x-radix-person class="h-6 w-6" />
        </x-responsive-nav-link>
    </div>
</div>
