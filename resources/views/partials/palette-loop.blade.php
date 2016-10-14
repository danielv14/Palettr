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
      {{--
        Only display Update and delete buttons
        if auth and action are requested from parent view
      --}}
      @unless (Auth::guest())
        @if ($palette->user_id == Auth::user()->id && $actions == true)
          <span class="pull-right">
            <a href="{{ route('palettes.edit', $palette->id) }}" class="btn btn-success btn-sm btn-outline">Edit</a>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger btn-sm btn-outline" data-toggle="modal" data-target="#deleteModal">
              Delete
            </button>
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

{{-- Display a modal with delete functionality if actions are requested --}}
@unless (Auth::guest())
  @if ($palette->user_id == Auth::user()->id && $actions == true)
    <!-- Modal -->
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="modalLabel">Delete palette</h4>
        </div>
        <div class="modal-body lead">
          Are you sure you want to delete the palette?
          <br>
          This action cannot be reversed.
        </div>
        <div class="modal-footer">
          {!! Form::open([
            'method' => 'DELETE',
            'route' => ['palettes.destroy', $palette->id]
          ]) !!}
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
  @endif
@endunless
