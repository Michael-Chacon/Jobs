@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-gray-500 text-sm uppercase mb-2']) }}>
    {{ $value ?? $slot }}
</label>
