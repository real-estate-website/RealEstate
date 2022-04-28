<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                Updapte annonce # {{$annonce->id}} <br><br>

                <form method="post" action="{{ route('annoncemodify')}}">
                    <input type="text" name="titre" value="{{ $annonce -> titre }}">
                    <br>
                    <input type="textarea" name="description" value="{{ $annonce -> description }}">
                    <br>

                    <input type="text" name="type" value="{{ $annonce -> type }}">
                    <br>
                    <input type="text" name="prix" value="{{ $annonce -> prix}}">
                    <br>
                    <input type="text" name="id" value="{{ $annonce -> id }}">
                    <br>
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