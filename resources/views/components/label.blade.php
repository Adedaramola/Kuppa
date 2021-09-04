@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-semibold text-sm uppercase tracking-widest text-gray-500']) }}>
    {{ $value ?? $slot }}
</label>
