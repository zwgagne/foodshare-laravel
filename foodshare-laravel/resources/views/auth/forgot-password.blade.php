<x-guest-layout>
    <x-auth-card>
        <div class="authForgotTxtInfo">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>
        <!-- Session Status -->
        <x-auth-session-status class="" :status="session('status')" />
        <!-- Validation Errors -->
        <x-auth-validation-errors class="" :errors="$errors" />
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <!-- Email Address -->
            <div class="authForgotEmail">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div>
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>