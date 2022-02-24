@extends('admin.layouts.base')

@section('documentTitle')
    Show a Comic
@endsection

@section('content')
    {{-- {{dd($comic)}} --}}
    <ul class="list-group">
      @foreach ($comic->toArray() as $key => $value)
      <li class="list-group-item">
        {{$key}} : {{$value}}
      </li>
      @endforeach
    </ul>
@endsection