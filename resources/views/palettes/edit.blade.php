@extends('layouts.app')

@section('content')
  <h1>Update palette</h1>
  {!! Form::model($palette, ['method' => 'PATCH', 'route' => ['palettes.update', $palette->id]]) !!}
    @include('palettes.form', ['submit' => 'Update palette'])
  {!! Form::close() !!}
@endsection
