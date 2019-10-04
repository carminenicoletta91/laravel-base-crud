@extends('layout.CustomLayout')

@section('title')
  <h1>Your {{$type}}s</h1>
@endsection

@section('link-option')

  <a href={{ route('book.create') }}>Add New {{$type}}</a>

@endsection

@section('content')

  @foreach ($values as $value)
    <div class="{{$type}}">
      <p>Title: <span>{{$value -> title}}</span></p>
      <p>Description: <span>{{$value -> description}}</span></p>
      <p>Author: <span>{{$value -> author}}</span></p>
    </div>
  @endforeach


@endsection
