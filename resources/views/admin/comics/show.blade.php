@extends('admin.layouts.base')

@section('documentTitle')
    Show a Comic
@endsection

@include('guest.header')

@section('content')
    {{-- {{dd($comic)}} --}}
<ul class="list-group">
  @foreach ($comic->toArray() as $key => $value)
  <li class="list-group-item">
    {{$key}} : {{$value}}
  </li>
  @endforeach
</ul>
    <div class="bg-primary">
      <a href="{{route('comics.index')}}" class="d-block text-white text-uppercase text-decoration-none py-2 text-center">
          Back to Comics
      </a>
    </div>
    <div class="card-edit py-2">
      <form action="{{route('comics.edit',$comic)}}" method="get" class="bg-warning">
        @csrf
        @method('GET')
        <button type="submit" class="d-block btn btn-warning py-2 border-2 border-danger mx-auto text-uppercase text-danger">Edit this comic</button>
      </form>
    </div>
    <div class="card-delete">
      <form action="{{route('comics.destroy',$comic)}}" method="post" class="bg-danger">
        @csrf
        @method('delete')
        <button type="submit" class="d-block btn btn-danger py-2 border-2 border-warning mx-auto text-uppercase text-warning">Delete this comic</button>
      </form>
    </div>
@endsection