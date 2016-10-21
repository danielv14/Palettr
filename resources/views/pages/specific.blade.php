@extends('layouts.app')

@section('title', $title . ' |')


@section('hero-content')
  <h1>{{ $header }}</h1>
  <p>{{ $subheader }}</p>
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

    {{-- Pagination --}}
    <div class="text-center">
      {{ $palettes->links() }}
    </div>

  </div>

@endsection
