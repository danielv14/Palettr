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
          <div class="col-sm-6 col-md-4 col-lg-3">
            @include('partials.palette', [
              'actions' => false
            ])
          </div>
        @endforeach
        {{-- <br>
        <div class="text-center">
          <a href="{{ route('popular') }}" class="btn btn-brand">View all popular</a>
        </div> --}}
      </div>
    </div>

    {{-- <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h2 class="text-muted">Recent</h2>
        @foreach ($recent as $palette)
          @include('partials.palette-loop', [
            'actions' => false
          ])
        @endforeach

        <br>
        <div class="text-center">
          <a href="{{ route('recent') }}" class="btn btn-brand">View all recent</a>
        </div>
      </div>
    </div> --}}


  </div>





@endsection
