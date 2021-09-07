@extends('layouts.app')
@section('main')
    <div class="row">
        @foreach($comics as $k => $comic)
            <div class="box-card">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                <h3><a href="{{route('singleComic', ['id' => $comic->id])}}">{{ $comic['title'] }}</a> </h3>
            </div>
        @endforeach
    </div>
@endsection