<x-app-layout>
    <x-slot name="header">
        <h1>
            {{ __('Profil') }}
        </h1>
    </x-slot>
    <x-auth-session-status :status="session('status')" />

    <main class="mainProfil">
        <section class="containerList">
            <h3>Vos donations</h3>
            <div>
                @foreach ($listDon as $list)
                <ul class="ContainerListDon">
                    <li class="listDonnationItem">{{$list->description}}
                        <form action="{{ route('delete_food', $list->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button name="" id="btnDelete" class="btnDelete">
                                <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop-on-hover" colors="primary:#ffffff,secondary:#ee6352" style="width:50px;height:50px">
                                </lord-icon>
                            </button>
                        </form>
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
                            <p><b>Lieu: </b> {{$foodInfo->InfoUser->city}}</p>
                            <p><b>Situé au: </b> {{$foodInfo->InfoUser->address}}</p>
                </div>
                <div class="btnPositionHomeArt">
                    <form action="{{ route('delete_food', $foodID) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button name="" class="btnTakeOut">
                            <lord-icon src="https://cdn.lordicon.com/lthhecik.json" trigger="hover" colors="primary:#ffffff,secondary:#ee6352" style="width:80px;height:80px">
                            </lord-icon>Don récupéré
                        </button>
                    </form>
                </div>
                @empty($foodReserved)
                <p>Oups! Il semble ne plus y avoir de denrée!</p>
                <lord-icon src="https://cdn.lordicon.com/yyecuati.json" trigger="loop" colors="primary:#ffffff,secondary:#ee6352" style="width:250px;height:250px">
                </lord-icon>
                @endempty
                @endforeach
            </div>
        </section>

    </main>
    <section class="containerInfoProfil">
        <h3>Gestion compte</h3>
        <div class="formEditProfil">
            <div class="editSecProfil">
                <form action="{{ route('edit_profil') }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field("PUT")}}
                    <label class="labelEditProfil" for="updateName">Nom</label>
                    <input id="updateName" name="name" value="{{Auth::user()->name}}" type="text">

                    <label class="labelEditProfil" for="updateEmail">Email</label>
                    <input id="updateEmail" name="email" value="{{Auth::user()->email}}" type="email">

                    <label class="labelEditProfil" for="updateAddress">Address</label>
                    <input id="updateAddress" name="address" value="{{Auth::user()->address}}" type="text">

                    <label class="labelEditProfil" for="updateCity">Ville</label>
                    <input id="updateCity" name="city" value="{{Auth::user()->city}}" type="text">

                    <label class="labelEditProfil" for="">Mot de passe</label>
                    <input id="update" name="password" placeholder="Nouveau mot de passe" type="text">
                    <button class="btnUpdateProfil" type="submit">Mettre à jour</button>
                </form>
            </div>
            <div class="ShowInfoProfil">
                <h3>Information profil</h3>
                <div class="showPositionInfoProfil">
                    <p><b>Nom: </b> {{Auth::user()->name}}</p>
                    <p><b>Email: </b> {{Auth::user()->email}}</p>
                    <p><b>Address: </b> {{Auth::user()->address}}</p>
                    <p><b>Ville: </b> {{Auth::user()->city}}</p>
                </div>
            </div>
            <div class="deleteUserContainer">
                <form action="{{ route('deleteUser') }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <p>Supprimer votre compte</p>
                    <button class="btnDeleteCompt" type="submit">Supprimer</button>
                </form>
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