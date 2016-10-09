@extends('layouts.app')

@section('content')
  @if (Auth::check())
    <a href="{{ route('palettes.create') }}">Create new palette</a>
    <a href="{{ url('profile') }}">View my profile</a>
    <a href="{{ url('/logout') }}"
        onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
        Logout
    </a>
    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
  @endif
  <h1>Welcome to palettr</h1>
  <h2>All palettes</h2>

  @foreach ($palettes as $palette)
    <div class="palette">
      <p>Colors in palette: {{ $palette->color1 }}, {{ $palette->color2 }}, {{ $palette->color3 }}, {{ $palette->color4 }}</p>
      <p>Created by <a href="{{ route('profile', $palette->user->id) }}">{{ $palette->user->name }}</a></p>
      <hr>
    </div>
  @endforeach
@endsection
