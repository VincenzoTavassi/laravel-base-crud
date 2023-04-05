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


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="deleteModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@endsection