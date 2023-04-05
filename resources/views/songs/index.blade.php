@extends('layouts.app')

@section('title', 'Lista Canzoni')

@section('main-content')
<div class="d-flex">
<a class="btn btn-dark ms-auto my-2" href="{{route('songs.create')}}">Aggiungi una canzone</a>
</div>

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
     <td>
      <a href="{{route('songs.show', ['song' => $song])}}">Dettaglio</a>
      <a href="{{route('songs.edit', ['song' => $song])}}">Modifica</a>
      <form action="{{route('songs.destroy', ['song' => $song])}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="hidden" name="page" value="{{$songs->currentPage()}}">
        <button>Cancella</button>
        </form>

    </td>

    </tr>
    @endforeach
    {{ $songs->links('pagination::bootstrap-5') }}
  </tbody>
</table>

@endsection