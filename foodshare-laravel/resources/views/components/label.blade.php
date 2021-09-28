@props(['value'])

<label {{ $attributes->merge(['class' => 'authLabel']) }}>
    {{ $value ?? $slot }}
</label>
