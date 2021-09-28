@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="authSessionInfo">
            {{ __('Whoops! Something went wrong.') }}
        </div>

        <ul class="authSessionInfo">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
