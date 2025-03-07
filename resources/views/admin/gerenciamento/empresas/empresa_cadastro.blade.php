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
    <h5>Cadastro de empresa</h5>
    <span>Página para cadastro de uma nova empresa</span>
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
            <label class="col-sm-2 col-form-label" for="email">E-Mail</label>
            <div class="col-sm-10">
              <input value="{{ old('email') }}" aria-describedby="email-help" placeholder="E-Mail" type="text" class="form-control" id="email" name="email">
              <small id="email-help" class="form-text text-muted">
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
                      @foreach(DB::select('SELECT id, email FROM assegurados') as $a)
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
              <button type="submit" class="btn btn-primary">Finalizar cadastro</button>
            </div>
          </div>
        </form>
    </div>
</div>
@stop
@section('scripts_foot')
    @include('admin.includes.scripts_principais')
    <script src="{{ secure_asset('/js/jquery-3.5.1.slim.js') }}"></script>
    <script>

        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#logradouro").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
            }

            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#logradouro").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#logradouro").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>
@stop
