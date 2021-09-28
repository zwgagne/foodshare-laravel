<button {{ $attributes->merge(['type' => 'submit', 'class' => 'authBtn']) }}>
    {{ $slot }}
</button>
