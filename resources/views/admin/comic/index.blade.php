@extends('layouts.app')

@section('content')
<div class="container text-center">
    <td><a class="btn bg-light" href="{{route('comic.create')}}">Add new Comic</a></td>
</div>
<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">Title </th>
                <th scope="col">Description </th>
                <th scope="col">Thumb</th>
                <th scope="col">Price</th>
                <th scope="col">Series</th>
                <th scope="col">Sale date</th>
                <th scope="col">Type</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
            <tr>
                <td scope="row">{{$comic->title}}</td>
                <td>{{$comic->description}}</td>
                <td><img class="img-fluid" src="{{$comic->thumb}}" alt=""></td>
                <td>{{$comic->price}}</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->sale_date}}</td>
                <td>{{$comic->type}}</td>
                <td><a href="{{route('comic.show', $comic)}}"> <i class="fa-regular fa-eye"></i></a>
                    <a href="{{route('comic.edit', $comic)}}"> <i class="fa-solid fa-ellipsis-vertical"></i></a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-{{$comic->id}}">
                        <i class="fas fa-trash fa-sm fa-fw"></i>
                    </button>
                    <div class="modal fade" id="modal-{{$comic->id}}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitle-{{$comic->id}}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header d-flex flex-column">
                                    <h5 class="modal-title" id="modalTitle-{{$comic->id}}">Delete {{$comic->title}}</h5>
                                    <img width="100" src="{{$comic->thumb}}" alt="">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                                </div>
                                <div class="modal-body">
                                    You are sure? no turn back for this file!
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <form action="{{route('comic.destroy', $comic->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Are you sure??</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection