<div class="palette">

  <div class="palette-colors">
    {!! Form::text('color1', null, ['class' => 'box jscolor {hash: true}']) !!}
    {!! Form::text('color2', null, ['class' => 'box jscolor {hash: true}']) !!}
    {!! Form::text('color3', null, ['class' => 'box jscolor {hash: true}']) !!}
    {!! Form::text('color4', null, ['class' => 'box jscolor {hash: true}']) !!}

  </div>
  <br>
  {!! Form::submit($submit, ['class' => 'btn btn-brand center-block']) !!}
  <br>

</div>
