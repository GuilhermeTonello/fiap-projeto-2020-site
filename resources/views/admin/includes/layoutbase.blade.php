<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <title>Painel - {{ config('app.name', 'Laravel') }}</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="Painel de controle - Projeto FIAP 2020 - BBSeguros" />
  <meta name="keywords" content="Admin, control panel, panel, fiap, 2020, bbseguros, seguros, painel de controle, painel administrador, admin panel">
  <meta name="author" content="colorlib" />
  <!--
  <link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">
-->
  <link rel="shortcut icon" type="image/png" href="{{ secure_asset('/imagens/favicon.ico') }}">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

  @yield('stylesheet_sec')
  <!--link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/feather.css') }}">
  <link rel="stylesheet" href="{{ secure_asset('/css/waves.min.css') }}" type="text/css" media="all">
  <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/feather.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/font-awesome-n.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/jquery.steps.css') }}">
  <link rel="stylesheet" href="{{ secure_asset('/css/chartist.css') }}" type="text/css" media="all">
  <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/style2.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/widget.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/pages.css') }}" -->
</head>

<body>
  @guest
  <li class="nav-item">
    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
  </li>
  @else
  <div class="loader-bg">
    <div class="loader-bar"></div>
  </div>

  <div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

      <nav class="navbar header-navbar pcoded-header">
        <div class="navbar-wrapper">
          <div class="navbar-logo">
            <a href="{{ action('HomeController@index') }}">
              <img style="height: 80px;" class="img-fluid" src="{{ secure_asset('/imagens/Guardian_Logo.png') }}" alt="Theme-Logo" />
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="#!">
              <i class="feather icon-menu icon-toggle-right"></i>
            </a>
            <a class="mobile-options waves-effect waves-light">
              <i class="feather icon-more-horizontal"></i>
            </a>
          </div>
          <div class="navbar-container container-fluid">
            <ul class="nav-right">
              <li class="user-profile header-notification">
                <div class="dropdown-primary dropdown">
                  <div class="dropdown-toggle" data-toggle="dropdown">

                    <span>{{ Auth::user()->name }}</span>
                    <i class="feather icon-chevron-down"></i>
                  </div>
                  <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                    <li>
                      <i class="feather icon-log-out"></i>
                      <span onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</span>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="pcoded-main-container">
        <div class="pcoded-wrapper">

          @include('admin.includes.menu')

          <div class="pcoded-content">

              <div class="page-header card">
                  <div class="row align-items-end">
                      <div class="col-lg-8">
                          <div class="page-header-title">
                              <div class="d-inline">
                                  @yield('titulo')
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="pcoded-inner-content">
                  <div class="main-body">
                      <div class="page-wrapper">
                          <div class="page-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    @yield('conteudo')
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
              </div>
          </div>
          <div id="styleSelector"></div>

        </div>
      </div>
    </div>
  </div>
  @endguest
  @yield('scripts_foot')
  <!-- script data-cfasync="false" src="{{ secure_asset('/js/email-decode.min.js') }}"></script>
  <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{ secure_asset('/js/jquery.min.js') }}"></script>
  <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{ secure_asset('/js/jquery-ui.min.js') }}"></script>
  <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{ secure_asset('/js/popper.min.js') }}"></script>
  <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{ secure_asset('/js/bootstrap.min.js') }}"></script>

  <script src="{{ secure_asset('/js/waves.min.js') }}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

  <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{ secure_asset('/js/jquery.slimscroll.js') }}"></script>

  < !-- script src="{{ secure_asset('/js/jquery.flot.js') }}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
  <script src="{{ secure_asset('/js/jquery.flot.categories.js') }}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
  <script src="{{ secure_asset('/js/curvedlines.js') }}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
  <script src="{{ secure_asset('/js/jquery.flot.tooltip.min.js') }}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script >
  <script type="ce2668daaac54a74e9f6cdff-text/javascript" src="{{ secure_asset('/js/css-scrollbars.js') }}"></script>
  <script type="ce2668daaac54a74e9f6cdff-text/javascript" src="{{ secure_asset('/js/modernizr.js') }}"></script>
  <script src="{{ secure_asset('/js/jquery.cookie.js') }}" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>
  <script src="{{ secure_asset('/js/jquery.steps.js') }}" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>
  <script src="{{ secure_asset('/js/jquery.validate.js') }}" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>
  <script src="{{ secure_asset('/js/underscore-min.js') }}" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>
  <script src="{{ secure_asset('/js/moment.min.js') }}" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>
  <script type="ce2668daaac54a74e9f6cdff-text/javascript" src="{{ secure_asset('/js/validate.js') }}"></script>

  <script src="{{ secure_asset('/js/chartist.js') }}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

  <script src="{{ secure_asset('/js/amcharts.js') }}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
  <script src="{{ secure_asset('/js/serial.js') }}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
  <script src="{{ secure_asset('/js/light.js') }}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

  <script src="{{ secure_asset('/js/form-wizard.js') }}" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>
  <script src="{{ secure_asset('/js/pcoded.min.js') }}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
  <script src="{{ secure_asset('/js/vertical-layout.min.js') }}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
  <script src="{{ secure_asset('/js/jquery.mcustomscrollbar.concat.min.js') }}" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>
  <!--script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{ secure_asset('/js/custom-dashboard.min.js') }}"></script  >
  <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{ secure_asset('/js/script.min.js') }}"></script>

  <script src="{{ secure_asset('/js/rocket-loader.min.js') }}" data-cf-settings="d2d1d6e2f87cbebdf4013b26-|49" defer=""></script -->
</body>

</html>
