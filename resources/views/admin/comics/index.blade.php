@extends('admin.layouts.base')

@section('documentTitle')
    Show all Comics
@endsection

@include('guest.header')

@section('content')
<div class="container">
  <h1>All Comics</h1>
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