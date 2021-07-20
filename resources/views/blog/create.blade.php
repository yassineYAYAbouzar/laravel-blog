@extends('layouts.app')
@section('title')
@section('content')
<div class="container">
<form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="title">title</label>
      <input type="text" class="form-control" name="title">
    </div>
    <div class="form-group" >
      <label for="body">content</label>
      <textarea name="body" class="form-control" ></textarea>
    </div>
    <div class="form-group">
      <input type="file" name="image">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection
