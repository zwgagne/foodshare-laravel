<x-app-layout>
    <x-slot name="header">
        <h1>
            {{ __('Profil') }}
        </h1>
    </x-slot>

    <main class="mainProfil">
        <section class="containerList">
            <h3>Vos donations</h3>
            <div>
                @foreach ($listDon as $list)
                <ul class="ContainerListDon">
                    <li class="listDonnationItem">{{$list->description}}
                        <button name="" id="btnDelete" class="btnDelete">
                            <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop-on-hover" colors="primary:#ffffff,secondary:#ee6352" style="width:50px;height:50px">
                            </lord-icon>
                        </button>
                    </li>
                </ul>
                @endforeach
            </div>
        </section>
        <section class="containerCenter">
            <h2>Votre réservation</h2>
            <div class="cardProfil">
                @foreach ($foodReserved as $foodInfo)
                <div class="sizeImg">
                    <img class="imgHome" src="/storage/img/{{$foodInfo->image}}" alt="repas">
                </div>
                <div class="foodInfoHome">
                    <p><b>Description: </b>{{$foodInfo->description}}</p>
                    <b><span>Température: {{$foodInfo->meteo}} °C</span><b>
                            <p><b>Lieu: </b> {{$post->city}}</p>
                            <p><b>Situé au: </b> {{$post->address}}</p>
                </div>
                <div class="btnPositionHomeArt">
                    <button name="" class="btnTakeOut">
                        <lord-icon src="https://cdn.lordicon.com/lthhecik.json" trigger="hover" colors="primary:#ffffff,secondary:#ee6352" style="width:80px;height:80px">
                        </lord-icon>Don récupéré
                    </button>
                </div>
                @endforeach
            </div>
        </section>
        
    </main>
    <section class="containerInfoProfil">
        <h3>Gestion compte</h3>
        <div class="formEditProfil">
            ICI LE FORM QUI PERMET DE MODIFIER LE PROFIL DE L'UTILISATEUR ET LA POSSIBILITÉ DE SUPPRIMER SON COMPTE
        </div>
    </section>
    <div id="Modal" class="displayOFF containerModalDel ">
        <h4>Êtes vous sûr de supprimer cet élément ?</h4>
        <lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop-on-hover" colors="primary:#ffffff,secondary:#ee6352" style="width:100px;height:100px">
        </lord-icon>
        <div class="containerModalBtn">
            <button id="BtnModalDelete" class="ModalDelBtn">Supprimer</button>
            <button id="modalClose" class="ModalCancelBtn">Annuler</button>
        </div>
    </div>
    @auth
    <a href="{{ route('add.donnation') }}">
        <lord-icon class="testAdd" src="https://cdn.lordicon.com/mecwbjnp.json" trigger="loop-on-hover" colors="primary:#ffffff,secondary:#ee6352" style="width:80px;height:80px">
        </lord-icon>
    </a>
    @endauth

</x-app-layout>