<header id="navigation">
  <nav class="navbar">
    <a href="#" class="toggle" @click.prevent="openNav()">Menu</a>
    <div class="left">
      <a href="/" class="link brand">Palettr</a>
    </div>
    <div class="right">
      <a href="{{ route('popular') }}" class="link">Popular</a>
      <a href="{{ route('recent') }}" class="link">Recent</a>
      @if (Auth::guest())
        <a href="{{ url('/login') }}" class="link">Login</a>
      @else
        <a href="{{ url('profile') }}" class="link">Profile</a>
        <a href="{{ url('/logout') }}" class="link"
            onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
            Logout
        </a>
        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
      @endif
    </div>
  </nav>

  {{-- Overlay navigation used on smaller screens --}}
  <div id="overlayNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" @click.prevent="closeNav()">&times;</a>
    <div class="overlay-content">
      <a href="/" class="link">Home</a>
      <a href="{{ route('popular') }}" class="link">Popular</a>
      <a href="{{ route('recent') }}" class="link">Recent</a>
      @if (Auth::guest())
        <a href="{{ url('/login') }}" class="link">Login</a>
      @else
        <a href="{{ url('profile') }}" class="link">Profile</a>
        <a href="{{ url('/logout') }}" class="link"
            onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
            Logout
        </a>
        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
      @endif
    </div>
  </div>
</header>
