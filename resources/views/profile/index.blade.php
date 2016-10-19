@extends('layouts.app')

@section('hero-content')
  <img src="{{Gravatar::get(Auth::user()->email, 'large')}}" alt="" class="avatar avatar-lg avatar-border">
  <p>{{ $palettes->count() }} palettes and <i class="fa fa-heart heart"></i> {{ $likes }}</p>
  <div class="text-center">
    <a href="{{ route('palettes.create') }}" class="btn btn-brand">Create palette</a>
  </div>
@endsection

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        @if ($palettes->count() > 0)
          @foreach ($palettes as $palette)
            <div class="col-md-4 col-lg-3">
              @include('partials.palette', [
                'actions' => true
              ])
            </div>
          @endforeach
        @else
          <h2 class="text-muted text-center">You have not created any palettes yet</h2>
        @endif

      </div>
    </div>
  </div>
@endsection
