<div class="relative hidden ml-6 md:inline-flex">
    <x-dropdown align="right" width="48">
        <x-slot name="trigger">
            <button type="button" class="focus:outline-none">
                <x-icons.user class="w-6 text-black" />
            </button>
        </x-slot>
        <x-slot name="content">
            @guest
                <div class="flex flex-col items-center text-center px-4 py-3">
                    <a href="#" class="uppercase text-xs tracking-widest px-5 py-2 border border-black w-full">Sign in</a>
                    <a href="#" class="mt-3 uppercase text-xs tracking-widest px-5 py-2 border border-black bg-black text-white w-full">Register</a>
                </div>
            @endguest
        </x-slot>
    </x-dropdown>
</div>
