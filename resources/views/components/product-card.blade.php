@props(['image','imageAlt'])
<a href="#" {{ $attributes->merge(['class'=>'h-full']) }}>
    <div>
        <img class="w-full h-auto object-cover" src="{{ $image }}" alt="{{$imageAlt}}">
    </div>
    <div class="flex flex-col mt-2">
        <div class="mb-2 overflow-ellipsis leading-5 max-h-10 overflow-hidden" style="">
            {{ $name }}
        </div>
        <span class="font-bold text-sm tracking-wider text-black">
            &#8358; {{ $price }}
        </span>
    </div>
</a>
