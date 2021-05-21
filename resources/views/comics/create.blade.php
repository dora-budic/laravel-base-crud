@extends('layouts.app')

@section('main')
  <div class="form">
    <form action="{{route('comics.store')}}" method="post">
      @csrf
      @method('POST')
      <input type="text" name="title" value="" placeholder="Title">
      <input type="text" name="description" value="" placeholder="Description">
      <input type="text" name="thumb" value="" placeholder="Cover link">
      <input type="text" name="price" value="" placeholder="Price">
      <input type="text" name="series" value="" placeholder="Series">
      <input type="date" name="sale_date" value="" placeholder="Sale date">
      <input type="text" name="type" value="" placeholder="Type">
      <input type="submit" name="post" value="Submit">
    </form>
  </div>
@endsection
