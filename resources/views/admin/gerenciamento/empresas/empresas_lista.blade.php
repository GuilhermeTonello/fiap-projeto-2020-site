<?php
$controller = 'EmpresaController';
$view = 'lista';
Config::set('vars.controller', $controller);
Config::set('vars.view', $view);
?>
@extends('admin.includes.layoutbase')

@section('stylesheet_sec')
    @include('admin.includes.css_principais')
    @include('admin.includes.datatable_css')
@stop

@section('titulo')
<h5>Empresas - Lista</h5>
<span>Lista de empresas</span>
@stop

@section('conteudo')

@if(!empty($sucesso))
    <div class="alert alert-success">
        {{ $sucesso }}
    </div>
@endif

@if(!empty($erro))
    <div class="alert alert-danger">
        {{ $erro }}
    </div>
@endif

<div class="form-group">
    <label for="procurar">Procurar registros:</label>
    <input aria-describedby="procurar-help" class="form-control" type="text" id="procurar" placeholder="Procurar registros..." />
    <small id="procurar-help" class="form-text text-muted">
        Procure por cnpj, nome fantasia, razão social ou e-mail.
    </small>
</div>
<table id="tabela" class="table table-striped table-bordered nowrap">
  <thead>
    <tr>
      <th>Nome fantasia</th>
      <th>Razão social</th>
      <th>CNPJ</th>
      <th>E-Mail</th>
      <th>AÇÕES</th>
    </tr>
  </thead>
  <tbody>
    @foreach($empresas as $e)
    <tr>
        <td>{{ $e->nome_fantasia }}</td>
        <td>{{ $e->razao_social }}</td>
        <td>{{ $e->cnpj }}</td>
        <td>{{ $e->email }}</td>
        <td>
            <a href="{{ action('EmpresaController@ver', $e->id) }}" class="btn btn-primary">VER</a>
            <a href="{{ action('EmpresaController@editar', $e->id) }}" class="btn btn-success">EDITAR</a>
            <a onclick="return confirm('Deseja mesmo excluir a empresa {{ $e->nome_fantasia }}');" href="{{ action('EmpresaController@deletar', $e->id) }}" class="btn btn-danger">EXCLUIR</a>
        </td>
    </tr>
    @endforeach
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
