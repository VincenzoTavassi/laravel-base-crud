@extends('layouts.app')

@section('title', 'Dettaglio canzone ' . $song->title)

@section('main-content')
<div class="row">
    <div class="col-12 text-center">
        <div class="card h-100 d-flex align-items-center py-3">
            <img src="{{$song->poster}}" alt="{{$song->title}}">
            <div class="card-body">
                <h5 class="card-title">{{$song->title}} - Album: {{$song->album}}</h5>
                <p class="card-text"><strong>Durata:</strong> {{$song->getMinutes()}} minuti
                    <br><strong>Autore:</strong> {{$song->author}}
                    @if ($song->editor)<br><strong>Editor:</strong> {{$song->editor}}@endif
                </p>
                <a href="{{route('songs.index')}}" class="btn btn-primary">Torna alla lista</a>
            </div>
        </div>
    </div>
</div>
@endsection