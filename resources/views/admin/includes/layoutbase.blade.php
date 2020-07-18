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
  <link rel="shortcut icon" type="image/png" href="imagens/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

  <link rel="stylesheet" href="css/waves.min.css" type="text/css" media="all">

  <link rel="stylesheet" type="text/css" href="css/feather.css">

  <link rel="stylesheet" type="text/css" href="css/font-awesome-n.min.css">

  <link rel="stylesheet" href="css/chartist.css" type="text/css" media="all">

  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/widget.css">
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
            <a href="index.html">
              <img style="height: 80px;" class="img-fluid" src="imagens/Guardian_Logo.png" alt="Theme-Logo" />
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

          <nav class="pcoded-navbar">
            <div class="nav-list">
              <div class="pcoded-inner-navbar main-menu">
                <div class="pcoded-navigation-label">Principal</div>
                <ul class="pcoded-item pcoded-left-item">
                  <li class="pcoded-hasmenu active pcoded-trigger">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                      <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                      <span class="pcoded-mtext">Home</span>
                    </a>
                    <ul class="pcoded-submenu">
                      <li class="active">
                        <a href="{{ action('HomeController@index') }}" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Default</span>
                        </a>
                      </li>
                      <li class="">
                        <a href="dashboard-crm.html" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">CRM</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                      <span class="pcoded-micon">
                        <i class="fa fa-gamepad"></i>
                      </span>
                      <span class="pcoded-mtext">Gameficação</span>
                    </a>
                    <ul class="pcoded-submenu">
                      <li class="">
                        <a href="widget-statistic.html" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Troféus</span>
                        </a>
                      </li>
                      <li class="">
                        <a href="widget-data.html" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Recompensas</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                      <span class="pcoded-micon">
                        <i class="feather icon-activity"></i>
                      </span>
                      <span class="pcoded-mtext">Analytics</span>
                    </a>
                    <ul class="pcoded-submenu">
                      <li class="">
                        <a href="widget-statistic.html" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Reviews</span>
                        </a>
                      </li>
                      <li class="">
                        <a href="widget-data.html" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Serviços mais utilizados</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>

                <div class="pcoded-navigation-label">Gerenciamento</div>
                <ul class="pcoded-item pcoded-left-item">
                  <li class="pcoded-hasmenu ">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                      <span class="pcoded-micon">
                          <i class="fa fa-users" aria-hidden="true"></i>
                      </span>
                      <span class="pcoded-mtext">Pessoas</span>
                    </a>
                    <ul class="pcoded-submenu">
                      <li class="">
                        <a href="chart-google.html" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Nova pessoa</span>
                        </a>
                      </li>
                      <li class="">
                        <a href="chart-chartjs.html" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Lista de pessoas</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="pcoded-hasmenu ">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                      <span class="pcoded-micon">
                          <i class="fa fa-briefcase" aria-hidden="true"></i>
                      </span>
                      <span class="pcoded-mtext">Funcionários</span>
                    </a>
                    <ul class="pcoded-submenu">
                      <li class="">
                        <a href="map-google.html" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Novo funcionário</span>
                        </a>
                      </li>
                      <li class="">
                        <a href="map-google.html" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Lista de funcionários</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="pcoded-hasmenu ">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                      <span class="pcoded-micon">
                          <i class="fa fa-building" aria-hidden="true"></i>
                      </span>
                      <span class="pcoded-mtext">Empresas</span>
                    </a>
                    <ul class="pcoded-submenu">
                      <li class="">
                        <a href="map-google.html" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Nova empresa</span>
                        </a>
                      </li>
                      <li class="">
                        <a href="map-google.html" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Lista de empresas</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="pcoded-hasmenu ">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                      <span class="pcoded-micon">
                          <i class="fas fa-folder-open" aria-hidden="true"></i>
                      </span>
                      <span class="pcoded-mtext">Apólices</span>
                    </a>
                    <ul class="pcoded-submenu">
                      <li class="">
                        <a href="map-google.html" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Seguro de automóvel</span>
                        </a>
                      </li>
                      <li class="">
                        <a href="map-google.html" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Seguro residencial</span>
                        </a>
                      </li>
                      <li class="">
                        <a href="map-google.html" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Seguro empresarial</span>
                        </a>
                      </li>
                      <li class="">
                        <a href="map-google.html" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Seguro de vida</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>

              </div>
            </div>
          </nav>

          <div class="pcoded-content">
              <div class="pcoded-inner-content">
                  <div class="main-body">
                      <div class="page-wrapper">
                          <div class="page-body">
                            <div class="row">
                                @yield('conteudo')
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

  <script data-cfasync="false" src="js/email-decode.min.js"></script>
  <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="js/jquery.min.js"></script>
  <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="js/jquery-ui.min.js"></script>
  <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="js/popper.min.js"></script>
  <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="js/bootstrap.min.js"></script>

  <script src="js/waves.min.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

  <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="js/jquery.slimscroll.js"></script>

  <script src="js/jquery.flot.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
  <script src="js/jquery.flot.categories.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
  <script src="js/curvedlines.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
  <script src="js/jquery.flot.tooltip.min.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

  <script src="js/chartist.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

  <script src="js/amcharts.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
  <script src="js/serial.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
  <script src="js/light.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

  <script src="js/pcoded.min.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
  <script src="js/vertical-layout.min.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
  <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="js/custom-dashboard.min.js"></script>
  <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="js/script.min.js"></script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
  <script type="d2d1d6e2f87cbebdf4013b26-text/javascript">
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>
  <script src="js/rocket-loader.min.js" data-cf-settings="d2d1d6e2f87cbebdf4013b26-|49" defer=""></script>
</body>

</html>
