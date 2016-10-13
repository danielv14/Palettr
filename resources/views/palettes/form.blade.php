{{-- Error handling --}}
@include('errors.list')

{!! Form::label('color1', 'First color') !!}
{!! Form::text('color1', null, ['class' => 'form-control']) !!}
<br>

{!! Form::label('color2', 'Second color') !!}
{!! Form::text('color2', null, ['class' => 'form-control']) !!}
<br>

{!! Form::label('color3', 'Third color') !!}
{!! Form::text('color3', null, ['class' => 'form-control']) !!}
<br>

{!! Form::label('color4', 'Fourth color') !!}
{!! Form::text('color4', null, ['class' => 'form-control']) !!}

<br>

{!! Form::submit($submit, ['class' => 'btn btn-brand center-block']) !!}
