@extends('layouts.app')

@section('title', 'Modifica la canzone ' . $song->title);

@section('main-content')

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form class="row g-3" method="POST" action="{{route('songs.update', $song)}}">
  @csrf
  @method('PUT')
  
    <div class="col-md-5">
    <label for="title" class="form-label">Titolo</label>
    <input type="text" name="title" class="form-control" id="title" value="{{$song->title}}">
  </div>

    <div class="col-md-5">
    <label for="album" class="form-label">Album</label>
    <input type="text" name="album" class="form-control" id="album" value="{{$song->album}}">
  </div>

    <div class="col-md-5">
    <label for="author" class="form-label">Autore</label>
    <input type="text" name="author" class="form-control" id="author" value="{{$song->author}}">
  </div>

      <div class="col-md-5">
    <label for="editor" class="form-label">Editor</label>
    <input type="text" name="editor" class="form-control" id="editor" value="{{$song->editor}}">
  </div>

    <div class="col-md-3">
    <label for="length" class="form-label">Durata (in secondi)</label>
    <input type="number" name="length" class="form-control" id="length" value="{{$song->length}}">
  </div>

    <div class="col-md-7">
    <label for="poster" class="form-label">Immagine</label>
    <input type="text" name="poster" class="form-control" id="poster" value="{{$song->poster}}">
  </div>

    <div class="col-md-10">
    <label for="description" class="form-label">Descrizione</label>
    <textarea name="description" rows="5" class="form-control" id="description">{{$song->description}}</textarea>
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-dark">Modifica Canzone</button>
  </div>
</form>


@endsection