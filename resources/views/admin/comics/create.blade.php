@extends('admin.layouts.base')

@section('documentTitle')
    Create a new comics
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col">
      <form action="{{route('comics.store')}}" method="post">
        @csrf
        @method('POST')
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" name="name" id="name" class="form-control"></label>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection