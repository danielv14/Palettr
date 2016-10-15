@extends('layouts.app')

@section('hero-content')
  <img src="{{Gravatar::get($profile->email, 'large')}}" alt="" class="avatar avatar-lg avatar-border">
  <h2>{{ $profile->name }}</h2>
  <p>{{ $profile->palettes->count() }} palettes created</p>
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h2 class="text-muted">{{ $profile->name }}'s palettes</h2>
        @include('partials.palette-loop', [
          'palettes' => $profile->palettes,
          'actions' => false
        ])
      </div>
    </div>
  </div>
@endsection
