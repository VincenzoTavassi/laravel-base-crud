@extends('layouts.app')

@section('title', 'Lista Canzoni')

@section('main-content')
<div class="row row-cols-4">
    <div class="col">
        @foreach ($songs as $song)   
        <div class="card h-100">
            <img src="{{$song->poster}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$song->title}} - Album: {{$song->album}}</h5>
                <p class="card-text"><strong>Durata:</strong> {{$song->getMinutes()}} minuti
                    <br><strong>Autore:</strong> {{$song->author}}
                    @if ($song->editor)<br><strong>Editor:</strong> {{$song->editor}}@endif
                </p>
                <a href="{{route('songs.show', ['song' => $song])}}" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection