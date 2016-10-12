@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h2>Recent</h2>
        @foreach ($palettes as $palette)
          <div class="row">
            <div class="palette">
              <div class="palette-colors">
                <div class="box" style="background-color: {{$palette->color1}}"></div>
                <div class="box" style="background-color: {{$palette->color2}}"></div>
                <div class="box" style="background-color: {{$palette->color3}}"></div>
                <div class="box" style="background-color: {{$palette->color4}}"></div>
              </div>
              <div class="palette-info">
                <p>Created by <a href="{{ route('profile', $palette->user->id) }}">{{ $palette->user->name }}</a></p>
              </div>
            </div>
          </div>
        @endforeach
        <div class="text-center">
          <a href="#" class="btn btn-primary">View all popular</a>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h2>Popular</h2>
        @foreach ($palettes as $palette)
          <div class="row">
            <div class="palette">
              <div class="palette-colors">
                <div class="box" style="background-color: {{$palette->color1}}"></div>
                <div class="box" style="background-color: {{$palette->color2}}"></div>
                <div class="box" style="background-color: {{$palette->color3}}"></div>
                <div class="box" style="background-color: {{$palette->color4}}"></div>
              </div>
              <div class="palette-info">
                <p>Created by <a href="{{ route('profile', $palette->user->id) }}">{{ $palette->user->name }}</a></p>
              </div>
            </div>
          </div>
        @endforeach
        <div class="text-center">
          <a href="#" class="btn btn-primary">View all popular</a>
        </div>
      </div>
    </div>
  </div>





@endsection
