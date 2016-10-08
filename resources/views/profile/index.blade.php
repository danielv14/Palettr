@extends('layouts.app')

@section('content')
  <h1>My profile</h1>
  <p>My name is {{Auth::user()->name}}</p>
  <p>My palettes:</p>

  @foreach (Auth::user()->palettes()->get() as $palette)
    <p>{{ $palette }}</p>
    <a href="{{ route('palettes.edit', $palette->id) }}">Edit</a>
    <br>
    {!! Form::open([
      'method' => 'DELETE',
      'route' => ['palettes.destroy', $palette->id]
    ]) !!}
      {!! Form::submit('Delete') !!}
    {!! Form::close() !!}

  @endforeach
  <br>
  <a href="{{ route('palettes.create') }}">Create new palette</a>
@endsection
