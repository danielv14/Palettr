<div class="palette">
  <div class="palette-colors">
    <div class="box" id="{{$palette->color1}}" style="background-color: {{$palette->color1}}"></div>
    <div class="box" id="{{$palette->color2}}" style="background-color: {{$palette->color2}}"></div>
    <div class="box" id="{{$palette->color3}}" style="background-color: {{$palette->color3}}"></div>
    <div class="box" id="{{$palette->color4}}" style="background-color: {{$palette->color4}}"></div>
  </div>
  {{-- Display color vlaues --}}
  <div class="color-texts">
    <p id="{{ substr($palette->color1, 1) }}" style="color: {{ $palette->color1 }}">{{ $palette->color1 }}</p>
    <p id="{{ substr($palette->color2, 1) }}" style="color: {{ $palette->color2 }}">{{ $palette->color2 }}</p>
    <p id="{{ substr($palette->color3, 1) }}" style="color: {{ $palette->color3 }}">{{ $palette->color3 }}</p>
    <p id="{{ substr($palette->color4, 1) }}" style="color: {{ $palette->color4 }}">{{ $palette->color4 }}</p>
  </div>
  <div class="palette-info">
    {{--
      Only display Update and delete buttons
      if auth and action are requested from parent view
    --}}
    <span class="pull-right">
      <p class="text-muted palette-time">
        <i class="fa fa-clock-o" aria-hidden="true"></i>
        {{ $palette->created_at->diffForHumans() }}
      </p>
    </span>

    <p class="text-muted palette-time">
      <like :palette="{{$palette}}"></like>
    </p>

    @unless (Auth::guest())
      @if ($palette->user_id == Auth::user()->id && $actions == true)
          <div class="action-icons">
            <a href="{{ route('palettes.edit', $palette->id) }}">
              <i class="fa fa-pencil" aria-hidden="true"></i>
            </a>
            <span class="pull-right">
              <!-- Button trigger modal -->
              <a href="#" data-toggle="modal" data-target="#deleteModal">
                <i class="fa fa-trash" aria-hidden="true"></i>
              </a>
            </span>

          </div>
      @endif
    @endunless

  </div> {{-- end of palette info --}}
</div> {{-- end of palette card --}}

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
