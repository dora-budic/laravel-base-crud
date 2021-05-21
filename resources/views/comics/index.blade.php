@extends('layouts.app')

@section('main')
  <div class="card-container">
    @foreach($comics as $comic)
      <div class="card">
        <a href="{{route('comics.show',['comic' => $comic->id])}}">
          <div class="image">
            <img src="{{$comic->thumb}}" alt="{{$comic->series}}">
          </div>
          <h3>{{$comic->title}}</h3>
          <h4>{{$comic->series}}</h4>
          <p>{{$comic->price}}&#36;</p>
        </a>
        <a href="{{route('comics.edit',['comic' => $comic->id])}}" class="btn">Edit</a>
      </div>
    @endforeach
  </div>
@endsection
