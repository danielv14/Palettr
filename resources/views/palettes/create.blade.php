@extends('layouts.app')

@section('content')
  <h1>Create a palette</h1>

  {!! Form::open(['route' => 'palettes.store']) !!}
    @include('palettes.form', ['submit' => 'Create palette'])
  {!! Form::close() !!}

@endsection
