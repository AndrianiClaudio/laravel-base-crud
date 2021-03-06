@extends('admin.layouts.base')

@section('documentTitle')
    Show all Comics
@endsection

@include('guest.header')

@section('content')
@if(session('status'))
<div class="bg-success p-3 text-uppercase text-white">
  <b>{{session('status')}}</b>
</div>
@endif
<div class="container">
  @if(count($comics) > 0)
  <h1>All Comics</h1>
  @endif
  @foreach ($comics as $comic)
  <div class="row">
    <div class="col">
      <div class="card text-center p-3">
        <div class="card-img-top">
          <a href="{{route('comics.show',$comic['id'])}}" class="link-dark text-uppercase text-decoration-none" title="Show {{$comic['name']}} detail">
            <img src="{{$comic['poster']}}" alt="{{$comic['name']}}">
          </a>
        </div>
        <div class="card-body">
          <h2>
            <a href="{{route('comics.show',$comic['id'])}}" class="text-uppercase text-decoration-none text-primary" title="Show {{$comic['name']}} detail">{{$comic['name']}}</a>
          </h2>
          <h3 class="text-warning">{{$comic['series']}}</h3>
          <p>{{$comic['description']}}</p>
          <h4>On sale: {{$comic['sale_date']}}</h4>
          <div>
            <b>Price: </b> <span class="card-price text-success">{{$comic['price']}}</span>
          </div>
          <div>
            <b>Rated: </b> <span>{{$comic['rated']}} / 10</span>
          </div>
          <div class="card-delete">
            <form action="{{route('comics.destroy',$comic)}}" method="post">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-danger">Delete this comic</button>
            </form>
          </div>
          <div class="card-edit">
            <form action="{{route('comics.edit',$comic)}}" method="get">
              @csrf
              @method('GET')
              <button type="submit" class="btn btn-warning">Edit this comic</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  <div class="row">
      {{$comics->links()}}
  </div>
</div>
@endsection