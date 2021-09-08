@props(['image','imageAlt'])
<article class="mb-4 h-full">
    <a href="#">
        <div>
            <img class="w-full h-auto object-cover" src="{{ $image }}" alt="{{$imageAlt}}">
        </div>
        <div class="mt-2">
            <div class="overflow-hidden overflow-ellipsis leading-4 max-h-8 mb-2 text-sm">{{ $name }}</div>
            <div class="font-bold text-sm tracking-wider text-black">&#8358;{{ $price }}</div>
        </div>
    </a>
</article>
