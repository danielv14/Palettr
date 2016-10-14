
<div class="form-group{{ $errors->has('color1') ? ' has-error' : '' }}">
  {!! Form::label('color1', 'First color') !!}
  {!! Form::text('color1', null, ['class' => 'form-control']) !!}
  @if ($errors->has('color1'))
      <span class="help-block">
          <strong>{{ $errors->first('color1') }}</strong>
      </span>
  @endif
</div>

<br>
<div class="form-group{{ $errors->has('color2') ? ' has-error' : '' }}">
  {!! Form::label('color2', 'Second color') !!}
  {!! Form::text('color2', null, ['class' => 'form-control']) !!}
  @if ($errors->has('color2'))
      <span class="help-block">
          <strong>{{ $errors->first('color2') }}</strong>
      </span>
  @endif
</div>

<br>
<div class="form-group{{ $errors->has('color3') ? ' has-error' : '' }}">
  {!! Form::label('color3', 'Third color') !!}
  {!! Form::text('color3', null, ['class' => 'form-control']) !!}
  @if ($errors->has('color3'))
      <span class="help-block">
          <strong>{{ $errors->first('color3') }}</strong>
      </span>
  @endif
</div>

<br>
<div class="form-group{{ $errors->has('color4') ? ' has-error' : '' }}">
  {!! Form::label('color4', 'Fourth color') !!}
  {!! Form::text('color4', null, ['class' => 'form-control']) !!}
  @if ($errors->has('color4'))
      <span class="help-block">
          <strong>{{ $errors->first('color4') }}</strong>
      </span>
  @endif

</div>

<br>

{!! Form::submit($submit, ['class' => 'btn btn-brand center-block']) !!}
