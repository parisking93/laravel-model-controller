@extends('layouts.app')
@section('main')
    <div class="container-single-comic">
        <div>
            <img src="{{$comics->thumb}}" alt="{{$comics->title}}">
        </div>
        <div class="single-comic-right">
            <h1>{{$comics->title}}</h1>
            <div>
                <h4>{{$comics->series}}</h4>
                <h4>{{$comics->price}} $</h4>
            </div>
            <p>{{$comics->description}}</p>
        </div>
    </div>
    
@endsection