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
      <a href="{{route('comics.index')}}" class="d-block text-white text-uppercase text-decoration-none p-2 text-center">
          Back to Comics
      </a>
    </div>
    <div class="row">
      <div class="col">
        <div class="card-edit">
          <form action="{{route('comics.edit',$comic)}}" method="get" class="bg-warning p-2">
            @csrf
            @method('GET')
            <button type="submit" class="d-block btn btn-warning border-2 border-danger mx-auto text-uppercase text-danger">Edit this comic</button>
          </form>
        </div>
      </div>
      <div class="col">
        <div class="card-delete">
          <form action="{{route('comics.destroy',$comic)}}" method="post" class="bg-danger p-2">
            @csrf
            @method('delete')
            <button type="submit" class="d-block btn btn-danger border-2 border-warning mx-auto text-uppercase text-warning">Delete this comic</button>
          </form>
        </div>
      </div>
      </div>
    </div>
@endsection