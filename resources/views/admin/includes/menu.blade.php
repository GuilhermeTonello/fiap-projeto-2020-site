<nav class="pcoded-navbar">
  <div class="nav-list">
    <div class="pcoded-inner-navbar main-menu">
      <div class="pcoded-navigation-label">Principal</div>
      <ul class="pcoded-item pcoded-left-item">
        <li class="pcoded-hasmenu "><!-- active pcoded-trigger -->
          <a href="javascript:void(0)" class="waves-effect waves-dark">
            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
            <span class="pcoded-mtext">Home</span>
          </a>
          <ul class="pcoded-submenu">
            <li class="">
              <a href="{{ action('HomeController@index') }}" class="waves-effect waves-dark">
                <span class="pcoded-mtext">Página inicial</span>
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
              <a href="{{ action('TrofeusController@novo') }}" class="waves-effect waves-dark">
                <span class="pcoded-mtext">Troféus</span>
              </a>
            </li>
            <li class="">
              <a href="{{ action('RecompensasController@novo') }}" class="waves-effect waves-dark">
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
              <a href="{{ action('ReviewsController@novo') }}" class="waves-effect waves-dark">
                <span class="pcoded-mtext">Reviews</span>
              </a>
            </li>
            <li class="">
              <a href="{{ action('ServicosMaisUtilizadosController@novo') }}" class="waves-effect waves-dark">
                <span class="pcoded-mtext">Serviços mais utilizados</span>
              </a>
            </li>
          </ul>
        </li>
      </ul>

      <div class="pcoded-navigation-label">Gerenciamento</div>
      <ul class="pcoded-item pcoded-left-item">
        <li class="pcoded-hasmenu <?php echo ((Config::get('vars.controller') == "AsseguradoController")?"active pcoded-trigger":""); ?>">
          <a href="javascript:void(0)" class="waves-effect waves-dark">
            <span class="pcoded-micon">
                <i class="fa fa-users" aria-hidden="true"></i>
            </span>
            <span class="pcoded-mtext">Assegurados</span>
          </a>
          <ul class="pcoded-submenu">
            <li class="<?php if(Config::get('vars.controller') == "AsseguradoController"){echo ((Config::get('vars.view') == "novo")?"active":"");} ?>">
              <a href="{{ action('AsseguradoController@novo') }}" class="waves-effect waves-dark">
                <span class="pcoded-mtext">Novo assegurado</span>
              </a>
            </li>
            <li class="<?php if(Config::get('vars.controller') == "AsseguradoController"){echo ((Config::get('vars.view') == "lista")?"active":"");} ?>">
              <a href="{{ action('AsseguradoController@lista') }}" class="waves-effect waves-dark">
                <span class="pcoded-mtext">Lista de assegurados</span>
              </a>
            </li>
          </ul>
        </li>
        <li class="pcoded-hasmenu <?php echo ((Config::get('vars.controller') == "TerceiroController")?"active pcoded-trigger":""); ?>">
          <a href="javascript:void(0)" class="waves-effect waves-dark">
            <span class="pcoded-micon">
                <i class="fa fa-briefcase" aria-hidden="true"></i>
            </span>
            <span class="pcoded-mtext">Terceiros</span>
          </a>
          <ul class="pcoded-submenu">
            <li class="<?php if(Config::get('vars.controller') == "TerceiroController"){echo ((Config::get('vars.view') == "novo")?"active":"");} ?>">
              <a href="{{ action('TerceiroController@novo') }}" class="waves-effect waves-dark">
                <span class="pcoded-mtext">Novo terceiro</span>
              </a>
            </li>
            <li class="<?php if(Config::get('vars.controller') == "TerceiroController"){echo ((Config::get('vars.view') == "lista")?"active":"");} ?>">
              <a href="{{ action('TerceiroController@lista') }}" class="waves-effect waves-dark">
                <span class="pcoded-mtext">Lista de terceiros</span>
              </a>
            </li>
          </ul>
        </li>
        <li class="pcoded-hasmenu <?php echo ((Config::get('vars.controller') == "EmpresaController")?"active pcoded-trigger":""); ?>">
          <a href="javascript:void(0)" class="waves-effect waves-dark">
            <span class="pcoded-micon">
                <i class="fa fa-building" aria-hidden="true"></i>
            </span>
            <span class="pcoded-mtext">Empresas</span>
          </a>
          <ul class="pcoded-submenu">
            <li class="<?php if(Config::get('vars.controller') == "EmpresaController"){echo ((Config::get('vars.view') == "novo")?"active":"");} ?>">
              <a href="{{ action('EmpresaController@novo') }}" class="waves-effect waves-dark">
                <span class="pcoded-mtext">Nova empresa</span>
              </a>
            </li>
            <li class="<?php if(Config::get('vars.controller') == "EmpresaController"){echo ((Config::get('vars.view') == "lista")?"active":"");} ?>">
              <a href="{{ action('EmpresaController@lista') }}" class="waves-effect waves-dark">
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
              <a href="{{ action('ApoliceController@index_automovel') }}" class="waves-effect waves-dark">
                <span class="pcoded-mtext">Seguro de automóvel</span>
              </a>
            </li>
            <li class="">
              <a href="{{ action('ApoliceController@index_residencial') }}" class="waves-effect waves-dark">
                <span class="pcoded-mtext">Seguro residencial</span>
              </a>
            </li>
            <li class="">
              <a href="{{ action('ApoliceController@index_empresarial') }}" class="waves-effect waves-dark">
                <span class="pcoded-mtext">Seguro empresarial</span>
              </a>
            </li>
            <li class="">
              <a href="{{ action('ApoliceController@index_vida') }}" class="waves-effect waves-dark">
                <span class="pcoded-mtext">Seguro de vida</span>
              </a>
            </li>
          </ul>
        </li>
      </ul>

    </div>
  </div>
</nav>
