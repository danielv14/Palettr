@extends('layouts.app')

@section('hero-content')
  <a href="/"><h1>Palettr</h1></a>
  <p>Discover and create beautiful color palettes</p>
@endsection

@section('content')

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        @if ($palettes)
          @foreach ($palettes as $palette)
            <div class="col-md-4 col-lg-3">
              @include('partials.palette', [
                'actions' => false
              ])
            </div>
          @endforeach
        @else
          No palettes found
        @endif

      </div>
    </div>
  </div>

@endsection
