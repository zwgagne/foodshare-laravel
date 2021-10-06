<header>
    <a href="/" class="logo">FoodShare</a>
    <div>
        @if (Route::has('login'))
        @auth
        @include('layouts.navigation')
        @else
        <a class="linkNav right" href="{{ route('login') }}" class="">Log in</a>

        @if (Route::has('register'))
        <a class="linkNav right" href="{{ route('register') }}">Register</a>
        @endif
        @endauth
        @endif
    </div>
</header>
<main>
    <div class="authFormPosition">
        <div class="bgAuthForm">
            {{ $slot }}
        </div>
    </div>
</main>