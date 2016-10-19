@extends('layouts.app')

@section('hero-content')
  <a href="/"><h1>Palettr</h1></a>
  <p>Discover and create beautiful color palettes</p>
@endsection

@section('content')

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        @if ($palettes->count() > 0)
          @foreach ($palettes as $palette)
            <div class="col-md-4 col-lg-3">
              @include('partials.palette', [
                'actions' => false
              ])
            </div>
          @endforeach
        @else
          <h2 class="text-muted text-center">No palettes has been created yey.</h2>
          <p class="text-muted text-center"><a href="/register">Create</a> an account to start creating palettes.</p>
        @endif
      </div>
    </div>
  </div>

@endsection
