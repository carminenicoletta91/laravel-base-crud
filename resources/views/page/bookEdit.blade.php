@extends('layout.CustomLayout')
@section('title')
  <h1>Update Book</h1>
@endsection
@section('link-option')
  <a href={{Route('book.index')}}>Back To Books</a>

@endsection
@section('content')
  <form method="post" action="{{ Route('book.update',$values -> id) }}">
    @csrf
    @method('POST')
    <div class="form-element">
      <label for="name">Title</label>
      <input type="text" name="title" value="{{$values -> title}}">
    </div>
    <div class="form-element">
      <label for="address">Description</label>
      <input type="text" name="description" value="{{$values -> description}}">
    </div>
    <div class="form-element">
      <label for="city">Author</label>
      <input type="text" name="author" value="{{$values -> author}}">
    </div>

    <button id="update-button"type="submit">Update</button>
  </form>

@endsection
