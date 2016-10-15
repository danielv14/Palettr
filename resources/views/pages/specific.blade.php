@extends('layouts.app')

@section('hero-content')
  <h1>{{ $header }}</h1>
  <p>{{ $subheader }}</p>
@endsection

@section('content')
  <div class="container-fluid">

    <div class="row">
      <div class="col-lg-12">
        @foreach ($palettes as $palette)
          <div class="col-sm-6 col-md-4 col-lg-3">
            {{-- Palette partial --}}
            @include('partials.palette', [
              'actions' => false
            ])
          </div>
        @endforeach
      </div>
    </div>

    {{-- Pagination --}}
    <div class="text-center">
      {{ $palettes->links() }}
    </div>

  </div>

@endsection
