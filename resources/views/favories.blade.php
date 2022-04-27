<h1>Favories</h1>

@foreach($favories as $favorie)
<li><strong>{{$favorie -> id}}</strong></li>
<li>{{$favorie -> url}}</strong></li>
<li>{{$favorie -> created_at}}</li>
<li>{{$favorie -> updated_at}}</li>

@endforeach