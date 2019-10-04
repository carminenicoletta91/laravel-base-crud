@extends('layout.CustomLayout')
@section('title')
  <h1>Create New Book</h1>
@endsection
@section('link-option')
  <a href={{Route('book.index')}}>Back To Books</a>

@endsection
@section('content')
  <form method="post" action="{{ route('book.store') }}">
    @csrf
    @method('POST')
    <div class="form-element">
      <label for="name">Title</label>
      <input type="text" name="title" value="">
    </div>
    <div class="form-element">
      <label for="address">Description</label>
      <input type="text" name="description" value="">
    </div>
    <div class="form-element">
      <label for="city">Author</label>
      <input type="text" name="author" value="">
    </div>

    <button id="save-button"type="submit">Save</button>
  </form>

@endsection
