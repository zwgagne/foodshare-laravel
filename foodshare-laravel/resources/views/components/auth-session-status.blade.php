@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'authSessionInfo']) }}>
        {{ $status }}
    </div>
@endif
