
@extends('layouts.master')

@section('title','Blog Single')

@section('content')
  <h1>Hallo {{$id}}</h1>
  <ul>
    @foreach ($user as $data )
      <li>{{$data->username}}</li>
    @endforeach
  </ul>
  <br>

  <ul>
    @foreach ($blogs as $blog )
      <li>{{$blog->title}}</li>
    @endforeach
  </ul>

  {{ $unescape }}
@endsection
