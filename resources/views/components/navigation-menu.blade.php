<nav class="fixed w-full inset-x-0 z-10 bg-white border-b border-gray-300">
    <div class="px-4 md:px-6" x-show="!searchBar">
        <div class="relative flex justify-center items-center h-14 md:h-16 lg:mx-auto lg:max-w-6xl">
            <div class="absolute left-0 flex items-center">
                <!-- Hamburger -->
                <button x-on:click="isSidebarOpen = true" class="mr-3 md:hidden">
                    <x-ik-hamburger class="w-7 h-7 text-black" />
                </button>
                <div class="hidden flex-shrink-0 md:flex items-center">
                    <a href="/" class="text-black text-3xl md:text-4xl font-bold uppercase">
                        {{ config('app.name') }}
                    </a>
                </div>
            </div>
            <div class="px-4 w-full max-w-sm hidden md:block">
                <form action="#" method="POST" class="flex items-center h-full bg-gray-100 rounded-sm px-2">
                    <x-ik-search class="w-5 text-black" />
                    <input type="text" class="text-sm bg-gray-100 border-none focus:ring-0 w-full" placeholder="Search for products">
                </form>
            </div>
            <div class="flex-shrink-0 md:hidden flex items-center">
                <a href="/" class="text-black text-3xl md:text-4xl font-bold uppercase">
                    {{ config('app.name') }}
                </a>
            </div>
            <div class="flex items-center absolute right-0">
                <a href="#" class="relative flex items-center justify-center ml-6">
                    <span>
                        <x-ik-bag class="w-7 h-7 text-black" />
                    </span>
                    {{-- <span
                        class="absolute -top-2 -right-3 w-6 h-6 text-white flex items-center justify-center bg-indigo-500 text-xs rounded-full">0</span> --}}
                </a>
                @include('accounts')
            </div>
        </div>
    </div>
    <div class="px-4 w-full mb-4 md:hidden">
        <form action="#" method="POST" class="flex items-center h-full bg-gray-100 rounded-sm px-2">
            <x-ik-search class="w-5 text-black" />
            <input type="text" class="text-sm bg-gray-100 border-none focus:ring-0 w-full" placeholder="Search for products">
        </form>
    </div>
</nav>
