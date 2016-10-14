@extends('layouts.app')

@section('hero-content')
  <a href="/"><h1>Palettr</h1></a>
  <p>Discover and create beautiful color palettes</p>
@endsection

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h2 class="text-muted">Popular</h2>
        @include('partials.palette-loop', [
          'palettes' => $popular,
          'actions' => false
        ])
        <br>
        <div class="text-center">
          <a href="{{ route('popular') }}" class="btn btn-brand">View all popular</a>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h2 class="text-muted">Recent</h2>
        @include('partials.palette-loop', [
          'palettes' => $recent,
          'actions' => false
        ])
        <br>
        <div class="text-center">
          <a href="{{ route('recent') }}" class="btn btn-brand">View all recent</a>
        </div>
      </div>
    </div>
  </div>





@endsection
