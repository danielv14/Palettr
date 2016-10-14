@extends('layouts.app')

@section('hero-content')
  <img src="{{Gravatar::get($profile->email, 'large')}}" alt="" class="avatar avatar-lg avatar-border">
  <h2>Profile of {{ $profile->name }}</h2>
  <p>{{ $profile->palettes->count() }} Created palettes</p>
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h2 class="text-muted">All palettes</h2>
        @include('partials.palette-loop', ['palettes' => $profile->palettes])
      </div>
    </div>
  </div>
@endsection
