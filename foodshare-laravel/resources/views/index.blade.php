<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>FoodShare</title>
</head>

<body>
    <header>
        <h1>FoodShare</h1>
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
        <h2>Accueil</h2>
        <section>
            <article>
                @foreach ($posts as $post)
                <div>
                    <img src="asset('img/{{$post->image}}')" alt="repas">
                </div>
                <div>
                    <p><b>Description: </b>{{ $post->description }}</p>
                    <span>Temérature</span>

                </div>
                @endforeach

            </article>
        </section>
    </main>
</body>

</html>