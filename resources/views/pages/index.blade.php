@extends('layouts.app')

@section('hero-content')
  <a href="/"><h1>Palettr</h1></a>
  <p>Discover and create beautiful color palettes</p>
@endsection

@section('content')

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        @foreach ($palettes as $palette)
          <div class="col-md-4 col-lg-3">
            @include('partials.palette', [
              'actions' => false
            ])
          </div>
        @endforeach
      </div>
    </div>
  </div>

@endsection
