<h1>Messages</h1>

@foreach($messages as $messages)
<li><strong>{{$messages -> object}}</strong></li>
<li>{{$messages -> contenu}}</li>
<li> Expéditeur : {{$messages -> expediteurs_id}}</li>
<li> Destinateur :{{$messages -> destinataires_id}}</li>
<li>Date d'envoie :{{$messages -> created_at}}</li>
<li>Dernière modification :{{$messages -> updated_at}}</li>
@endforeach