<div x-show="isSidebarOpen" x-transition:enter="transition ease-in-out duration-150"
    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0" class="fixed inset-0 z-10 bg-black bg-opacity-50"></div>
<aside x-show="isSidebarOpen" x-transition:enter="transition ease-in-out duration-150"
    x-transition:enter-start="transform -translate-x-20" x-transition:leave="transition ease-in-out duration-150"
    x-transition:leave-end="transform -translate-x-20"
    class="z-20 h-full fixed inset-y-0 left-0 w-72 overflow-y-auto bg-white flex-shrink-0">
    <button x-on:click="isSidebarOpen = false" class="flex items-center w-full p-4 border-b border-gray-300">
        <x-icons.close class="w-3 mr-3 h-auto text-black" />
        <span class="uppercase text-xs tracking-widest text-gray-600">Close</span>
    </button>
    @guest
    {{-- <div class="grid grid-cols-2 gap-2 text-center px-4">
        <a href="#" class="bg-black uppercase text-xs tracking-widest text-white px-5 py-3 rounded-3xl">Log in</a>
        <a href="#" class="bg-black uppercase text-xs tracking-widest text-white px-5 py-3 rounded-3xl">Sign up</a>
    </div> --}}
    @endguest
    <ul class="mt-4 px-4">
        <li><a href="#" class="uppercase text-sm tracking-widest">Home</a></li>
        <li><a href="#" class="uppercase text-sm tracking-widest">Wishlist (0)</a></li>
        <li><a href="#" class="uppercase text-sm tracking-widest">All products</a></li>
    </ul>
    <ul class="mt-4 px-4">
        @guest
        <li><a href="#" class="uppercase text-sm tracking-widest">Sign in</a></li>
        <li><a href="#" class="uppercase text-sm tracking-widest">Register</a></li>
        @endguest
        <li><a href="#" class="uppercase text-sm tracking-widest">Sell on kuppa</a></li>
    </ul>
</aside>
