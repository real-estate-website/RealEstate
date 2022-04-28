<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Annonces') }}
        </h2>
    </x-slot>

    @foreach($annonces as $annonce)
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <br>

                    <p> Identifiant : {{$annonce->id}}</p>
                    <p> Titre de l'annonce : {{$annonce->titre}}</p>
                    <p> Description : {{$annonce->description}}</p>
                    <p> Type : {{$annonce->type}}</p>
                    <p> Prix : {{$annonce->prix}}</p>
                    [<a href="{{ route('annoncesdetails', $annonce->id )}}">details </a>]
                    [<a href="{{ route('annoncemodifyform', $annonce->id )}}"> Modifier </a>]
                    [<a href="{{ route('annoncedelete', $annonce->id)}}">delete</a>]
                    <br>

                </div>
            </div>
        </div>
    </div>
    @endforeach
</x-app-layout>