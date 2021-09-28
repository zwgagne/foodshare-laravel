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
        <a href="/" class="logo">FoodShare</a>
        <div>
            @if (Route::has('login'))
            @auth
            @include('layouts.navigation')
            @else
            <a class="linkNav" href="{{ route('login') }}">Log in</a>

            @if (Route::has('register'))
            <a class="linkNav" href="{{ route('register') }}">Register</a>
            @endif
            @endauth
            @endif
        </div>
    </header>
    <main>
        <h2>Accueil</h2>
        <section class="showFoodSec">
            @foreach ($posts as $post)
            <article class="foodArticle">
                <div class="card">
                    <div class="sizeImg">
                        <img class="imgHome" src="/storage/img/{{$post->image}}" alt="repas">
                    </div>
                    <div class="foodInfoHome">
                        <h3><b>Publié par: </b> {{$post->user_id}}</h3>
                        <p><b>Description: </b>{{ $post->description }}</p>
                        <span>Temérature: {{$post->meteo}} °C</span>
                        <p><b>Lieu: </b> Québec</p>
                    </div>
                    <div class="btnPositionHomeArt">
                        <button name="" class="btnReserve">
                            <lord-icon src="https://cdn.lordicon.com/mecwbjnp.json" trigger="click" colors="primary:#ffffff,secondary:#ee6352" style="width:50px;height:50px">
                            </lord-icon>
                        </button>
                        <button name="" class="bhtDelete">
                            <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop-on-hover" colors="primary:#ffffff,secondary:#ee6352" style="width:50px;height:50px">
                            </lord-icon>
                        </button>
                    </div>
                </div>
            </article>
            @endforeach
        </section>
        <a href="/FoodDonnation">
            <lord-icon class="testAdd" src="https://cdn.lordicon.com/mecwbjnp.json" trigger="loop-on-hover" colors="primary:#ffffff,secondary:#ee6352" style="width:80px;height:80px">
            </lord-icon>
        </a>
    </main>


    <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
</body>

</html>