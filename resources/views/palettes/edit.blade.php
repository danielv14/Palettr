@extends('layouts.app')

@section('hero-content')
  <h1>Update palette</h1>
  <p>With a little fine-tuning you'll get it right, {{ auth()->user()->name }}!</p>
@endsection

@section('content')
  <div class="container">
    <div class="row content-shadow">
      <div class="col-md-8 col-md-offset-2">
        <br>
        {!! Form::model($palette, ['method' => 'PATCH', 'route' => ['palettes.update', $palette->id]]) !!}
          @include('palettes.form', ['submit' => 'Update palette'])
        {!! Form::close() !!}
        <br>
      </div>
    </div>
  </div>

@endsection
