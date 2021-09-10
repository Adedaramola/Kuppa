<x-app-layout>
    <x-slot name="title"></x-slot>
    <section class="w-full">
        <div>
            <section class="relative">
                <img src="/img/art.jpeg" class="w-full h-auto object-cover" alt="">
                <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-20">
                    <a href="#" class="pb-1 border-b border-white text-white font-medium text-lg">Discover more</a>
                </div>
            </section>
            <div class="py-8">
                <div class="px-4">
                    <h3 class="uppercase text-xs pb-1 border-b border-gray-500 inline-block font-medium tracking-widest mb-5">Our fave finds</h3>
                </div>
                <div
                    class="pl-4 whitespace-nowrap min-w-full grid grid-flow-col gap-6 overflow-x-scroll overflow-hidden scroll-display">
                    <x-product-card class="" image="/img/pillow.jpeg" imageAlt="shirt">
                        <x-slot name="name">{{ __('Diesel xShirt in tally') }}</x-slot>
                        <x-slot name="price">{{ __('300.34') }}</x-slot>
                    </x-product-card>
                    <x-product-card class="" image="/img/art.jpeg" imageAlt="shirt">
                        <x-slot name="name">{{ __('Diesel xShirt in tally') }}</x-slot>
                        <x-slot name="price">{{ __('300.34') }}</x-slot>
                    </x-product-card>
                    <x-product-card class="" image="/img/cab.jpeg" imageAlt="shirt">
                        <x-slot name="name">{{ __('Diesel xShirt in tally') }}</x-slot>
                        <x-slot name="price">{{ __('300.34') }}</x-slot>
                    </x-product-card>
                    <x-product-card class="" image="/img/23434708-1-white.jpeg" imageAlt="shirt">
                        <x-slot name="name">{{ __('Diesel xShirt in tally') }}</x-slot>
                        <x-slot name="price">{{ __('300.34') }}</x-slot>
                    </x-product-card>
                    <x-product-card class="mr-4" image="/img/23434708-1-white.jpeg" imageAlt="shirt">
                        <x-slot name="name">{{ __('Diesel xShirt in tally') }}</x-slot>
                        <x-slot name="price">{{ __('300.34') }}</x-slot>
                    </x-product-card>
                </div>
            </div>
            <div class="py-8">
                <div class="px-4">
                    <h3 class="uppercase text-xs pb-1 border-b border-gray-500 inline-block font-medium tracking-widest mb-5">Tested and trusted</h3>
                    <div>Products and service you can trust - Just ask our customers.</div>
                </div>
                <div class="mt-5 pl-4 whitespace-nowrap min-w-full grid grid-flow-col gap-6 overflow-x-scroll overflow-hidden scroll-display">
                    <div class="flex flex-col">
                        <p>Erichette</p>
                        <p>Kuppa was the only place i could find exactly what i needed at a reasonable price. I love it!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
