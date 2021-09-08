<header class="z-10 py-4 mb-8 bg-white shadow-sm">
    <nav class="container flex items-center justify-between w-full h-full mx-auto px-4">
        <button class="p-1 mr-5 -ml-1 focus:outline-none lg:hidden" aria-label="Menu">
            <x-icons.menu class="w-6 h-auto text-black" />
        </button>
        <ul class="relative flex items-center flex-shrink-0 space-x-6">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="w-10 h-10 rounded-full flex items-center justify-center border border-black">
                        <x-icons.user class="w-5 h-auto text-black" />
                    </button>
                </x-slot>
                <x-slot name="content">
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Account') }}
                    </div>
                    <div class="border-t border-gray-100"></div>
                    <x-dropdown-link href="#">
                        {{ __('Store Config') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                        {{ __('Change password') }}
                    </x-dropdown-link>
                    <div class="border-t border-gray-100"></div>
                    <form method="POST" action="#">
                        @csrf

                        <x-dropdown-link href="#" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </ul>
    </nav>
</header>
