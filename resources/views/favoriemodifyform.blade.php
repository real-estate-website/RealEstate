<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                Modification de favorie# {{$favorie->id}} <br><br>

                <form method="post" action="#">
                    Url : <input type="text" name="titre" value="{{ $favorie -> url}}">
                    <br>

                    Description : <input type="textarea" name="description" value="{{ $favorie -> created_at }}">
                    <br>

                    Type : <input type="text" name="type" value="{{ $favorie -> updated_at }}">
                    <br>

                    <input type="submit" value="modifier">
                    @csrf
                </form>
                <br><br>

                <p> Reference : {{$favorie->id}}</p>
                <p> Titre de l'favorie : {{$favorie->url}}</p>


            </div>
        </div>
    </div>
</div>