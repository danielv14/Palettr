@extends('layouts.app')

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
          <h2 class="text-muted text-center">You have not created any palettes yet</h2>
        @endif

      </div>
    </div>

    {{-- Pagination --}}
    <div class="text-center">
      {{ $palettes->links() }}
    </div>

  </div>

@endsection
