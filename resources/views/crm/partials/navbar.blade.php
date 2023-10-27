<nav
    class="relative z-10 shrink flex h-16 bg-white border-b shadow dark:bg-gray-800 dark:border-gray-700"
    x-data="{}"
>
    <button
        x-on:click.stop="$dispatch('sidebar-toggle')"
        class="px-4 border-r border-gray-200 text-gray-500 hover:bg-gray-100 focus:outline-none dark:border-gray-700"
    >
        <span class="sr-only">Open sidebar</span>
        <x-icon class="h-6 w-6" name="heroicon-o-bars-3"/>
    </button>
    <div class="flex-1 px-4 flex justify-between">
        <div class="flex-1 flex"></div>
        <div class="ml-4 flex items-center md:ml-6">
            <div class="relative inline-flex">
                <button class="bg-white p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">
                    <span class="sr-only">View notifications</span>
                    <x-icon class="h-6 w-6" name="heroicon-o-bell"/>
                    @if(false)
                    <span class="flex absolute h-2 w-2 top-1 right-1 -mt-1 -mr-1">
              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
              <span class="relative inline-flex rounded-full h-2 w-2 bg-red-500"></span>
            </span>
                    @endif
                </button>
            </div>
            <div
                class="ml-3 relative"
                x-data="{ open: false }"
                x-on:keydown.escape.stop="open = false"
                x-on:click.outside="open = false"
            >
                <div>
                    <button
                        type="button"
                        class="max-w-xs bg-white flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500"
                        id="user-menu"
                        @click="open = !open"
                        aria-haspopup="true"
                        x-bind:aria-expanded="open"
                    >
                        <span class="sr-only">Open user menu</span>
                        <span class="inline-flex items-center justify-center h-8 w-8 rounded-full bg-teal-500">
              <span class="text-sm font-medium leading-none text-white">{{ auth()->user()->name[0] }}</span>
            </span>
                    </button>
                </div>

                <div
                    x-show="open"
                    x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                    role="menu"
                    aria-orientation="vertical"
                    aria-labelledby="user-menu"
                    style="display: none;"
                >
                    <a
                        href="javascript:void(0)"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                        role="menuitem"
                        onclick="document.getElementById('form__logout').submit()"
                    >
                        Cerrar sesión
                    </a>
                </div>
            </div>
        </div>
    </div>
    <form id="form__logout" method="post" action="{{ route('auth.logout') }}">
        @csrf
    </form>
</nav>
