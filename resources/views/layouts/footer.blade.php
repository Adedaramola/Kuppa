<footer>
    <div></div>
    <div class="bg-gray-100 hidden md:block">
        <div class="w-full mx-auto lg:max-w-6xl px-5 py-10">
            <div class="grid md:grid-cols-3 gap-5">
                <ul class="text-xs">
                    <h5 class="uppercase text-sm font-semibold tracking-widest text-gray-500 mb-3">Help and information
                    </h5>
                    <li><a href="#" class="inline-block mb-4 hover:text-indigo-400">Help</a></li>
                    <li><a href="#" class="inline-block mb-4 hover:text-indigo-400">Track Order</a></li>
                    <li><a href="#" class="inline-block mb-4 hover:text-indigo-400">Delivery & returns</a></li>
                </ul>
                <ul class="text-xs">
                    <h5 class="uppercase text-sm font-semibold tracking-widest text-gray-500 mb-3">About KUPPA</h5>
                    <li><a href="#" class="inline-block mb-4 hover:text-indigo-400">About us</a></li>
                    <li><a href="#" class="inline-block mb-4 hover:text-indigo-400">Careers at KUPPA</a></li>
                    <li><a href="#" class="inline-block mb-4 hover:text-indigo-400">Corporate responsibility</a></li>
                </ul>
                <ul class="text-xs">
                    <h5 class="uppercase text-sm font-semibold tracking-widest text-gray-500 mb-3">Contact and support
                    </h5>
                    <li><a href="#" class="inline-block mb-4 hover:text-indigo-400">About us</a></li>
                    <li><a href="#" class="inline-block mb-4  hover:text-indigo-400">Careers at KUPPA</a></li>
                    <li><a href="#" class="inline-block mb-4  hover:text-indigo-400">Corporate responsibility</a>
                    </li>
                    <div class="mt-4 text-indigo-500">support@kuppa.com</div>
                </ul>
            </div>
        </div>
    </div>
    <div class="md:hidden">
        <ul class="mt-3" x-data="{ selected:null }">
            <li class="relative border-b border-gray-100">
                <button x-on:click="selected !== 1 ? selected = 1 : selected = null" type="button" class="w-full px-4 py-2 flex
            justify-between items-center text-sm bg-gray-50">
                    <span>Help Information</span>
                    <span>
                        <x-ik-chevron-down class="w-7 h-7 text-black" />
                    </span>
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
                        <x-ik-chevron-down class="w-7 h-7 text-black" />
                    </span>
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
                        <x-ik-chevron-down class="w-7 h-7 text-black" />
                    </span>
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
    </div>
    <div class="bg-gray-200">
        <section class="flex justify-between items-center px-5 py-4 text-xs mx-auto lg:max-w-6xl">
            <div class="uppercase">&copy; 2021 KUPPA</div>
            <div>Privacy & Cookies | Ts&Cs</div>
        </section>
    </div>
</footer>
