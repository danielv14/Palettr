@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h2>Popular</h2>
        @include('partials.palette-loop', [
          'palettes' => $popular,
        ])
        <div class="text-center">
          <a href="#" class="btn btn-primary">View all popular</a>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h2>Recent</h2>
        @include('partials.palette-loop', [
          'palettes' => $recent,
        ])
        <div class="text-center">
          <a href="#" class="btn btn-primary">View all recent</a>
        </div>
      </div>
    </div>
  </div>





@endsection
