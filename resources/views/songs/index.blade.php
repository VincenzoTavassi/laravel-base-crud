@extends('layouts.app')

@section('title', 'Lista Canzoni')

@section('main-content')

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Copertina</th>
      <th scope="col">Titolo</th>
      <th scope="col">Album</th>
      <th scope="col">Autore</th>     
      <th scope="col">Editor</th>
      <th scope="col">Durata</th>
      <th scope="col">Dettaglio</th>

    </tr>
  </thead>
  <tbody>
@foreach ($songs as $song)   
    <tr>
      <th scope="row">{{$song->id}}</th>
      <td><img src="{{$song->poster}}" class="thumbnail"></td>
      <td>{{$song->title}}</td>
      <td>{{$song->album}}</td>
      <td>{{$song->author}}</td>
      <td>{{$song->editor}}</td>
      <td>{{$song->getMinutes()}} minuti</td>
     <td><a href="{{route('songs.show', ['song' => $song])}}">Dettaglio</a></td>

    </tr>
    @endforeach
  </tbody>
</table>

@endsection