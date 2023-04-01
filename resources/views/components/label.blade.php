@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-extrabold text-sm text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>
