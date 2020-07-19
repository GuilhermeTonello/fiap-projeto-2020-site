@extends('admin.includes.layoutbase')

@section('stylesheet_sec')
<link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/feather.css') }}">
<link rel="stylesheet" href="{{ secure_asset('/css/waves.min.css') }}" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/feather.css') }}">
<link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/font-awesome-n.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ secure_asset('css/jquery.steps.css') }}">
<link rel="stylesheet" href="{{ secure_asset('/css/chartist.css') }}" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/style2.css') }}">
<link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/widget.css') }}">
<link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/pages.css') }}">
@stop
@section('titulo')
    <h5>Cadastro de pessoa</h5>
    <span>Página para cadastro de uma nova pessoa</span>
@stop
@section('conteudo')
<div class="card">
  <div class="card-block">
        <form>
            @csrf
            <h4 class="sub-title">Informações pessoais</h4>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="primeiro-nome">Primeiro nome</label>
            <div class="col-sm-10">
              <input placeholder="Primeiro nome" type="text" class="form-control" id="primeiro-nome" name="primeiro_nome">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="sobrenome">Sobrenome</label>
            <div class="col-sm-10">
              <input placeholder="Sobrenome" type="text" class="form-control" id="sobrenome" name="sobrenome">
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
                      <option value="NãoInformado">Prefiro não dizer</option>
                  </select>
              </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="nome-social">Nome social</label>
            <div class="col-sm-10">
              <input aria-describedby="nome-social-help" placeholder="Nome social" type="text" class="form-control" id="nome-social" name="nome_social" disabled>
              <small id="nome-social-help" class="form-text text-muted">
                Esse campo é opcional.
              </small>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="genero">Especifique o gênero</label>
            <div class="col-sm-10">
              <input aria-describedby="genero-help" placeholder="Especifique o gênero" type="text" class="form-control" id="genero" name="genero" disabled>
              <small id="genero-help" class="form-text text-muted">
                Esse campo é opcional.
              </small>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="email">E-Mail</label>
            <div class="col-sm-10">
              <input aria-describedby="email-help" placeholder="E-Mail" type="text" class="form-control" id="email" name="email">
              <small id="email-help" class="form-text text-muted">
                Insira no seguinte formato: exemplo@email.com. Exemplo: maria@gmail.com
              </small>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="senha">Senha</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" placeholder="Senha" id="senha" name="senha">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="confirmar-senha">Confirmar senha</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" placeholder="Confirmar senha" id="confirmar-senha">
            </div>
          </div>
          <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="nascimento">Data de nascimento</label>
              <div class="col-sm-10 input-group">
                  <span class="input-group-prepend">
                      <label class="input-group-text"><i class="fa fa-calendar-check"></i></label>
                  </span>
                  <input type="date" class="form-control" name="data_nascimento" id="nascimento" />
              </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="rg">RG</label>
            <div class="col-sm-10">
              <input aria-describedby="rg-help" placeholder="RG" type="text" class="form-control" id="rg" name="rg">
              <small id="rg-help" class="form-text text-muted">
                Insira no seguinte formato: XXXXXXXX. Exemplo: 12345678
              </small>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="cpf">CPF</label>
            <div class="col-sm-10">
              <input aria-describedby="cpf-help" placeholder="CPF" type="text" class="form-control" id="cpf" name="cpf">
              <small id="cpf-help" class="form-text text-muted">
                Insira no seguinte formato: XXXXXXXXXXX. Exemplo: 12345678912
              </small>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="telefone">Telefone</label>
            <div class="col-sm-10">
              <input aria-describedby="telefone-help" placeholder="Telefone" type="text" class="form-control" id="telefone" name="telefone">
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
              <input aria-describedby="cep-help" placeholder="CEP" type="text" class="form-control" id="cep" name="cep">
              <small id="cep-help" class="form-text text-muted">
                Insira no seguinte formato: XXXXXXXX. Exemplo: 01001000
              </small>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="logradouro">Logradouro</label>
            <div class="col-sm-10">
              <input placeholder="Logradouro" type="text" class="form-control" id="logradouro" name="logradouro">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="complemento">Complemento</label>
            <div class="col-sm-10">
              <input placeholder="Complemento" type="text" class="form-control" id="complemento" name="complemento">
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
              <input placeholder="Complemento" type="text" class="form-control" id="cidade" name="cidade">
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
@section('scripts_foot')
<script data-cfasync="false" src="{{ secure_asset('/js/email-decode.min.js') }}"></script>
<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{ secure_asset('/js/jquery.min.js') }}"></script>
<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{ secure_asset('/js/jquery-ui.min.js') }}"></script>
<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{ secure_asset('/js/popper.min.js') }}"></script>
<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{ secure_asset('/js/bootstrap.min.js') }}"></script>

<script src="{{ secure_asset('/js/waves.min.js') }}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{ secure_asset('/js/jquery.slimscroll.js') }}"></script>

<!-- script src="{{ secure_asset('/js/jquery.flot.js') }}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script src="{{ secure_asset('/js/jquery.flot.categories.js') }}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script src="{{ secure_asset('/js/curvedlines.js') }}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script src="{{ secure_asset('/js/jquery.flot.tooltip.min.js') }}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script -->
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
<!--script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{ secure_asset('/js/custom-dashboard.min.js') }}"></script  -->
<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{ secure_asset('/js/script.min.js') }}"></script>

<script src="{{ secure_asset('/js/rocket-loader.min.js') }}" data-cf-settings="d2d1d6e2f87cbebdf4013b26-|49" defer=""></script>
@stop
