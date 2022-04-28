<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mes messages') }}
        </h2>
    </x-slot>

    @foreach($messages as $message)
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <br>

                    <p><strong>{{$message-> objet}}</strong></p>
                    <p>{{$message -> contenu}}</p>
                    <p> Expéditeur : {{$message -> expediteur_id}}</p>
                    <p> Destinateur :{{$message -> destinataire_id}}</p>
                    <p>Date d'envoie :{{$message -> created_at  }}</p>
                    <p>Dernière modification :{{$message -> updated_at }}</p>
                    <br>

                    [<a href="{{ route('messagemodifyform', $message->id )}}"> Modifier </a>]
                    [<a href="{{ route('messagedelete', $message->id)}}">delete</a>]

                </div>
            </div>
        </div>
    </div>
    @endforeach
</x-app-layout>