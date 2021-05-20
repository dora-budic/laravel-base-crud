@extends('layouts.app')

@section('main')
  <div class="card-container">
    @foreach($comics as $comic)
    <a href="{{route('comics.show',['comic' => $comic->id])}}">
      <div class="card">
        <div class="image">
          <img src="{{$comic->thumb}}" alt="{{$comic->series}}">
        </div>
        <h3>{{$comic->title}}</h3>
        <h4>{{$comic->series}}</h4>
        <p>{{$comic->price}}</p>
      </div>
    </a>
    @endforeach
  </div>
@endsection
