@props(['active','href'])

@php
$classes = ($active ?? false)
            ? 'text-center pb-5 border-b-2 border-indigo-500 text-gray-600'
            : 'text-center pb-5 border-b-2 border-gray-200 text-gray-400';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    <a href="{{ $href }}" class="uppercase text-sm font-semibold tracking-widest">{{ $slot }}</a>
</div>
