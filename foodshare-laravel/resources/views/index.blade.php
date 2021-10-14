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
            <a class="linkNav" href="{{ route('login') }}">Se connecter</a>

            @if (Route::has('register'))
            <a class="linkNav" href="{{ route('register') }}">S'enregistrer</a>
            @endif
            @endauth
            @endif
        </div>
    </header>
    <main>
        <h1>Accueil</h1>
        <x-auth-session-status :status="session('status')" />
        <div>
            {{$posts->links('paginationStyle') }}
        </div>
        <section class="showFoodSec">
            @foreach ($posts as $post)
            <article class="foodArticle">

                <div class="card">
                    <div class="sizeImg">
                        <img class="imgHome" src="/storage/img/{{$post->image}}" alt="repas">
                    </div>
                    <div class="foodInfoHome">
                        <h3><b>Publié par: </b> {{$post->InfoUser->name}}</h3>
                        <p><b>Description: </b>{{ $post->description }}</p>
                        <span>Température: {{$post->meteo}} °C</span>
                        <p><b>Lieu: </b> {{$post->InfoUser->city}}</p>
                    </div>
                    @auth
                    <div class="btnPositionHomeArt">
                        <form action="update" method="POST">
                        {{ csrf_field() }}  
                        <button value="{{$post->id}}" type="submit" name="id" class="btnReserve">
                            <lord-icon src="https://cdn.lordicon.com/mecwbjnp.json" trigger="click" colors="primary:#ffffff,secondary:#ee6352" style="width:50px;height:50px">
                            </lord-icon>
                        </button>
                        </form>
                    </div>
                    @endauth
                </div>
            </article>
            @empty($posts)
            <p>Oups! Il semble ne plus y avoir de denrée!</p>
            <lord-icon src="https://cdn.lordicon.com/yyecuati.json" trigger="loop" colors="primary:#ffffff,secondary:#ee6352" style="width:250px;height:250px">
            </lord-icon>
            @endempty
            @endforeach
        </section>
        @auth
        <a href="{{ route('add.donnation') }}">
            <lord-icon class="testAdd" src="https://cdn.lordicon.com/mecwbjnp.json" trigger="loop-on-hover" colors="primary:#ffffff,secondary:#ee6352" style="width:80px;height:80px">
            </lord-icon>
        </a>
        @endauth
        <div>
            {{$posts->links('paginationStyle') }}
        </div>
    </main>


    <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
</body>

</html>