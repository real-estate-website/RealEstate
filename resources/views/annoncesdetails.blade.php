<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Details annonces') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <ul>

                        <p>Reference de l'annonce : {{$details -> id}}</p>
                        <br>

                        <p>Titre : {{$details -> titre}}</p>
                        <br>

                        <p>Description : {{$details -> description}}</p>
                        <br>

                        <p>Type : {{$details -> type}}</p>
                        <br>

                        <p>Nombre de pièce : {{$details -> nbr_piece}}</p>
                        <br>

                        <p>Surface : {{$details -> surface}}</p>
                        <br>

                        <p>Prix : {{$details -> prix}}</p>
                        <br>

                        <p>Date de création : {{$details ->created_at}}</p>
                        <br>

                        <p>Dernière mise à jour : {{$details ->updated_at}}</p>
                        <br>

                        [<a href="{{ route('annoncemodifyform', $details->id )}}"> Modifier </a>]
                        [<a href="{{ route('annoncedelete', $details->id )}}"> Suprimer </a>]


                    </ul>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>