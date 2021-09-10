<div x-data="{ show: @entangle($attributes->wire('model')) }" x-show="show"
    class="fixed inset-0 overflow-y-auto px-4 py-6 md:py-24 sm:px-0 z-40" style="display: none">
    <div x-show="show" class="fixed inset-0 transform">
        <div class="absolute inset-0 bg-black opacity-50"></div>
    </div>

    <div x-show="show" class="bg-white overflow-hidden transform sm:w-full sm:mx-auto max-w-2xl px-6 pb-6">
        <div class="flex justify-between items-center py-3 border-b border-gray-100">
            <h3 class="uppercase tracking-widest text-gray-600">{{ $title }}</h3>
            <button class="focus:outline-none" x-on:click="show = false">
                <x-ik-close class="w-6 text-black" />
            </button>
        </div>
        {{ $slot }}
    </div>
</div>
