@extends('layout')

@section('content')
  <h1>Create Page</h1>
  <form method="POST" action="/projects">
    {{ csrf_field() }}
    <div>
      <input type="text" name="title" placeholder="Project title">
    </div>
    <div>
      <textarea name="description" placeholder="description" id="" cols="30" rows="10"></textarea>
    </div>
    <div>
      <button type="submit">Create Project</button>
    </div>
  </form>
@endsection