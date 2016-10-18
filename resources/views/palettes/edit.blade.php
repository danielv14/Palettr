@extends('layouts.app')

@section('hero-content')
  <h1>Update palette</h1>
  <p>With a little fine-tuning you'll get it right, {{ auth()->user()->name }}!</p>
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        {!! Form::model($palette, ['method' => 'PATCH', 'route' => ['palettes.update', $palette->id]]) !!}
          @include('palettes.form-update', ['submit' => 'Update palette'])
        {!! Form::close() !!}
      </div>
    </div>
  </div>

@endsection
