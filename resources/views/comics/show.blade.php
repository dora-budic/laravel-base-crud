@extends('layouts.app')

@section('main')
  <div class="comic">
    <a href="{{route('comics.index')}}"><i class="far fa-arrow-alt-circle-left"></i></a>
    <img class="align-center" src="{{$comic->thumb}}" alt="{{$comic->series}}">
    <h3 class="align-center">{{$comic->title}}</h3>
    <h4 class="align-center">{{$comic->series}}</h4>
    <p class="my-20">{{$comic->description}}</p>
    <span>Type: {{$comic->type}}</span>
    <span>Price: {{$comic->price}}&#36;</span>
    <span>Sale date: {{$comic->sale_date}}</span>
  </div>
@endsection
