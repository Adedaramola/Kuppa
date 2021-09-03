<nav x-data="{searchBar:false}" class="fixed w-full inset-x-0 z-10 bg-white border-b border-gray-300">
    <div class="px-4 md:px-6" x-show="!searchBar">
        <div class="flex justify-between items-center h-12 md:h-16 lg:mx-auto lg:max-w-6xl">
            <div class="flex items-center">
                <!-- Hamburger -->
                <button x-on:click="isSidebarOpen = true" class="mr-3 md:hidden">
                    <x-icons.menu class="text-black w-6 h-auto" />
                </button>
                <div class="flex-shrink-0 flex items-center">
                    <a href="#" class="text-black text-3xl md:text-4xl tracking-tighter font-bold">
                        kuppa
                    </a>
                </div>
            </div>
            <div class="flex items-center">
                <button type="button" x-on:click="searchBar=true">
                    <x-icons.search class="w-6 text-black" />
                </button>
                <a href="#" class="relative flex items-center justify-center ml-6">
                    <span>
                        <x-icons.shopping-basket class="w-6 h-auto text-black" /></span>
                    <span
                        class="absolute -top-2 -right-3 w-6 h-6 text-white flex items-center justify-center bg-indigo-500 text-xs rounded-full">0</span>
                </a>
                @include('accounts')
            </div>
        </div>
    </div>
    <div x-show="searchBar" class="px-4 h-12 md:h-16 lg:mx-auto lg:max-w-6xl">
        <form action="#" method="POST" class="flex items-center h-full">
            <button type="button" x-on:click="searchBar=false">
                <x-icons.close class="w-4 text-black" />
            </button>
            <input type="text" class="text-sm border-none focus:ring-0 w-full" placeholder="Search an item" autofocus>
        </form>
    </div>
</nav>
