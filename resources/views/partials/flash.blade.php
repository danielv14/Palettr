@if (Session::has('flash_message'))
  <div id="flash" class="alert alert-custom {{ Session::get('alert-class', 'alert-info') }}" role="alert">
    <p>
      {{ session('flash_message') }}
    </p>
  </div>
@endif
