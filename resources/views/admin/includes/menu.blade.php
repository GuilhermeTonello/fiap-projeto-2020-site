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
            <li class="">
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
              <a href="{{ action('UsuarioController@novo') }}" class="waves-effect waves-dark">
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
              <a href="{{ action('FuncionarioController@novo') }}" class="waves-effect waves-dark">
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
