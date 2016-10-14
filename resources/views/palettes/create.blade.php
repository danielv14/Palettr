@extends('layouts.app')

@section('hero-content')
  <h1>Create palette</h1>
  <p>What beautiful palette will you create today, {{ auth()->user()->name }}?</p>
@endsection

@section('content')
  <div class="container">
    <div class="row content-shadow">
      <div class="col-md-6 col-md-offset-3">
        <br>
        {!! Form::open(['route' => 'palettes.store']) !!}
          @include('palettes.form', ['submit' => 'Create palette'])
        {!! Form::close() !!}
        <br>
      </div>
    </div>
  </div>


@endsection
