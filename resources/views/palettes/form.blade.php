<div class="palette">

  <div class="palette-colors">
    {!! Form::text('color1', '#D5D5D5', ['class' => 'box jscolor {hash: true}']) !!}
    {!! Form::text('color2', '#C1C1C1', ['class' => 'box jscolor {hash: true}']) !!}
    {!! Form::text('color3', '#ADADAD', ['class' => 'box jscolor {hash: true}']) !!}
    {!! Form::text('color4', '#9A9A9A', ['class' => 'box jscolor {hash: true}']) !!}

  </div>
  <br>
  {!! Form::submit($submit, ['class' => 'btn btn-brand center-block']) !!}
  <br>
</div>
