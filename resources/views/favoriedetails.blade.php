<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Details Favorie') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <ul>

                        <p>Reference du Favorie: {{$favorie -> id}}</p>
                        <br>

                        <p>Titre : <a href="{{$favorie -> url}}">{{$favorie -> url}}</a></p>
                        <br>

                        <p>Date de création : {{$favorie ->created_at}}</p>
                        <br>

                        <p>Dernière mise à jour : {{$favorie ->updated_at}}</p>
                        <br>

                        [<a href="{{ route('favoriemodifyform', $favorie->id )}}"> Modifier </a>]
                        [<a href="{{ route('favoriedelete', $favorie->id)}}"> Suprimer </a>]


                    </ul>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>