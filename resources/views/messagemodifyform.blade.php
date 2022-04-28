<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                Updapte Message <br><br>

                <form method="post" action="{{route('messagemodify')}}">

                    <input type="hidden" name="id" value="{{ $message ->id}}">
                    <br>

                    Object : <input type="text" name="objet" value="{{ $message -> objet }}">
                    <br>

                    Contenu : <input type="textarea" name="contenu" value="{{ $message -> contenu }}">
                    <br>
                    destinataire_id : <input type="text" name="destinataire_id"
                        value="{{ $message -> destinataire_id}}">
                    <br>
                    expediteur_id : <input type="text" name="expediteur_id" value="{{ $message -> expediteur_id}}">
                    <br>

                    created_at : <input type="text" name="created_at" value="{{ $message -> created_at }}">
                    <br>

                    updapte_at : <input type="text" name="updapte_at" value="{{ $message -> updated_at }}">
                    <br>

                    <input type="submit" value="modifier">
                    @csrf
                </form>
                <br><br>

            </div>
        </div>
    </div>
</div>