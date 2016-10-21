@extends('layouts.app')

@section('title', 'Create | ')


@section('hero-content')
  <h1>Create palette</h1>
  <p>What beautiful palette will you create today, {{ auth()->user()->name }}?</p>
@endsection

@section('content')
  @include('errors.list')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        {{-- <color-picker></color-picker> --}}
        {!! Form::open(['route' => 'palettes.store']) !!}
          @include('palettes.form', ['submit' => 'Create palette'])
        {!! Form::close() !!}
        <br>
      </div>
    </div>
  </div>


@endsection
