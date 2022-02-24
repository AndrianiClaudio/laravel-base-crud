@extends('admin.layouts.base')

@section('documentTitle')
    Create a new comics
@endsection

@include('guest.header')

@section('content')
<div class="container">
  <div class="row">
    <div class="col">
      <form action="{{route('comics.update',$comic->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" name="name" id="name" class="form-control" value="{{$comic->name}}"></label>
        </div>
        <div class="mb-3">
          <label for="poster" class="form-label">Poster</label>
          <input type="text" name="poster" id="poster" class="form-control" value="{{$comic->poster}}"></label>
        </div>

        <div class="mb-3">
          <label for="series" class="form-label">Series</label>
          <input type="text" name="series" id="series" class="form-control" value="{{$comic->series}}"></label>
        </div>
        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="number" step='0.01' name="price" id="price" class="form-control" value="{{$comic->price}}"></label>
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <input type="text" name="description" id="description" class="form-control" value="{{$comic->description}}"></label>
        </div>
        <div class="mb-3">
          <label for="sale_date" class="form-label">Sale Date</label>
          <input type="date" name="sale_date" id="sale_date" class="form-control" value="{{$comic->sale_date}}"></label>
        </div>
        <div class="mb-3">
          <label for="page_count" class="form-label">Page Count</label>
          <input type="text" name="page_count" id="page_count" class="form-control" value="{{$comic->page_count}}"></label>
        </div>
        <button type="submit" class="btn btn-primary">Salva i dati</button>

      </form>
    </div>
  </div>
</div>
@endsection