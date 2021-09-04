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
        <x-icons.close class="w-3 mr-3 h-auto text-black" />
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
    <ul class="mt-3" x-data="{ selected:null }">
        <li class="relative border-b border-gray-100">
            <button x-on:click="selected !== 1 ? selected = 1 : selected = null" type="button" class="w-full px-4 py-2 flex
        justify-between items-center text-sm bg-gray-50">
                <span>Help Information</span>
                <span>
                    <x-icons.plus class="w-3 h-auto text-black" /></span>
            </button>
            <div class="relative overflow-hidden max-h-0 transition-all duration-150" style="" x-ref="container1"
                x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                <ul class="px-4 py-2 text-sm">
                    <li><a href="#" class="inline-block mb-4 hover:text-indigo-400">Help</a></li>
                    <li><a href="#" class="inline-block mb-4 hover:text-indigo-400">Track Order</a></li>
                    <li><a href="#" class="inline-block hover:text-indigo-400">Delivery & returns</a></li>
                </ul>
            </div>
        </li>
        <li class="relative border-b border-gray-100">
            <button x-on:click="selected !== 2 ? selected = 2 : selected = null" type="button" class="w-full px-4 py-2 flex
        justify-between items-center text-sm bg-gray-50">
                <span>About KUPPA</span>
                <span>
                    <x-icons.plus class="w-3 h-auto text-black" /></span>
            </button>
            <div class="relative overflow-hidden max-h-0 transition-all duration-150" style="" x-ref="container2"
                x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                <ul class="px-4 py-2 text-sm">
                    <li><a href="#" class="inline-block mb-4 hover:text-indigo-400">About us</a></li>
                    <li><a href="#" class="inline-block mb-4 hover:text-indigo-400">Careers at KUPPA</a></li>
                    <li><a href="#" class="inline-block hover:text-indigo-400">Corporate responsibility</a></li>
                </ul>
            </div>
        </li>
        <li class="relative border-b border-gray-100">
            <button x-on:click="selected !== 3 ? selected = 3 : selected = null" type="button" class="w-full px-4 py-2 flex
        justify-between items-center text-sm bg-gray-50">
                <span>Contact and support</span>
                <span>
                    <x-icons.plus class="w-3 h-auto text-black" /></span>
            </button>
            <div class="relative overflow-hidden max-h-0 transition-all duration-150" style="" x-ref="container3"
                x-bind:style="selected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                <ul class="px-4 py-2 text-sm">
                    <li><a href="#" class="inline-block mb-4 hover:text-indigo-400">About us</a></li>
                    <li><a href="#" class="inline-block mb-4  hover:text-indigo-400">Careers at KUPPA</a></li>
                    <li><a href="#" class="inline-block  hover:text-indigo-400">Corporate responsibility</a>
                    </li>
                    <div class="mt-4 text-indigo-500">support@kuppa.com</div>
                </ul>
            </div>
        </li>
    </ul>
</aside>
