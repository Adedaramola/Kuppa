<x-app-layout>
    <x-slot name="title"></x-slot>
    <section class="w-full">
        <div class="px-4 md:px-6 pt-6">
            <h3 class="text-center text-xs uppercase tracking-wider text-gray-700 mb-5">Showing featured products</h3>
            <section
                class="grid grid-cols-2 sm:mx-auto sm:max-w-md md:max-w-full md:grid-cols-3 lg:grid-cols-4 gap-3 md:gap-5 lg:mx-auto lg:max-w-6xl">
                <x-product-card image="/img/23434708-1-white.jpeg" imageAlt="shirt">
                    <x-slot name="name">{{ __('Diesel xShirt in tally') }}</x-slot>
                    <x-slot name="price">{{ __('$300.34') }}</x-slot>
                </x-product-card>
                <x-product-card image="/img/23608808-1-pink.jpeg" imageAlt="shirt">
                    <x-slot name="name">{{ __('Nike Choose
                        Sport oversized heavyweight t-shirt') }}</x-slot>
                    <x-slot name="price">{{ __('$150.99') }}</x-slot>
                </x-product-card>
                <x-product-card image="/img/23608796-1-green.jpeg" imageAlt="shirt">
                    <x-slot name="name">{{ __('Nike Premium
                        Essential oversized heavyweight') }}</x-slot>
                    <x-slot name="price">{{ __('$450.99') }}</x-slot>
                </x-product-card>
            </section>
            <div class="text-center mt-4 mb-8">
                <x-button-link href="#">{{ __('Load more') }}</x-button-link>
            </div>
        </div>
    </section>
</x-app-layout>
