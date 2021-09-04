@props(['image','imageAlt'])
<article class="mb-4">
    <a href="#">
        <div class="relative">
            <img class="w-full h-auto object-cover" src="{{ $image }}" alt="{{$imageAlt}}">
            @livewire('add-to-wishlist')
        </div>
        <div class="mt-2">
            <div class="overflow-hidden overflow-ellipsis leading-4 max-h-8 mb-2 text-sm">{{ $name }}</div>
            <div class="font-bold text-sm text-gray-500">{{ $price }}</div>
        </div>
    </a>
</article>
