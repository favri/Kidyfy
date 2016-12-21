<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('titulo') - Kidyfy</title>

    <!-- Styles -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/stylesfaq.css">
    <link rel="stylesheet" href="/css/lightbox.css"/>
    <link rel="stylesheet" href="/css/justifiedGallery.min.css" />

    <!-- Scripts -->
    <script>
        window.laravel = @php echo json_encode([
                'csrfToken' => csrf_token(),
            ]);
            @endphp
    </script>

</head>
<body class="bkg-grey">
  <div id="app">
    <nav id="nav" class="navbar navbar-default navbar-static-top bkg-white shw-nav nav-fixed">
      <div class="container">
        <div class="navbar-header">

          <!-- Collapsed Hamburger -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
              <span class="sr-only">Toggle Navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>

          <!-- Branding Image -->
          <a class="navbar-brand" href="{{ url('/') }}">
              <img src="/img/logo-mashup.png" height="60" alt"logo-kidyfy">
          </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
          <!-- Left Side Of Navbar -->
          <ul class="nav navbar-nav">
              &nbsp;
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="nav navbar-nav navbar-right">
              <!-- Authentication Links -->
              @if (Auth::guest())
                  <li><a href="{{ url('/login') }}" class="font-size-large">INGRESAR</a></li>
                  <li><a href="{{ url('/register') }}" class="font-size-large">REGISTRARSE</a></li>
              @else
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <ul class="dropdown-menu" role="menu">
                          <li>
                              <a href="/registro/{{Auth::user()->id }}/editar"
                                  onclick="event.preventDefault();
                                           document.getElementById('useredit-form').submit();">
                                  Editar Perfil
                              </a>

                              <form id="useredit-form" action="/registro/{{Auth::user()->id}}/editar" method="GET" style="display: none;">
                                  {{ csrf_field() }}
                              </form>
                          </li>
                          <li>
                              <a href="/posteo/{{Auth::user()->id }}/editar"
                                  onclick="event.preventDefault();
                                           document.getElementById('postedit-form').submit();">
                                  Mis Posteos
                              </a>

                              <form id="postedit-form" action="/posteo/{{Auth::user()->id }}/editar" method="GET" style="display: none;">
                                  {{ csrf_field() }}
                              </form>
                          </li>
                          <li>
                              <a href="{{ url('/logout') }}"
                                  onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                  Cerrar sesión
                              </a>

                              <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                                  {{-- {{ method_field('post') }} --}}
                              </form>
                          </li>
                      </ul>
                  </li>
              @endif
          </ul>
        </div>
      </div>
    </nav>
  @yield('content')
  </div>

  <!-- Scripts -->
  <script src="/js/app.js"></script>
  <script src="/js/controlesjs.js"></script>
  <script src="/js/faq.js"></script>
  <script src="/js/main.6054e11b.js"></script>
  <script src="/js/jquery.custom-file-input.js"></script>
  <script src="/js/jquery-v1.min"></script>
  <script src="js/jquery.justifiedGallery.min.js"></script>
  <script src="/js/lightbox-plus-jquery.js"></script>
  <script>
            lightbox.option({
                'fitImagesInViewport': true,
                'resizeDuration' : 200,
                'wrapAround' : true,
                'maxHeight': 500,
            });
        </script>
  {{-- <script
			  src="https://code.jquery.com/jquery-3.1.1.min.js"
			  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
			  crossorigin="anonymous"></script> --}}
  {{-- <script src="js/chat.js"></script> --}}
</body>
</html>
