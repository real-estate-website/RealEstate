<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                Updapte Message # {{$message->id}} <br><br>

                <form method="post" action="{{route('updaptemessage')}}">
                    <input type="text" name="titre" value="{{ $message -> titre }}">
                    <input type="text" name="description" value="{{ $message -> type }}">
                    <input type="text" name="type" value="{{ $message -> type }}">
                    <input type="hidden" name="prix" value="{{ $message -> prix}}">
                    <input type="submit" value="updapte">
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