@extends('layouts.app')
@section('title')
@section('content')
    {{-- hadi hiya navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('blog.create')}}">Add</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{route('category.create')}}">Add Caregory</a>
            </li>
          </ul>
        </div>
      </nav>

      {{-- -------------------------------- --}}

      <div class="row mt-5 container mx-auto">
        <ul class="list-group col-4">
            <li class="list-group-item">And a fifth one</li>
          </ul>
          {{-- -------------------- --}}

          <div class="card-deck col-8">
              @foreach ($blogs as $blog)


            <div class="card">
              <img src="{{ asset('storage/' . $blog->image)}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{$blog->title}}</h5>
                <p class="card-text">{{$blog->body}}</p>
                <a href="{{ route('blog.edit', $blog->id ) }}" class="btn btn-primary">update</a>
                <form action="{{route('blog.destroy',$blog->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">delete</button>
                </form>
              </div>
            </div>
            @endforeach
          </div>

      </div>
@endsection
