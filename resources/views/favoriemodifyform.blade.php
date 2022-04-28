<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Modifications favoris
        </h2>
    </x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="container"> 

                Modifications favori # {{$favorie->id}} <br><br>

                <form method="post" action="{{ route('favoriemodify') }}">
                    <div class="row">
                        <div class="col-12">
                            <label class="form-check-label" for="url">Url</label>

                            <input type="text" class="form-control" name="url" value="{{ $favorie -> url}}" required>
                    </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-6">
                            <label class="form-check-label" for="created_at">Description</label>

                            <input class="form-control" type="text" name="created_at" value="{{ $favorie -> created_at }}" >
                        </div>
                    
                        <div class="col-6">
                            <label class="form-check-label" for="updated_at">updated_at</label>

                         <input type="text" class="form-control" name="updated_at" value="{{ $favorie -> updated_at }}">
                    </div>
                    </div>
                    <br>

                    <input type="hidden" name="id" value="{{ $favorie -> id }}">
                    <br>

                    <input type="submit" value="modifier">
                    @csrf
                </form>
                <br>

                <p> Reference : {{$favorie->id}}</p>
                <p> Titre de l'favorie : {{$favorie->url}}</p>

                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout> 