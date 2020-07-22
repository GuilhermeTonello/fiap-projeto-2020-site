@extends('admin.includes.layoutbase')

@section('stylesheet_sec')
    @include('admin.includes.css_principais')
@stop

@section('titulo')
    <h5>Home</h5>
    <span>Página inicial</span>
@stop

@section('conteudo')
<h2>Principal</h2>
<div class="row">
    <div class="col-sm-4">
        <a href="{{ action('HomeController@index') }}">
            <div class="card" style="width: 18rem;">
              <img src="https://emprad.org.br/wp-content/themes/consultix/images/no-image-found-360x260.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Home</h5>
                <p class="card-text">Página principal.</p>
              </div>
            </div>
        </a>
    </div>
    <div class="col-sm-4">
        <a href="{{ action('HomeController@index') }}">
            <div class="card" style="width: 18rem;">
              <img src="https://emprad.org.br/wp-content/themes/consultix/images/no-image-found-360x260.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Gameficação - Troféus</h5>
                <p class="card-text">Página sobre os troféus.</p>
              </div>
            </div>
        </a>
    </div>
    <div class="col-sm-4">
        <a href="{{ action('HomeController@index') }}">
            <div class="card" style="width: 18rem;">
              <img src="https://emprad.org.br/wp-content/themes/consultix/images/no-image-found-360x260.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Gameficação - Recompensas</h5>
                <p class="card-text">Página sobre as recompensas.</p>
              </div>
            </div>
        </a>
    </div>
    <div class="col-sm-4">
        <a href="{{ action('HomeController@index') }}">
            <div class="card" style="width: 18rem;">
              <img src="https://emprad.org.br/wp-content/themes/consultix/images/no-image-found-360x260.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Analytics - Reviews</h5>
                <p class="card-text">Página sobre as reviews.</p>
              </div>
            </div>
        </a>
    </div>
    <div class="col-sm-4">
        <a href="{{ action('HomeController@index') }}">
            <div class="card" style="width: 18rem;">
              <img src="https://emprad.org.br/wp-content/themes/consultix/images/no-image-found-360x260.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Analytics - Serviçoes mais utilizados</h5>
                <p class="card-text">Página sobre os serviços mais utilizados.</p>
              </div>
            </div>
        </a>
    </div>
</div>
<h2>Gerenciamento</h2>
<div class="row">
    <div class="col-sm-4">
        <a href="{{ action('AsseguradoController@novo') }}">
            <div class="card" style="width: 18rem;">
              <img src="https://emprad.org.br/wp-content/themes/consultix/images/no-image-found-360x260.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Assegurados - Novo assegurado</h5>
                <p class="card-text">Registrar novo assegurado.</p>
              </div>
            </div>
        </a>
    </div>
    <div class="col-sm-4">
        <a href="{{ action('HomeController@index') }}">
            <div class="card" style="width: 18rem;">
              <img src="https://emprad.org.br/wp-content/themes/consultix/images/no-image-found-360x260.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Assegurados - Lista</h5>
                <p class="card-text">Lista de assegurados registrados.</p>
              </div>
            </div>
        </a>
    </div>
    <div class="col-sm-4">
        <a href="{{ action('TerceiroController@novo') }}">
            <div class="card" style="width: 18rem;">
              <img src="https://emprad.org.br/wp-content/themes/consultix/images/no-image-found-360x260.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Terceiros - Novo terceiro</h5>
                <p class="card-text">Registrar novo terceiro.</p>
              </div>
            </div>
        </a>
    </div>
    <div class="col-sm-4">
        <a href="{{ action('HomeController@index') }}">
            <div class="card" style="width: 18rem;">
              <img src="https://emprad.org.br/wp-content/themes/consultix/images/no-image-found-360x260.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Terceiros - Lista</h5>
                <p class="card-text">Lista de terceiros registrados.</p>
              </div>
            </div>
        </a>
    </div>
    <div class="col-sm-4">
        <a href="{{ action('HomeController@index') }}">
            <div class="card" style="width: 18rem;">
              <img src="https://emprad.org.br/wp-content/themes/consultix/images/no-image-found-360x260.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Empresas - Nova empresa</h5>
                <p class="card-text">Registrar nova empresa.</p>
              </div>
            </div>
        </a>
    </div>
    <div class="col-sm-4">
        <a href="{{ action('HomeController@index') }}">
            <div class="card" style="width: 18rem;">
              <img src="https://emprad.org.br/wp-content/themes/consultix/images/no-image-found-360x260.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Empresas - Lista</h5>
                <p class="card-text">Lista de empresas registradas.</p>
              </div>
            </div>
        </a>
    </div>
</div>
<h2>Apólices</h2>
<div class="row">
    <div class="col-sm-4">
        <a href="{{ action('HomeController@index') }}">
            <div class="card" style="width: 18rem;">
              <img src="https://emprad.org.br/wp-content/themes/consultix/images/no-image-found-360x260.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Apólices - Automóvel</h5>
                <p class="card-text">Página sobre seguro de automóveis.</p>
              </div>
            </div>
        </a>
    </div>
    <div class="col-sm-4">
        <a href="{{ action('HomeController@index') }}">
            <div class="card" style="width: 18rem;">
              <img src="https://emprad.org.br/wp-content/themes/consultix/images/no-image-found-360x260.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Apólices - Residência</h5>
                <p class="card-text">Página sobre seguro residencial.</p>
              </div>
            </div>
        </a>
    </div>
    <div class="col-sm-4">
        <a href="{{ action('HomeController@index') }}">
            <div class="card" style="width: 18rem;">
              <img src="https://emprad.org.br/wp-content/themes/consultix/images/no-image-found-360x260.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Apólices - Empresa</h5>
                <p class="card-text">Página sobre seguro empresarial.</p>
              </div>
            </div>
        </a>
    </div>
    <div class="col-sm-4">
        <a href="{{ action('HomeController@index') }}">
            <div class="card" style="width: 18rem;">
              <img src="https://emprad.org.br/wp-content/themes/consultix/images/no-image-found-360x260.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Apólices - Vida</h5>
                <p class="card-text">Página sobre seguro de vida.</p>
              </div>
            </div>
        </a>
    </div>
</div>
@stop

@section('scripts_foot')
    @include('admin.includes.scripts_principais')
@stop
