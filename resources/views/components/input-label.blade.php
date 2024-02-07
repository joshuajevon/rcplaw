@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-lg text-black-700 dark:text-white']) }}>
    {{ $value ?? $slot }}
</label>
