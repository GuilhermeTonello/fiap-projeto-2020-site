@extends('admin.includes.layoutbase')
@section('stylesheet_sec')
<link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ secure_asset('/css/waves.min.css') }}" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/feather.css') }}">
<link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/themify-icons.css') }}">
<link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/icofont.css') }}">
<link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/font-awesome.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/jquery.steps.css') }}">
<link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/pages.css') }}">
@stop

@section('titulo')
    <h5>Cadastro de terceiros</h5>
    <span>Página para cadastro de um novo terceiro</span>
@stop

@section('conteudo')
<div class="card">
  <div class="card-header">
    <h5>Cadastro de Terceiro</h5>
    <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
  </div>
  <div class="card-block">
    <div class="row">
      <div class="col-md-12">
        <div id="wizardb">
          <section>
            <form class="wizard-form" id="verticle-wizard" action="#">
              <h3> Informações principais </h3>
              <fieldset>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <label for="pNome" class="block">Primeiro Nome*</label>
                  </div>
                  <div class="col-sm-12">
                    <input id="pNome" name="pNome" type="text" class=" form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <label for="uNome" class="block">Ultimo Nome*</label>
                  </div>
                  <div class="col-sm-12">
                    <input id="uNome" name="uNome" type="text" class=" form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <label for="email" class="block">Email*</label>
                  </div>
                  <div class="col-sm-12">
                    <input id="email" name="email" type="email" class=" form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <label for="telefone" class="block">Telefone*</label>
                  </div>
                  <div class="col-sm-12">
                    <input id="telefone" name="telefone" type="text" class=" form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <label for="cpf" class="block">CPF*</label>
                  </div>
                  <div class="col-sm-12">
                    <input id="cpf"  name="cpf" type="text" data-mask="999.999.999-99" class="form-control">
                  </div>
                </div>
              </fieldset>
              <h3> Endereço </h3>
              <fieldset>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <label for="cep" class="block">CEP*</label>
                  </div>
                  <div class="col-sm-12">
                    <input id="cep" name="cep" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <label for="uf" class="block">UF*</label>
                  </div>
                  <div class="col-sm-12">
                    <input id="uf" name="uf" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <label for="cidade" class="block">Cidade*</label>
                  </div>
                  <div class="col-sm-12">
                    <input id="cidade" name="cidade" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <label for="endereco" class="block">Endereço*</label>
                  </div>
                  <div class="col-sm-12">
                    <input id="endereco" name="endereco" type="text" class="form-control date-control">
                  </div>
                </div>

              </fieldset>
              <h3> Education </h3>
              <fieldset>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <label for="University-2" class="block">University</label>
                  </div>
                  <div class="col-sm-12">
                    <input id="University-2b" name="University" type="text" class="form-control required">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <label for="Country-2" class="block">Country</label>
                  </div>
                  <div class="col-sm-12">
                    <input id="Country-2b" name="Country" type="text" class="form-control required">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <label for="Degreelevel-2" class="block">Degree level #</label>
                  </div>
                  <div class="col-sm-12">
                    <input id="Degreelevel-2b" name="Degree level" type="text" class="form-control required phone">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <label for="datejoin" class="block">Date Join</label>
                  </div>
                  <div class="col-sm-12">
                    <input id="datejoinb" name="Date Of Birth" type="text" class="form-control required">
                  </div>
                </div>
              </fieldset>
              <h3> Work experience </h3>
              <fieldset>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <label for="Company-2" class="block">Company:</label>
                  </div>
                  <div class="col-sm-12">
                    <input id="Company-2b" name="Company:" type="text" class="form-control required">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <label for="CountryW-2" class="block">Country</label>
                  </div>
                  <div class="col-sm-12">
                    <input id="CountryW-2b" name="Country" type="text" class="form-control required">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <label for="Position-2" class="block">Position</label>
                  </div>
                  <div class="col-sm-12">
                    <input id="Position-2b" name="Position" type="text" class="form-control required">
                  </div>
                </div>
              </fieldset>
            </form>
          </section>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
@section('scripts_foot')
<script type="ce2668daaac54a74e9f6cdff-text/javascript" src="{{ secure_asset('/js/jquery.min.js') }}"></script>
<script type="ce2668daaac54a74e9f6cdff-text/javascript" src="{{ secure_asset('/js/jquery-ui.min.js') }}"></script>
<script type="ce2668daaac54a74e9f6cdff-text/javascript" src="{{ secure_asset('/js/popper.min.js') }}"></script>
<script type="ce2668daaac54a74e9f6cdff-text/javascript" src="{{ secure_asset('/js/bootstrap.min.js') }}"></script>

<script src="{{ secure_asset('/js/waves.min.js') }}" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>

<script type="ce2668daaac54a74e9f6cdff-text/javascript" src="{{ secure_asset('/js/jquery.slimscroll.js') }}"></script>

<script type="ce2668daaac54a74e9f6cdff-text/javascript" src="{{ secure_asset('/js/modernizr.js') }}"></script>
<script type="ce2668daaac54a74e9f6cdff-text/javascript" src="{{ secure_asset('/js/css-scrollbars.js') }}"></script>


<script src="{{ secure_asset('/js/jquery.cookie.js') }}" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>
<script src="{{ secure_asset('/js/jquery.steps.js') }}" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>
<script src="{{ secure_asset('/js/jquery.validate.js') }}" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>

<script src="{{ secure_asset('/js/underscore-min.js') }}" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>
<script src="{{ secure_asset('/js/moment.min.js') }}" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>
<script type="ce2668daaac54a74e9f6cdff-text/javascript" src="{{ secure_asset('/js/validate.js') }}"></script>


<script src="{{ secure_asset('/js/form-wizard.js') }}" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>
<script src="{{ secure_asset('/js/pcoded.min.js') }}" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>
<script src="{{ secure_asset('/js/vertical-layout.min.js') }}" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>
<script src="{{ secure_asset('/js/jquery.mcustomscrollbar.concat.min.js') }}" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>
<script type="ce2668daaac54a74e9f6cdff-text/javascript" src="{{ secure_asset('/js/script.js') }}"></script>

<script src="{{ secure_asset('/js/inputmask.js') }}" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>
<script src="{{ secure_asset('/js/jquery.inputmask.js') }}" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>
<script src="{{ secure_asset('/js/autonumeric.js') }}" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>
<script src="{{ secure_asset('/js/form-mask.js') }}" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>


<script src="{{ secure_asset('/js/rocket-loader.min.js') }}" data-cf-settings="ce2668daaac54a74e9f6cdff-|49" defer=""></script>
@stop
