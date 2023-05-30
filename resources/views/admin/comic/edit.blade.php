@extends('layouts.app')

@section('content')

<div class="container">
    <form>
        <div class="mb-3 row ">
            <label for="title" class="col-4 col-form-label">title</label>
            <div class="col-8">
                <input type="text" class="form-control" name="title" id="title" placeholder="title">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="description" class="col-4 col-form-label" placeholder="Add Description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <div class="mb-3 d-flex justify-content-between align-content-between">
            <div><img src="{{$comic->thumb}}" width="450" alt=""></div>
            <label for="thumb" class="col-4 col-form-label">thumb</label>
            <div class="w-100">
                <label for="thumb" class="col-4 col-form-label">Add Image</label>
                <input type="text" class="form-control" name="thumb" id="thumb" placeholder="thumb">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="price" class="col-4 col-form-label">Price</label>
            <div class="col-8">
                <input type="text" class="form-control" name="price" id="price" placeholder="price">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="series" class="col-4 col-form-label">Series</label>
            <div class="col-8">
                <input type="text" class="form-control" name="series" id="series" placeholder="series">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="sale_date" class="col-4 col-form-label">Sale Date</label>
            <div class="col-8">
                <input type="text" class="form-control" name="sale_date" id="sale_date" placeholder="sale date">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="type" class="col-4 col-form-label">type</label>
            <div class="col-8">
                <input type="text" class="form-control" name="type" id="type" placeholder="type">
            </div>
        </div>
        <div class="container">
            <button class="btn btn-primary " type="submit">Submit</button>
            <button class="btn btn-secondary" type="reset">Reset</button>
        </div>
    </form>
</div>
@endsection('content')