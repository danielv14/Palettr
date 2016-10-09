@extends('layouts.app')

@section('content')
  <h1>Viewing profile of {{ $profile->name }}</h1>

  <p>{{ $profile->name }} has {{ $profile->palettes->count() }} Palettes and they are:</p>
  <section class="palettes">
    @foreach ($profile->palettes as $palette)
      <p>{{ $palette->color1 }}, {{ $palette->color2 }}, {{ $palette->color3 }}, {{ $palette->color4 }}</p>
      <hr>
    @endforeach
  </section>
@endsection
