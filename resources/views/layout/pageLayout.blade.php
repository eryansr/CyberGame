<!DOCTYPE html>
<head>
    <title>@yield('title', 'TibiaMaracay')</title>
    <meta  charset="utf-8">
    <link href="{{ asset('PanelStyle/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('PanelStyle/css/style.css') }}" rel="stylesheet">
@yield("head")
</head>
<body id="dragon">
    <div id="page">
        <div id="header">
            <a id="logo" href="index.html"><img src="{{ asset('PanelStyle/images/logo.png') }}" alt=""></a>
            <ul class="navigation">
                <li class="first">
                    <a class="active" href="{{route('page.tibiaMcy')}}">Inicio</a>
                </li>
                <li>
                    <a href="myths.html">CyberGame Maracay</a>
                </li>
                <li  style="float: right; padding-right:40px;">
                    <a href="{{ route('login') }}">Sesion</a>
                </li>
            </ul>
          @yield("nav")
        </div>
        <div id="body">

          @yield("budy")
        </div>
        <div id="footer">
            <ul>
                <li>
                    <a href="about.html" class="video">&nbsp;</a>
                    <p style="text-align: center;">
                        Nuestras redes sociales
                    </p>
                </li>
                <li>
                    <a href="myths.html" class="myths">&nbsp;</a>
                    <p style="text-align: center;">
                        Nuestras redes sociales
                    </p>
                </li>
                <li class="last">
                    <a href="archives.html" class="archives">&nbsp;</a>
                    <p style="text-align: center;">
                        Nuestras redes sociales
                    </p>
                </li>
            </ul>
            <span>&copy; Copyright &copy;<script>document.write(new Date().getFullYear());</script>. <a href="index.html">@Eryansr</a> all rights reserved</span>
          @yield("footert") 
        </div>
      @yield("page")
    </div>
    <script src="{{ asset('PanelStyle/jquery.min.js') }}" ></script>
    <script src="{{ asset('PanelStyle/bootstrap.bundle.min.js') }}" ></script>
    <script type="text/javascript">
      var txt = 'Prueba Tibia.. '.split('');
      var delay = 450;
      function type() {
          for (i = 0; i < txt.length; i++) {
              setTimeout(function () {
                  $('.autoText').append(txt.shift());
              }, delay * i);
          }
          setTimeout(function(){
              $('.autoText').text('');
              type(txt = 'Prueba Tibia...'.split(''));
          }, delay * i + 1000);
      }
      type();
    </script>
  @yield("script")
</body>
</html>