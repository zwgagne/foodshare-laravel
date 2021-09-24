<nav>
    <!-- Primary Navigation Menu -->
    <div>
        <div>
            <div>
                <!-- Navigation Links -->
                <div>
                    <x-nav-link class="linkNav" href="{{ url('/') }}" :active="request()->routeIs('/')">{{__('Accueil')}}</x-nav-link>
                    <x-nav-link class="linkNav" href="{{ url('/dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link class="linkNav" href="{{ url('/profil') }}" :active="request()->routeIs('/profil')">{{__('Profil')}}</x-nav-link>
                </div>
            </div>
        </div>
    </div>
    <div class="LogNav">
        <div class="LogNavPosition"><b>Nom:</b> {{Auth::user()->name}}</div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-responsive-nav-link class="btnLogout" :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                {{ __('Déconnexion') }}
            </x-responsive-nav-link>
        </form>
    </div>
</nav>