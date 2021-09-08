<div x-show="isSidebarOpen" x-transition:enter="transition ease-in-out duration-150"
    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0" class="fixed inset-0 z-10 bg-black bg-opacity-50" style="display: none"></div>
<aside x-show="isSidebarOpen" x-transition:enter="transition ease-in-out duration-150"
    x-transition:enter-start="transform -translate-x-20" x-transition:leave="transition ease-in-out duration-150"
    x-transition:leave-end="transform -translate-x-20"
    class="z-20 h-full fixed inset-y-0 left-0 w-72 overflow-y-auto bg-white flex-shrink-0 flex flex-col"
    style="display: none">
    <button x-on:click="isSidebarOpen = false"
        class="fixed inset-x-0 flex items-center w-72 p-4 border-b border-gray-300">
        <x-ik-close class="w-7 h-7 text-black" />
        <span class="uppercase text-xs tracking-widest text-gray-600">Close</span>
    </button>
    <ul class="flex-1 px-4 mt-16">
        <li><a href="#" class="uppercase text-sm tracking-widest">Home</a></li>
        <li><a href="#" class="uppercase text-sm tracking-widest">Wishlist (0)</a></li>
        <li><a href="#" class="uppercase text-sm tracking-widest">All products</a></li>
    </ul>
    <div>
        <div class="grid grid-cols-2 divide-x text-center bg-gray-50 text-sm uppercase tracking-widest">
            <a href="{{route('login')}}" class="py-3 px-4">Sign in</a>
            <a href="{{route('register')}}" class="py-3 px-4">Join</a>
        </div>
    </div>
</aside>
