@extends('layouts.app')

@section('hero-content')
  <a href="/"><h1>Palettr</h1></a>
  <p>Discover and create beautiful color palettes</p>
@endsection

@section('content')
  <div class="container">
    <div class="col-md-8 col-md-offset-2">
      <h2 class="text-muted">{{ $header }}</h2>

      {{-- Palette partial that loops through each palette --}}
      @include('partials.palette-loop', [
        'palettes' => $palettes,
      ])

      {{-- Pagination --}}
      <div class="text-center">
        {{ $palettes->links() }}
      </div>
    </div>
  </div>

@endsection
