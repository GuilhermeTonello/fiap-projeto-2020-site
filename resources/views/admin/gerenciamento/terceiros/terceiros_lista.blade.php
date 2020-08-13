<?php
$controller = 'TerceiroController';
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
<h5>Terceiros - Lista</h5>
<span>Lista de terceiros</span>
@stop

@section('conteudo')
<div class="form-group">
    <label for="procurar">Procurar registros:</label>
    <input aria-describedby="procurar-help" class="form-control" type="text" id="procurar" placeholder="Procurar registros..." />
    <small id="procurar-help" class="form-text text-muted">
        Procure por cpf, rg, nome, sobrenome, nome social ou e-mail.
    </small>
</div>
<table id="tabela" class="table table-striped table-bordered nowrap">
  <thead>
    <tr>
      <th>Nome</th>
      <th>Nome social</th>
      <th>CPF</th>
      <th>RG</th>
      <th>E-Mail</th>
      <th>AÇÕES</th>
    </tr>
  </thead>
  <tbody>
      @foreach($terceiros as $u)
      <tr>
          <td>{{ $u->primeiro_nome . ' ' . $u->ultimo_nome }}</td>
          <td>{{ $u->nome_social == "" || empty($u->nome_social) ? 'Não possui' : $u->nome_social }}</td>
          <td>{{ $u->cpf }}</td>
          <td>{{ $u->rg }}</td>
          <td>{{ $u->email }}</td>
          <td>
              <a href="{{ action('TerceiroController@ver', $u->id) }}" class="btn btn-primary">VER</a>
              <a href="{{ action('TerceiroController@editar', $u->id) }}" class="btn btn-success">EDITAR</a>
              <a href="{{ action('TerceiroController@deletar', $u->id) }}" onclick="return confirm('Deseja mesmo excluir o(a) assegurado(a) {{ $u->primeiro_nome . ' ' . $u->ultimo_nome }}?');" class="btn btn-danger">EXCLUIR</a>
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
