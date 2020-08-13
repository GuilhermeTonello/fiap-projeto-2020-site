@extends('admin.includes.layoutbase')

@section('stylesheet_sec')
    @include('admin.includes.css_principais')
    @include('admin.includes.datatable_css')
@stop

@section('titulo')
<h5>Gameficação - Troféus</h5>
<span>Cadastro e lista de troféus.</span>
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
            <form action="{{ action('TrofeusController@adiciona') }}" method="post">
                @csrf
                <h4 class="sub-title">Informações básicas</h4>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="nome">Nome</label>
                <div class="col-sm-10">
                  <input value="{{ old('nome') }}" placeholder="Nome do troféu" type="text" class="form-control" id="nome" name="nome">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="descricao">Descrição</label>
                <div class="col-sm-10">
                  <textarea rows="4" value="{{ old('descricao') }}" placeholder="Descrição do troféu" type="text" class="form-control" id="descricao" name="descricao"></textarea>
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

<br />

<div class="form-group">
    <label for="procurar">Procurar registros:</label>
    <input aria-describedby="procurar-help" class="form-control" type="text" id="procurar" placeholder="Procurar registros..." />
    <small id="procurar-help" class="form-text text-muted">
        Procure por nome ou descrição.
    </small>
</div>
<table id="tabela" class="table table-striped table-bordered nowrap">
  <thead>
    <tr>
      <th>Nome</th>
      <th>Descrição</th>
      <th>AÇÕES</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td>10 dias</td>
        <td>10 dias sem bater</td>
        <td>
            <a href="/ver/1" class="btn btn-primary">VER</a>
            <a href="/editar/1" class="btn btn-success">EDITAR</a>
            <a href="/deletar/1" class="btn btn-danger">EXCLUIR</a>
        </td>
    </tr>
    <tr>
        <td>20 dias</td>
        <td>20 dias sem bater</td>
        <td>
            <a href="/ver/2" class="btn btn-primary">VER</a>
            <a href="/editar/2" class="btn btn-success">EDITAR</a>
            <a href="/deletar/2" class="btn btn-danger">EXCLUIR</a>
        </td>
    </tr>
  </tbody>
</table>
@stop

@section('scripts_foot')
@include('admin.includes.scripts_principais')
@include('admin.includes.datatable_js')
<script>
$(document).ready(function() {
    var tabela = $("#tabela").DataTable({
        "dom": 't,p',
        "pageLength": 10,
        "searching": true,
        "ordering": true,
        "info": false,
        "infoEmpty": false,
        "searching": true,
        "lengthChange": false,
        "language": {
            "loadingRecords": "Carregando...",
            "processing": "Processando...",
            "search": "Procurar:",
            "emptyTable": "Nenhum(a) assegurado(a) encontrado(a)",
            "searchPlaceholder": "Procurar registros",
            "zeroRecords": "Nenhum(a) assegurado(a) encontrado(a)",
            "paginate": {
                "first": "Primeira",
                "last": "Última",
                "next": "Próxima",
                "previous": "Anterior",
            },
        },
    });
    $('#procurar').on('keyup', function() {
        tabela.search(this.value).draw();
    });
});
</script>
@stop
