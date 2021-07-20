@extends('layouts.app')
@section('title')
@section('content')
<div class="container">
<form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="title">title</label>
      <input type="text" class="form-control" name="name">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection
