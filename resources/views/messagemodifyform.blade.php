<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Modifications messages
        </h2>
    </x-slot>


        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="container"> 

                        Modifications message <br><br>

                        <form method="post" action="{{route('messagemodify')}}">

                            <input type="hidden" name="id" value="{{ $message ->id}}">
                            <br>

                            <div class="row">
                                <div class="col-12">
                                    <label class="form-check-label" for="object">Objet</label>

                            <input type="text" class="form-control" name="objet" value="{{ $message -> objet }}" required>
                            
                            </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-12">
                                    <label class="form-check-label" for="contenu">Contenu</label>
                                    <textarea class="form-control" type="textarea" name="contenu" style="height: 100px" value="{{ $message -> contenu }}" required></textarea>
                                </div>
                            </div>
                            <br>
                            
                            <div class="row">
                                <div class="col-6">
                                    <label class="form-check-label" for="destinataire_id">destinataire_id</label>

                                    <input type="text" name="destinataire_id" class="form-control" value="{{ $message -> destinataire_id}}">
                                </div>
                            
                            <div class="col-6">
                                <label class="form-check-label" for="expediteur_id">expediteur_id</label>

                                <input type="text" class="form-control" name="expediteur_id" value="{{ $message -> expediteur_id}}">
                            </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-6">
                                    <label class="form-check-label" for="expediteur_id">created_at</label>

                            <input type="text" class="form-control" name="created_at" value="{{ $message -> created_at }}">
                            </div>
                            
                           
                                <div class="col-6">
                                    <label class="form-check-label" for="updapte_at">updapte_at</label>

                                    <input type="text" class="form-control" name="updapte_at" value="{{ $message -> updated_at }}">
                                </div>
                            </div>
                            <br>

                            <input type="submit" value="modifier">
                            @csrf
                        </form>
                        <br><br>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</x-app-layout>