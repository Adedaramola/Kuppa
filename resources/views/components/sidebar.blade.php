<div x-show="isSidebarOpen" x-transition:enter="transition ease-in-out duration-150"
    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0" class="fixed inset-0 z-20 bg-black bg-opacity-50" style="display: none"></div>
<aside x-show="isSidebarOpen" x-transition:enter="transition ease-in-out duration-150"
    x-transition:enter-start="transform -translate-x-20" x-transition:leave="transition ease-in-out duration-150"
    x-transition:leave-end="transform -translate-x-20"
    class="z-20 h-full fixed inset-y-0 left-0 w-72 overflow-y-auto bg-white flex-shrink-0 flex flex-col"
    style="display: none">
    <div class="flex items-center justify-between px-4 pt-5">
        <a href="#" class="uppercase text-xs tracking-widest pb-1 border-b border-black">collections</a>
        <button x-on:click="isSidebarOpen = false" class="">
            <x-ik-close class="w-7 h-7 text-black" />
        </button>
    </div>
    <ul class="flex-1 px-4 mt-4">

    </ul>
    <div>
        <div class="grid grid-cols-2 divide-x text-center bg-gray-50 text-sm uppercase tracking-widest">
            <a href="{{route('login')}}" class="py-3 px-4">Sign in</a>
            <a href="{{route('register')}}" class="py-3 px-4">Join</a>
        </div>
    </div>
</aside>
