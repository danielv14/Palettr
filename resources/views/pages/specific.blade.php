@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="col-md-8 col-md-offset-2">
      <h2>{{ $header }}</h2>

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
