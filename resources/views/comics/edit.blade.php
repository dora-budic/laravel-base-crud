@extends('layouts.app')

@section('main')
  <div class="form">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{route('comics.update',['comic'=>$comic->id])}}" method="post">
      @csrf
      @method('PUT')
      <input type="text" name="title" value="{{$comic->title}}" placeholder="Title">
      <textarea name="description" rows="8">{{$comic->description}}</textarea>
      <input type="text" name="thumb" value="{{$comic->thumb}}" placeholder="Cover link">
      <input type="text" name="price" value="{{$comic->price}}" placeholder="Price">
      <input type="text" name="series" value="{{$comic->series}}" placeholder="Series">
      <input type="date" name="sale_date" value="{{$comic->sale_date}}" placeholder="Sale date">
      <input type="text" name="type" value="{{$comic->type}}" placeholder="Type">
      <input type="submit" name="post" value="Submit">
    </form>
  </div>
@endsection
