@extends('layouts.app')

@section('title', 'Dettaglio canzone ' . $song->title)

@section('main-content')
<div class="row">
    <div class="col-12">
        <div class="card h-100">
            <img src="{{$song->poster}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$song->title}} - Album: {{$song->album}}</h5>
                <p class="card-text"><strong>Durata:</strong> {{$song->getMinutes()}} minuti
                    <br><strong>Autore:</strong> {{$song->author}}
                    @if ($song->editor)<br><strong>Editor:</strong> {{$song->editor}}@endif
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
</div>
@endsection