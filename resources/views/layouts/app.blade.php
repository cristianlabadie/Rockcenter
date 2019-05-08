<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/img/logorock.png')}}">
  <link rel="icon" type="image/png" href="{{ asset('/img/logorock.jpg')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>
    @yield('title','Rockcenter | La red de la música')
  </title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{ asset('css/material-kit.css?v=2.0.5') }}" rel="stylesheet" />
  @yield('styles')
</head>

<body class="@yield('body-class')">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="nav-bar-success" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="#">
          RockCenter </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>

      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">
                  <i class="material-icons">person</i>
                  {{ __('Ingresar') }}</a>
              </li>
              <li class="nav-item">
                  @if (Route::has('register'))
                      <a class="nav-link" href="{{ route('register') }}">
                      <i class="material-icons">description</i>
                      {{ __('Registro') }}</a>
                  @endif
              </li>
          @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
               <i class="material-icons">person</i> {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li class="active">
                    <a href="{{ url('/home') }}"><i class="material-icons">dashboard</i> Dashboard</a>
                </li>
                @if (auth()->user()->admin)
                <li>
                    <a href="{{ url('/admin/products') }}">
                    <i class="material-icons">collections</i> Gestionar productos</a>
                </li>
                <li>
                    <a href="{{ url('/admin/categories') }}">
                    <i class="material-icons">library_books</i> Gestionar categorías</a>
                </li>
                @endif
                <li>
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">

                    <i class="material-icons">power_settings_new</i> {{ __('Cerrar sesión') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                </li>
            </ul>
            <!--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Cerrar sesión') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                </form>
                            </div> -->
                        </li>
                    </ul>
                    @endguest
                   <!-- <li>
                        <a href="https://twitter.com/CreativeTim" target="_blank" class="btn btn-simple btn-white btn-just-icon">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/CreativeTim" target="_blank" class="btn btn-simple btn-white btn-just-icon">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/CreativeTimOfficial" target="_blank" class="btn btn-simple btn-white btn-just-icon">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
        </ul>
      </div>
    </div>
  </nav>





  <div class="wrapper">
       @yield('content')
  </div>





  <!--   Core JS Files   -->

  <script src="{{ asset('/js/core/jquery.min.js')}}" type="text/javascript"></script>
  <script src="{{ asset('/js/core/popper.min.js')}}" type="text/javascript"></script>
  <script src="{{ asset('/js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
  <script src="{{ asset('/js/plugins/moment.min.js')}}"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="{{ asset('/js/plugins/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ asset('/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <!--<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>-->
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('/js/material-kit.js?v=2.0.5')}}" type="text/javascript"></script>
  @yield('javascript')
</body>

</html>
