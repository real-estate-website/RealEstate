<h1>Annonces</h1>

@foreach($annonces as $annonce)
<li>{{$annonce->id}}</li>
<li>{{$annonce->titre}}</li>
<li>{{$annonce->description}}</li>
<li>{{$annonce->type}}</li>
<li>{{$annonce->prix}}</li>
@endforeach