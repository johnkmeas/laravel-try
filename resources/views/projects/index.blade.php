@extends('layout')

@section('content')
  <h1>Projects Page</h1>

  @foreach($projects as $project)
    <li>
      <a href="/projects/{{ $project->id }}"> 
        {{ $project->title }}
      </a>
    </li>
  @endforeach
@endsection
