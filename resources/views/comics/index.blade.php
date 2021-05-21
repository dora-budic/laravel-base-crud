@extends('layouts.app')

@section('main')
  <div class="card-container" id="root">
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
        <div class="actions">
          <a href="{{route('comics.edit',['comic' => $comic->id])}}" class="btn-blue">Edit</a>
          <button class="btn" type="button" name="button"
          @click="deleteForm({{$comic->id}})">Delete</button>
        </div>
      </div>
      <div class="delete" v-if="{{$comic->id}} == currIndex">
        <div>
          <p>Are you sure you want to delete comic "{{$comic->title}}"?</p>
          <img src="{{$comic->thumb}}" alt="{{$comic->series}}">
          <div class="buttons">
            <form action="{{route('comics.destroy', ['comic'=>$comic->id])}}" method="post">
              @csrf
              @method('DELETE')
              <input type="submit" name="delete" value="Delete" class="btn-blue">
            </form>
            <button type="button" name="button" class="btn"
            @click="exit">Go Back</button>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection
