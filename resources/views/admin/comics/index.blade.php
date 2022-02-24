@extends('admin.layouts.base')

@section('documentTitle')
    Show all Comics
@endsection

@section('content')
<div class="container">
  @foreach ($comics as $comic)
  <div class="row">
    <div class="col">
      <ul>
        @foreach ($comic->toArray() as $key => $value)
        <li>
              {{$key}} : {{$value}}
        </li>
        @endforeach
      </ul>
    </div>
  </div>
  @endforeach
</div>
@endsection