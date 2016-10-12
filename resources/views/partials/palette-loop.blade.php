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
