@extends('admin.layouts.base')

@section('documentTitle')
    Show all Comics
@endsection

@include('guest.header')

@section('content')
<div class="container">
  <h1>All Comics</h1>
  @foreach ($comics->toArray() as $comic)
  <div class="row">
    <div class="col">
      <div class="card text-center">
        <div class="card-img-top">
          <img src="{{$comic['poster']}}" alt="{{$comic['name']}}">
        </div>
        <div class="card-body">
          <h2>{{$comic['name']}}</h2>
          <h3>{{$comic['series']}}</h3>
          <p>{{$comic['description']}}</p>
          <h4>On sale: {{$comic['sale_date']}}</h4>
          <b>Price: </b> <span class="card-price">{{$comic['price']}}</span>
          <b>Rated: </b> <span>{{$comic['rated']}}</span>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection