@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{route('comics.store')}}"></form>
        @csrf
        <div class="mb-3 row">
            <label for="title" class="col-2 col-form-label text-white">Name</label>
            <div class="col-10">
                <input type="text" class="form-control" name="title" id="title" placeholder="Add a Title">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="thumb" class="col-2 col-form-label text-white"> Thumb</label>
            <div class="col-10">
                <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Add new image">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="description" class="col-2 col-form-label text-white">Name</label>
            <div class="col-10">
                <input type="text" class="form-control" name="title" id="title" placeholder="Add a Title">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="price" class="col-2 col-form-label text-white">Price</label>
            <div class="col-10">
                <input type="text" class="form-control" name="price" id="price" placeholder="Add a price">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="series" class="col-2 col-form-label text-white">Series</label>
            <div class="col-10">
                <input type="text" class="form-control" name="series" id="series" placeholder="Add a Series">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="sale_date" class="col-2 col-form-label text-white">Sale Date</label>
            <div class="col-10">
                <input type="text" class="form-control" name="sale_date" id="sale_date" placeholder="Add a sale date">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="type" class="col-2 col-form-label text-white">type</label>
            <div class="col-10">
                <input type="text" class="form-control" name="type" id="type" placeholder="Add a type">
            </div>
        </div>
        <div class="mb-3 row d-flex justify-content-between align-items-center">
            <button class="btn btn-primary" type="submit">Submit</button>
            <button class="btn btn-secondary" type="reset">Reset</button>
        </div>
    </form>
</div>

@endsection