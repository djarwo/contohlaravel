
@extends('layouts.master')

@section('title','Blog Single')

@section('content')
  <h1>Hallo </h1>
  <form class="" action="{{url('blog',$blog->id)}}" method="post">
    <input type="text" name="title" value="{{$blog->title}}"><br>
    <textarea name="description" rows="8" cols="80">
      {{$blog->description}}
    </textarea><br>
    <input type="hidden" name="_method" value="PUT">
    {{csrf_field()}}
    <input type="submit" name="submit" value="edit">
  </form>
@endsection
