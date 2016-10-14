@extends('layouts.app')

@section('hero-content')
  <img src="{{Gravatar::get(Auth::user()->email, 'large')}}" alt="" class="avatar avatar-lg">
  <h2>My profile</h2>
  <p>{{ Auth::user()->palettes()->count() }} Palettes and 3 favourites</p>
  <br>
  <div class="text-center">
    <a href="{{ route('palettes.create') }}" class="btn btn-brand">Create new palette</a>
  </div>

@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h2 class="text-muted">My palettes</h2>
        @include('partials.palette-loop', ['palettes' => Auth::user()->palettes()->get()])
      </div>
    </div>
  </div>
@endsection
