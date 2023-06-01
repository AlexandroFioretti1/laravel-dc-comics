@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col ">
            <div class="card text-center">
                <div class="text-center m-3">
                    <img class="" width="450" src="{{$comic->thumb}}" alt="#">
                </div>
                <h4>Titolo:{{$comic->title}}</h4>
                <p>Descrizione:{{$comic->description}}</p>
                <p>Thumb:{{$comic->thum}}</p>
                <p>Price:{{$comic->price}}</p>
                <p>Series:{{$comic->series}}</p>
            </div>
        </div>
    </div>
</div>

@endsection