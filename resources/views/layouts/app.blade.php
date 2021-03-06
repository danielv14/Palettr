<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') Palettr </title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">


      {{-- Header hero section --}}
      <section class="hero">
        {{-- Include navigation --}}
        @include('partials.navigation')
        <div class="hero-content-wrapper">
          <div class="hero-text">
            {{-- hero content is dynamic since its reused --}}
            @yield('hero-content')
          </div>
        </div>
      </section>

      @include('partials.flash')

      @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
