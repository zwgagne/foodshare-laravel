<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('Ajouter une denrée') }}
        </h2>
    </x-slot>

    <main class="mainDonnation">
        <section class="containerFormDon">
        <x-auth-validation-errors :errors="$errors" />
            <form action="" method="POST" enctype="multipart/form-data" >
            {{ csrf_field() }}
                <div class="containerInputDon">
                    <x-label for="imageid" :value="__('Insérer une photo du don')" />
                    <x-input id="imageid" type="file" name="image" accept="image/png, image/jpeg"  autofocus />
                </div>
                <div class="descriptionDon">
                    <label for="descriptionid">Description</label>
                    <textarea name="description" id="descriptionid" cols="60" rows="10" maxlength="255" placeholder="Entre une courte description de la donation (Maximum 255 caractère)" required></textarea>
                </div>
                <div class="containerInputDon">
                    <x-label for="created_atid" :value="('Date / Heure Du dépôt')" />
                    <x-input id="created_atid" type="datetime-local" name="created_at" required />
                </div>
                <div>
                    <input class="hiddenEl" type="text" name="meteo" value="" hidden>
                    <input class="hiddenEl" type="text" name="user_id" value="{{Auth::user()->id}}" hidden>
                </div>
                <input type="submit" value="Soumettre">
            </form>
        </section>
    </main>
</x-app-layout>
