<x-admin-layout>
    <livewire:add-product-modal />
    <div class="container mx-auto px-4">
        <button x-data="{}" class="bg-white uppercase text-xs tracking-widest border border-gray-500 text-black px-7 py-3 font-semibold focus:outline-none"
            x-on:click="window.livewire.emitTo('add-product-modal','show')">Add new product</button>
    </div>
</x-admin-layout>
