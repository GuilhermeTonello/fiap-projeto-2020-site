<?php
$controller = 'EmpresaController';
$view = 'novo';
Config::set('vars.controller', $controller);
Config::set('vars.view', $view);
?>
@extends('admin.includes.layoutbase')

@section('stylesheet_sec')
    @include('admin.includes.css_principais')
@stop

@section('titulo')
<h5>Editando empresa TESTE</h5>
<span>Página para edição de uma empresa</span>
@stop

@section('conteudo')
<div class="card">
  <div class="card-block">

      @if(count($errors) > 0)
          <div class="alert alert-danger">
              <ul>
                  @foreach($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif

      @if(Session::has('sucesso'))
          <div class="alert alert-success">
              {{ Session::get('sucesso') }}
          </div>
      @endif

        <form action="{{ action('EmpresaController@adiciona') }}" method="post">
            @csrf
            <h4 class="sub-title">Informações da empresa</h4>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="nome-fantasia">Nome fantasia</label>
            <div class="col-sm-10">
              <input value="{{ old('nome_fantasia') }}" placeholder="Nome fantasia" type="text" class="form-control" id="nome-fantasia" name="nome_fantasia">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="razao-social">Razão social</label>
            <div class="col-sm-10">
              <input value="{{ old('razao_social') }}" placeholder="Nome fantasia" type="text" class="form-control" id="razao-social" name="razao_social">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="cnpj">CNPJ</label>
            <div class="col-sm-10">
              <input aria-describedby="cnpj-help" placeholder="CNPJ" type="text" class="form-control" id="cnpj" name="cnpj">
              <small value="{{ old('cnpj') }}" id="cnpj-help" class="form-text text-muted">
                Insira no seguinte formato: XXXXXXXXX. Exemplo: 96501677000182.
              </small>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="email">E-Mail</label>
            <div class="col-sm-10">
              <input aria-describedby="email-help" placeholder="E-Mail" type="text" class="form-control" id="email" name="email">
              <small value="{{ old('email') }}" id="email-help" class="form-text text-muted">
                Insira no seguinte formato: exemplo@email.com. Exemplo: maria@gmail.com
              </small>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="telefone">Telefone</label>
            <div class="col-sm-10">
              <input value="{{ old('telefone') }}" aria-describedby="telefone-help" placeholder="Telefone" type="text" class="form-control" id="telefone" name="telefone">
              <small id="telefone-help" class="form-text text-muted">
                Insira no seguinte formato: XX XXXXXXXXX. Exemplo: 11 123456789
              </small>
            </div>
          </div>
          <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="autorizante">Autorizante</label>
              <div class="col-sm-10">
                  <select id="autorizante" name="autorizante" class="form-control fill">
                      <option value="nao-informado" selected disabled>SELECIONE</option>
                      <?php
                        use Illuminate\Support\Facades\DB;
                      ?>
                      @foreach(DB::select('SELECT * FROM assegurados') as $a)
                          <option value="{{ $a->id }}">{{ $a->email }}</option>
                      @endforeach
                  </select>
              </div>
          </div>
          <br />
          <h4 class="sub-title">Endereço</h4>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="cep">CEP</label>
            <div class="col-sm-10">
              <input value="{{ old('cep') }}" aria-describedby="cep-help" placeholder="CEP" type="text" class="form-control" id="cep" name="cep">
              <small id="cep-help" class="form-text text-muted">
                Insira no seguinte formato: XXXXXXXX. Exemplo: 01001000
              </small>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="logradouro">Logradouro</label>
            <div class="col-sm-10">
              <input value="{{ old('logradouro') }}" placeholder="Logradouro" type="text" class="form-control" id="logradouro" name="logradouro">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="bairro">Bairro</label>
            <div class="col-sm-10">
              <input value="{{ old('bairro') }}" placeholder="Complemento" type="text" class="form-control" id="bairro" name="bairro">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="complemento">Complemento</label>
            <div class="col-sm-10">
              <input value="{{ old('complemento') }}" placeholder="Complemento" type="text" class="form-control" id="complemento" name="complemento">
            </div>
          </div>
          <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="uf">UF</label>
              <div class="col-sm-10">
                  <select id="uf" name="uf" class="form-control fill">
                      <option value="nao-informado" selected disabled>SELECIONE</option>
                      <option value="AC">Acre</option>
                      <option value="AL">Alagoas</option>
                      <option value="AP">Amapá</option>
                      <option value="AM">Amazonas</option>
                      <option value="BA">Bahia</option>
                      <option value="CE">Ceará</option>
                      <option value="DF">Distrito Federal</option>
                      <option value="ES">Espirito Santo</option>
                      <option value="GO">Goiás</option>
                      <option value="MA">Maranhão</option>
                      <option value="MS">Mato Grosso do Sul</option>
                      <option value="MT">Mato Grosso</option>
                      <option value="MG">Minas Gerais</option>
                      <option value="PA">Pará</option>
                      <option value="PB">Paraíba</option>
                      <option value="PR">Paraná</option>
                      <option value="PE">Pernambuco</option>
                      <option value="PI">Piauí</option>
                      <option value="RJ">Rio de Janeiro</option>
                      <option value="RN">Rio Grande do Norte</option>
                      <option value="RS">Rio Grande do Sul</option>
                      <option value="RO">Rondônia</option>
                      <option value="RR">Roraima</option>
                      <option value="SC">Santa Catarina</option>
                      <option value="SP">São Paulo</option>
                      <option value="SE">Sergipe</option>
                      <option value="TO">Tocantins</option>
                  </select>
              </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="cidade">Cidade</label>
            <div class="col-sm-10">
              <input value="{{ old('cidade') }}" placeholder="Complemento" type="text" class="form-control" id="cidade" name="cidade">
            </div>
          </div>
          <br />
          <h4 class="sub-title">Finalizar cadastro</h4>
          <div class="form-group row">
            <div class="col-sm-4">
              <button type="submit" class="btn btn-primary">Finalizar edição</button>
            </div>
          </div>
        </form>
    </div>
</div>
@stop
@section('scripts_foot')
    @include('admin.includes.scripts_principais')
@stop
