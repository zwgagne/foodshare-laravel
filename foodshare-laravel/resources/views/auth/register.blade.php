<x-guest-layout>
    <x-auth-card>
        <x-auth-validation-errors :errors="$errors" />
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />
                <x-input id="name" type="text" name="name" :value="old('name')" required autofocus />
            </div>
            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />
                <x-input id="email" type="email" name="email" :value="old('email')" required />
            </div>
            <div>
                <x-label for="address" :value="__('Address')" />
                <x-input id="address" type="text" name="address" :value="old('address')" required autofocus />
            </div>
            <div>
                <x-label for="city" :value="__('Ville')" />
                <x-input id="city" type="text" name="city" :value="old('city')" required autofocus />
            </div>
            <!-- Password -->
            <div>
                <x-label for="password" :value="__('Password')" />
                <x-input id="password"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>
            <!-- Confirm Password -->
            <div>
                <x-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-input id="password_confirmation"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end ">
                <a class="authAForgotPassword" href="{{ route('login') }}">
                    {{ __('Déjà enregistrer?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Enregistrer') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
