<x-app-layout>
    <x-slot name="title"></x-slot>
    <section class="w-full mx-auto sm:max-w-4xl">
        <div class="sm:flex sm:items-start sm:px-4 sm:pt-8">
            <img class="w-full sm:w-1/2 h-auto sm:mr-6" src="/img/23434708-1-white.jpeg" alt="">
            <div class="px-4 py-5">
                <div class="flex items-start justify-between mb-3">
                    <div class="text-lg mr-6 overflow-hidden overflow-ellipsis leading-4 max-h-8">Diesel xPride t-shirt in white</div>
                    <button>
                        <x-icons.share class="w-5 text-black"/>
                    </button>
                </div>
                <div class="font-bold text-lg">$230.00</div>
                <section class="flex items-center justify-between my-4">
                    <form action="#" class="w-full">
                        <button
                            class="w-full uppercase text-xs font-bold tracking-widest bg-green-600 text-white px-7 py-4">Add
                            to cart</button>
                    </form>
                    <form action="#" class="ml-12">
                        <button class="bg-gray-300 flex items-center justify-center w-10 h-10 rounded-full">
                            <x-icons.heart class="w-5 h-auto text-black"></x-icons.heart>
                        </button>
                    </form>
                </section>
                <section class="py-4 px-3 border border-gray-300"></section>
            </div>
        </div>
        <section class="py-5 px-4 text-sm text-gray-600">
            <div>
                <h3 class="uppercase font-bold tracking-widest mb-1">Product code</h3>
                <div>2003451</div>
            </div>
            <div class="mt-4">
                <h3 class="uppercase font-bold tracking-widest text-gray-600 mb-1">Product details</h3>
                <div>
                    <div>Sold by <a href="#" class="underline">Xhosa Stores</a></div>
                </div>
            </div>
        </section>
        <div class="px-4 py-8 border-t-4 border-gray-100">
            <h3 class="uppercase font-bold text-sm tracking-widest text-gray-600 mb-3">You might also like</h3>
        </div>
    </section>
</x-app-layout>
