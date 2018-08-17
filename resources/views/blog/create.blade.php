
@extends('layouts.master')

@section('title','Blog Single')

@section('content')
  <h1>Hallo </h1>
  <form class="" action="{{url('blog')}}" method="post">
    <input type="text" name="title" value="{{old('title')}}"><br>
    {{($errors->has('title')) ? $errors->first('title') : ''}}<br>
    <textarea name="description" rows="8" cols="80">{{old('description')}}
    </textarea><br>{{($errors->has('description')) ? $errors->first('description') : ''}}<br>
    {{csrf_field()}}
    <input type="submit" name="submit" value="Create">

  </form>

@endsection
