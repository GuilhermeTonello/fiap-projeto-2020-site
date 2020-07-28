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
            <label class="col-sm-2 col-form-label" for="home-fantasia">Nome fantasia</label>
            <div class="col-sm-10">
              <input value="{{ old('primeiro_nome') }}" placeholder="Nome fantasia" type="text" class="form-control" id="nome-fantasia" name="nome_fantasia">
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
@stop
