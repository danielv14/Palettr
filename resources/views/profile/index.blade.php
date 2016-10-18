@extends('layouts.app')

@section('hero-content')
  <img src="{{Gravatar::get(Auth::user()->email, 'large')}}" alt="" class="avatar avatar-lg avatar-border">
  <p>{{ Auth::user()->palettes()->count() }} palettes and <i class="fa fa-heart heart"></i> {{ $likes }}</p>
  <div class="text-center">
    <a href="{{ route('palettes.create') }}" class="btn btn-brand">Create palette</a>
  </div>
@endsection

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        @foreach ($palettes as $palette)
          <div class="col-md-4 col-lg-3">
            @include('partials.palette', [
              'actions' => true
            ])
          </div>

        @endforeach
      </div>
    </div>
  </div>
@endsection
