<aside
    class="z-20 hidden md:block w-64 md:w-32 lg:w-64 flex-shrink-0 overflow-auto bg-white min-h-full border-r border-gray-100">
    <div class="py-4 h-full">
        <ul class="mt-6 pl-6 md:pl-0 lg:pl-6">
            <li class="relative px-5 py-1">
                {{-- <span class="absolute inset-y-0 right-0 w-1 bg-black" aria-hidden="true"></span> --}}
                <a href="#"
                    class="inline-flex md:justify-center lg:justify-start items-center w-full text-sm">
                    <x-ik-home class="w-5 h-auto text-black" />
                    <span class="ml-4 md:hidden lg:inline-flex">Dashboard</span>
                </a>
            </li>
            <li class="relative px-5 py-1 mt-4">
                {{-- <span class="absolute inset-y-0 right-0 w-1 bg-black" aria-hidden="true"></span> --}}
                <a href="#"
                    class="inline-flex md:justify-center lg:justify-start items-center w-full text-sm">
                    <x-ik-cart class="w-5 h-auto text-black" />
                    <span class="ml-4 md:hidden lg:inline-flex">Orders</span>
                </a>
                <span
                    class="absolute -top-2 lg:top-0 right-7 lg:right-16 w-6 h-6 text-white flex items-center justify-center bg-indigo-500 text-xs rounded-full">0</span>
            </li>
            <li class="relative px-5 py-1 mt-4">
                {{-- <span class="absolute inset-y-0 right-0 w-1 bg-black" aria-hidden="true"></span> --}}
                <a href="{{ route('admin.product') }}"
                    class="inline-flex md:justify-center lg:justify-start items-center w-full text-sm">
                    <x-ik-restaurant class="w-5 h-auto text-black" />
                    <span class="ml-4 md:hidden lg:inline-flex">Products</span>
                </a>
            </li>
            <li class="relative px-5 py-1 mt-4">
                {{-- <span class="absolute inset-y-0 right-0 w-1 bg-black" aria-hidden="true"></span> --}}
                <a href="#"
                    class="inline-flex md:justify-center lg:justify-start items-center w-full text-sm">
                    <x-ik-hourglass class="w-5 h-auto text-black" />
                    <span class="ml-4 md:hidden lg:inline-flex">Coupons</span>
                </a>
            </li>
            <li class="relative px-5 py-1 mt-4">
                {{-- <span class="absolute inset-y-0 right-0 w-1 bg-black" aria-hidden="true"></span> --}}
                <a href="#"
                    class="inline-flex md:justify-center lg:justify-start items-center w-full text-sm">
                    <x-ik-dolar class="w-5 h-auto text-black" />
                    <span class="ml-4 md:hidden lg:inline-flex">Payment     Settings</span>
                </a>
            </li>
            <li class="relative px-5 py-1 mt-4">
                {{-- <span class="absolute inset-y-0 right-0 w-1 bg-black" aria-hidden="true"></span> --}}
                <a href="#"
                    class="inline-flex md:justify-center lg:justify-start items-center w-full text-sm">
                    <x-ik-controls class="w-5 h-auto text-black" />
                    <span class="ml-4 md:hidden lg:inline-flex">Store Config</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
