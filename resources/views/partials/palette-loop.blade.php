@foreach ($palettes as $palette)
  <div class="palette">
    <div class="palette-colors">
      <div class="box" style="background-color: {{$palette->color1}}"></div>
      <div class="box" style="background-color: {{$palette->color2}}"></div>
      <div class="box" style="background-color: {{$palette->color3}}"></div>
      <div class="box" style="background-color: {{$palette->color4}}"></div>
    </div>
    {{-- Display color vlaues --}}
    <div class="color-texts">
      <p style="color: {{ $palette->color1 }}">{{ $palette->color1 }}</p>
      <p style="color: {{ $palette->color2 }}">{{ $palette->color2 }}</p>
      <p style="color: {{ $palette->color3 }}">{{ $palette->color3 }}</p>
      <p style="color: {{ $palette->color4 }}">{{ $palette->color4 }}</p>
    </div>
    <div class="palette-info">
      @unless (Auth::guest())
        @if ($palette->user_id == Auth::user()->id)
          <span class="pull-right">
            {!! Form::open([
              'method' => 'DELETE',
              'route' => ['palettes.destroy', $palette->id]
            ]) !!}
            <a href="{{ route('palettes.edit', $palette->id) }}" class="btn btn-success btn-sm btn-outline">Edit</a>
              {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm btn-outline']) !!}
            {!! Form::close() !!}
          </span>
        @endif
      @endunless
      <a class="text-muted" href="{{ route('profile', $palette->user->id) }}">
        <img class="avatar avatar-sm" src="{{ Gravatar::get($palette->user->email, 'small') }}" alt="avatar">
        {{ $palette->user->name }}
      </a>
      <p class="text-muted">{{ $palette->created_at->diffForHumans() }}</p>
    </div>
  </div>
@endforeach
