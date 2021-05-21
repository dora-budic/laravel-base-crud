@extends('layouts.app')

@section('main')
  <div class="form">
    <form class="" action="{{route('comics.update',['comic'=>$comic->id])}}" method="post">
      @csrf
      @method('PUT')
      <input type="text" name="title" value="{{$comic->title}}" placeholder="Title">
      <input type="text" name="description" value="{{$comic->description}}" placeholder="Description">
      <input type="text" name="thumb" value="{{$comic->thumb}}" placeholder="Cover link">
      <input type="text" name="price" value="{{$comic->price}}" placeholder="Price">
      <input type="text" name="series" value="{{$comic->series}}" placeholder="Series">
      <input type="date" name="sale_date" value="{{$comic->sale_date}}" placeholder="Sale date">
      <input type="text" name="type" value="{{$comic->type}}" placeholder="Type">
      <input type="submit" name="post" value="Submit">
    </form>
  </div>
@endsection
