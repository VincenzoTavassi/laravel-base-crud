@extends('layouts.app')

@section('title', 'Aggiungi una nuova canzone')

@section('main-content')

<form class="row g-3" method="POST" action="{{route('songs.store')}}">
  @csrf
  
    <div class="col-md-4">
    <label for="title" class="form-label">Titolo</label>
    <input type="text" name="title" class="form-control" id="title">
  </div>

    <div class="col-md-4">
    <label for="album" class="form-label">Album</label>
    <input type="text" name="album" class="form-control" id="album">
  </div>

    <div class="col-md-5">
    <label for="author" class="form-label">Autore</label>
    <input type="text" name="author" class="form-control" id="author">
  </div>

    <div class="col-md-3">
    <label for="length" class="form-label">Durata (in secondi)</label>
    <input type="number" name="length" class="form-control" id="length">
  </div>

    <div class="col-md-5">
    <label for="poster" class="form-label">Immagine</label>
    <input type="text" name="poster" class="form-control" id="poster">
  </div>

    <div class="col-md-10">
    <label for="description" class="form-label">Descrizione</label>
    <textarea name="description" rows="5" class="form-control" id="description"></textarea>
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-dark">Aggiungi Canzone</button>
  </div>
</form>


@endsection