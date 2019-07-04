@extends('layout')

@section('content')
  <h1>Create Page</h1>
  <form method="POST" action="/projects">
    {{ csrf_field() }}
    <div class="field">
      <label for="title" class="label">Title</label>
      <div class="control">
        <input class="input {{ $errors->has('title') ? 'is-danger' : ''}} " type="text" name="title" placeholder="Project title" value="{{ old('title') }}">
      </div>
    </div>
    <div class="field">
      <label for="description" class="label"></label>
      <div class="control">
        <textarea class="textarea {{ $errors->has('description') ? 'is-danger' : ''}} " name="description" placeholder="description" id="" cols="30" rows="10">{{ old('description') }}</textarea>
      </div>
    </div>
    <div>
      <button class="button is-link" type="submit">Create Project</button>
    </div>
    @if($errors->any())
    <div class="notification is-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
  </form>
@endsection