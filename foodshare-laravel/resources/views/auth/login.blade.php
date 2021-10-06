<x-guest-layout>
    <x-auth-card>
        <!-- Session Status -->
        <x-auth-session-status :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />
                <x-input id="email" type="email" name="email" :value="old('email')" required autofocus />
            </div>
            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />
                <x-input id="password" type="password" name="password" required autocomplete="current-password" />
            </div>
            <!-- Remember Me -->
            <div>
                <label for="remember_me">
                    <input class="authInputCheck" id="remember_me" type="checkbox" name="remember">
                    <span class="authInputCheckTxt">{{ __('Se souvenir de moi') }}</span>
                </label>
            </div>
            <div>
                @if (Route::has('password.request'))
                <a class="authAForgotPassword" href="{{ route('password.request') }}">
                    {{ __('Oublié votre mot de passe?') }}
                </a>
                @endif
            </div>
            <center>
                <x-button>
                    {{ __('Connexion') }}
                </x-button>
            </center>

        </form>
    </x-auth-card>
</x-guest-layout>