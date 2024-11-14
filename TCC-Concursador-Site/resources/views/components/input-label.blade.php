@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-lg font-montserrat text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>
