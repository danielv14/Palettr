@if(count($errors))
  <div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      @if ($errors->has('color1'))
        <p>{{ $errors->first('color1', 'Please enter a valid color in the first box') }}</p>
      @endif
      @if ($errors->has('color2'))
        <p>{{ $errors->first('color2', 'Please enter a valid color in the second box') }}</p>
      @endif
      @if ($errors->has('color3'))
        <p>{{ $errors->first('color3', 'Please enter a valid color in the third box') }}</p>
      @endif
      @if ($errors->has('color4'))
        <p>{{ $errors->first('color4', 'Please enter a valid color in the fouth box') }}</p>
      @endif
  </div>
@endif
