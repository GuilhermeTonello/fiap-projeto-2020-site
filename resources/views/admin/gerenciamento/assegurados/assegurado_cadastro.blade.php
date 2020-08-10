<?php
$controller = 'AsseguradoController';
$view = 'novo';
Config::set('vars.controller', $controller);
Config::set('vars.view', $view);
?>
@extends('admin.includes.layoutbase')

@section('stylesheet_sec')
    @include('admin.includes.css_principais')
@stop

@section('titulo')
    <h5>Cadastro de pessoa</h5>
    <span>Página para cadastro de uma nova pessoa</span>
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

        <form action="{{ action('AsseguradoController@adiciona') }}" method="post">
            @csrf
            <h4 class="sub-title">Informações pessoais</h4>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="primeiro-nome">Primeiro nome</label>
            <div class="col-sm-10">
              <input value="{{ old('primeiro_nome') }}" placeholder="Primeiro nome" type="text" class="form-control" id="primeiro-nome" name="primeiro_nome">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="sobrenome">Sobrenome</label>
            <div class="col-sm-10">
              <input value="{{ old('sobrenome') }}" placeholder="Sobrenome" type="text" class="form-control" id="sobrenome" name="sobrenome">
            </div>
          </div>
          <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="sexo">Sexo</label>
              <div class="col-sm-10">
                  <select id="sexo" name="sexo" class="form-control fill" onchange="habilitarCamposLGBT();">
                      <option value="nao-informado" selected disabled>SELECIONE</option>
                      <option value="Masculino">Masculino</option>
                      <option value="Feminino">Feminino</option>
                      <option value="Outro">Outro</option>
                      <option value="Prefiro não dizer">Prefiro não dizer</option>
                  </select>
              </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="nome-social">Nome social</label>
            <div class="col-sm-10">
              <input value="{{ old('nome_social') }}" aria-describedby="nome-social-help" placeholder="Nome social" type="text" class="form-control" id="nome-social" name="nome_social" disabled>
              <small id="nome-social-help" class="form-text text-muted">
                Esse campo é opcional.
              </small>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="genero">Especifique o gênero</label>
            <div class="col-sm-10">
              <input value="{{ old('genero') }}" aria-describedby="genero-help" placeholder="Especifique o gênero" type="text" class="form-control" id="genero" name="genero" disabled>
              <small id="genero-help" class="form-text text-muted">
                Esse campo é opcional.
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
            <label class="col-sm-2 col-form-label" for="senha">Senha</label>
            <div class="col-sm-10">
              <input value="{{ old('senha') }}" type="password" class="form-control" placeholder="Senha" id="senha" name="senha">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="confirmar-senha">Confirmar senha</label>
            <div class="col-sm-10">
              <input name="confirmar_senha" type="password" class="form-control" placeholder="Confirmar senha" id="confirmar-senha">
            </div>
          </div>
          <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="nascimento">Data de nascimento</label>
              <div class="col-sm-10 input-group">
                  <span class="input-group-prepend">
                      <label class="input-group-text"><i class="fa fa-calendar-check"></i></label>
                  </span>
                  <input value="{{ old('data_nascimento') }}" type="date" class="form-control" name="data_nascimento" id="nascimento" />
              </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="rg">RG</label>
            <div class="col-sm-10">
              <input value="{{ old('rg') }}" aria-describedby="rg-help" placeholder="RG" type="text" class="form-control" id="rg" name="rg">
              <small id="rg-help" class="form-text text-muted">
                Insira no seguinte formato: XXXXXXXX. Exemplo: 12345678
              </small>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="cpf">CPF</label>
            <div class="col-sm-10">
              <input value="{{ old('cpf') }}" aria-describedby="cpf-help" placeholder="CPF" type="text" class="form-control" id="cpf" name="cpf">
              <small id="cpf-help" class="form-text text-muted">
                Insira no seguinte formato: XXXXXXXXXXX. Exemplo: 12345678912
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
          <h4 class="sub-title">Fotos</h4>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="foto-rg">Foto do RG</label>
            <div class="col-sm-10">
              <input placeholder="Coloque aqui a foto do RG" name="foto_rg" id="foto-rg" type="file" class="form-control">
            </div>
          </div>
          <br />
          <h4 class="sub-title">Finalizar cadastro</h4>
          <div class="form-group row">
            <div class="col-sm-4">
              <button type="submit" class="btn btn-primary">Finalizar cadastro</button>
            </div>
          </div>
        </form>
    </div>
</div>
@stop
@section('scripts_foot')
    @include('admin.includes.scripts_principais')
    <script type="text/javascript">
        function habilitarCamposLGBT() {
            let option = document.getElementById('sexo').options[document.getElementById('sexo').selectedIndex].value;
            let nome_social = document.getElementById('nome-social');
            let genero = document.getElementById('genero');
            if (option == "Outro" || option == "NãoInformado") {
                nome_social.disabled = false;
                genero.disabled = false;
            } else {
                nome_social.disabled = true;
                genero.disabled = true;
            }
        }
    </script>
@stop
