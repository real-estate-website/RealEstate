<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Modifications annonces
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container"> 
                Modifications annonce # {{$annonce->id}} <br><br>

                <form method="post" action="{{ route('annoncemodify')}}">
                    <div class="row">
                        <div class="col-12">
                            <label class="form-check-label" for="titre">Titre</label>
                            <input class="form-control" type="text" name="titre" value="{{ $annonce -> titre }}" required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-12">
                            <label class="form-check-label" for="description" >Description</label>
                            <textarea class="form-control" type="textarea" style="height: 100px" name="description" value="{{ $annonce -> description }}" required></textarea>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-6">
                            <label class="form-check-label" for="type">Type</label>
                            <input class="form-control" type="text" name="type" value="{{ $annonce -> type }}" required>
                        </div>
            
                        <div class="col-6">
                            <label class="form-check-label" for="prix">Prix</label>

                            <input class="form-control" type="text" name="prix" value="{{ $annonce -> prix}}" required>
                        </div>
                    </div>
                    <br>
                    <label class="form-check-label" for="id">Id</label>

                    <input type="text" name="id" value="{{ $annonce -> id }}">
                    <br> <br>
                    <input type="submit" value="modifier">
                    @csrf
                </form>

                <br><br>

                <p> Identifiant : {{$annonce->id}}</p>
                <p> Titre de l'annonce : {{$annonce->titre}}</p>
                <p> Description : {{$annonce->description}}</p>
                <p> Type : {{$annonce->type}}</p>
                <p> Prix : {{$annonce->prix}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>