@foreach ($palettes as $palette)
  <div class="palette">
    <div class="palette-colors">
      <div class="box" style="background-color: {{$palette->color1}}"></div>
      <div class="box" style="background-color: {{$palette->color2}}"></div>
      <div class="box" style="background-color: {{$palette->color3}}"></div>
      <div class="box" style="background-color: {{$palette->color4}}"></div>
    </div>
    <div class="palette-info">

      @unless (Auth::guest())
        @if ($palette->user_id == Auth::user()->id)
          <span class="pull-right">
            {!! Form::open([
              'method' => 'DELETE',
              'route' => ['palettes.destroy', $palette->id]
            ]) !!}
            <a href="{{ route('palettes.edit', $palette->id) }}" class="btn btn-success btn-outline">Edit</a>
              {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-outline']) !!}
            {!! Form::close() !!}
          </span>
        @endif
      @endunless


      <p class="text-muted">Created by <a href="{{ route('profile', $palette->user->id) }}">{{ $palette->user->name }}</a></p>
      <p class="text-muted">{{ $palette->created_at->diffForHumans() }}</p>
    </div>
  </div>
@endforeach
