@extends('layouts.app')
@section('content')
<h2>Elenco post</h2>
  @foreach ($posts as $post)
    <div class="">
      <p>{{$post->title}}</p>
      <p>{{$post->body}}</p>
    </div>
  @endforeach

@endsection
