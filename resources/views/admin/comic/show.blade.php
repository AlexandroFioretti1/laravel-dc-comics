@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col">
            <div class="card ">
                <img class="card-img-top text-center img-fluid" height="250" src="{{$comic->thumb}}" alt="#">
                <h4>{{$comic->title}}</h4>
                <p>{{$comic->description}}</p>
            </div>
        </div>
    </div>
</div>

@endsection