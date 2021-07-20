@extends('layouts.app')
@section('title')
@section('content')
<div class="container">
<form action="{{route('blog.update',$blog->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="title">title</label>
      <input type="text" class="form-control" name="title" value="{{$blog->title}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection
