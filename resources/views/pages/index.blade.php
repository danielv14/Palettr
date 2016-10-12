@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h2>Popular</h2>
        @include('partials.palette-loop', [
          'palettes' => $popular,
        ])
        <br>
        <div class="text-center">
          <a href="{{ route('popular') }}" class="btn btn-primary">View all popular</a>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h2>Recent</h2>
        @include('partials.palette-loop', [
          'palettes' => $recent,
        ])
        <br>
        <div class="text-center">
          <a href="{{ route('recent') }}" class="btn btn-primary">View all recent</a>
        </div>
      </div>
    </div>
  </div>





@endsection
