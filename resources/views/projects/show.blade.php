@extends('layout')

@section('content')
  <h1 class="title">{{ $project->title }} </h1>
  <div class="content">{{ $project->description }}</div>

  <p>
    <a href="/projects/{{ $project->id }}/edit">Edit</a>
  </p>

  @if($project->tasks->count())
    <div>
      @foreach($project->tasks as $task)
        <li>{{ $task->description }}</li>
       @endforeach
    </div>
  @endif
@endsection