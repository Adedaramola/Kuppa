<x-app-layout>
    <x-slot name="title"></x-slot>
    <section class="w-full">
        <div class="px-4 md:px-6 pt-6">
            <h3 class="text-center text-xs uppercase tracking-wider text-gray-700 mb-5">Showing featured products</h3>
            <section
                class="grid grid-cols-2 sm:mx-auto sm:max-w-md md:max-w-full md:grid-cols-3 lg:grid-cols-4 gap-3 md:gap-5 lg:mx-auto lg:max-w-6xl">
                <article class="mb-4">
                    <a href="#">
                        <div class="relative">
                            <img class="w-full h-auto object-cover" src="/img/23434708-1-white.jpeg" alt="shirt">
                            <form action="#" method="POST"
                                class="absolute bottom-3 right-3 z-10 bg-white flex items-center justify-center rounded-full w-10 h-10">
                                <button type="submit"><x-icons.heart class="w-5" /></button>
                            </form>
                        </div>
                        <div class="mt-2">
                            <div class="overflow-hidden overflow-ellipsis leading-4 max-h-8 mb-2 text-sm">Diesel xPride
                                t-shirt in white</div>
                            <div class="font-bold text-sm text-gray-500">$450.99</div>
                        </div>
                    </a>
                </article>
                <article class="relative mb-4">
                    <a href="#">
                        <div class="relative">
                            <img src="/img/23608808-1-pink.jpeg" alt="#">
                            <form action="#" method="POST" class="bg-white flex items-center justify-center rounded-full absolute bottom-3 right-3 w-10 h-10">
                                <x-icons.heart class="w-5" />
                            </form>
                        </div>
                        <div class="mt-2">
                            <div class="overflow-hidden overflow-ellipsis leading-4 max-h-8 mb-2 text-sm">Nike Choose
                                Sport oversized heavyweight t-shirt</div>
                            <div class="font-bold text-sm text-gray-500">$150.99</div>
                        </div>
                    </a>
                    {{--  --}}
                </article>
                <article class="relative mb-4">
                    <a href="#">
                        <img src="/img/23608796-1-green.jpeg" alt="#">
                        <div class="mt-2">
                            <div class="overflow-hidden overflow-ellipsis leading-4 max-h-8 mb-2 text-sm">Nike Premium
                                Essential oversized heavyweight jkvlweevvuhliv jovnwv</div>
                            <div class="font-bold text-sm text-gray-500">$150.99</div>
                        </div>
                    </a>
                    {{-- <div class="bg-white flex items-center justify-center rounded-full absolute bottom-10 right-3 w-8 h-8">
                        <x-icons.heart class="w-4" />
                    </div> --}}
                </article>
            </section>
            <div class="text-center mt-4 mb-8">
                <a href="#" class="uppercase text-xs tracking-widest border border-gray-500 text-black px-7 py-3">Load
                    more</a>
            </div>
        </div>
    </section>
</x-app-layout>
