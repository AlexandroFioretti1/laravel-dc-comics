@extends('layouts.app')

@section('content')

<div class="container p-4 text-white ">
    <div class="row row-cols-6 g-3">
        @foreach ($comics as $comic)
        <div class="col">
            <div class="card h-100 bg-transparent">
                <img class="card-img-top " src="{{$comic['thumb']}}" alt="#">
                <h4>{{$comic['title']}}</h4>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection