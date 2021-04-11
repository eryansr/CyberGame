@guest
  <li><a href="{{ route('login') }}">Login</a></li>
  <li><a href="{{ route('register') }}">Register</a></li>
  <h2>Whoops! Vuelve a iniciar sesion..</h2>
@else
@if(Auth::user()->role == "admin")
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

 <title>@yield('title', 'CyberGame')</title>
  
  <link href="{{ asset('PanelStyle/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('PanelStyle/simple-sidebar.css') }}" rel="stylesheet">
  <link href="{{ asset('PanelStyle/jquery.dataTables.min.css') }}" rel="stylesheet" >

@yield("head")
</head>
<body>
  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Cyber Gaming</div>
      <div class="list-group list-group-flush">
        <a href="{{route('admin.index')}}" class="list-group-item list-group-item-action bg-light">Inicio</a>
        <a href="{{route('admin.gamers')}}" class="list-group-item list-group-item-action bg-light">Gamers</a>
      </div>
      @yield("slider")
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               {{ Auth::user()->name }}
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                      Salir
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
              </div>
            </li>
          </ul>
        </div>
        @yield("nav")
      </nav>

      <div class="container-fluid">

      @yield("container")
      </div>
    @yield("page")
    </div>
    <!-- /#page-content-wrapper -->
  @yield("wrapper")
  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('PanelStyle/jquery.min.js') }}" ></script>
  <script src="{{ asset('PanelStyle/bootstrap.bundle.min.js') }}" ></script>
  <script src="{{ asset('PanelStyle/jquery.dataTables.min.js') }}"></script>


  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
@yield("script")
</body>

</html>
@endif
@endguest
