@extends('layout.CustomLayout')
@section('content')
<div class="container">
  <h1>{{$type}}s</h1>
  <div class="{{$type}}s">
  @foreach ($values as $value)
    <div class="{{$type}}">
      <p>Title: <span>{{$value -> title}}</span></p>
      <p>Description: <span>{{$value -> description}}</span></p>
      <p>Author: <span>{{$value -> author}}</span></p>
    </div>
  @endforeach
  </div>
</div>

@endsection
