@extends('layouts.master')

@section('title','Blog Ku')

@section('content')
@foreach ($blogs as $blog)
  <li>
    <a href="{{url('blog',$blog->id)}}">{{$blog->title}}</a>
    <a href="{{url('blog',$blog->id)}}/edit">edit</a>
      <form class="" action="{{url('blog',$blog->id)}}" method="post">
        <input type="submit" name="submit" value="delete">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="DELETE">
      </form>
  </li>
@endforeach
{!! $blogs->links() !!}
@endsection
