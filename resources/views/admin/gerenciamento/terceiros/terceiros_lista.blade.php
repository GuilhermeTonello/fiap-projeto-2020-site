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
    <tr>
        <td>João Antonio</td>
        <td>Não informado</td>
        <td>123456789</td>
        <td>019348543</td>
        <td>joao-terceiro@email.com</td>
        <td>
            <a href="/ver/1" class="btn btn-primary">VER</a>
            <a href="/editar/1" class="btn btn-success">EDITAR</a>
            <a href="/deletar/1" class="btn btn-danger">EXCLUIR</a>
        </td>
    </tr>
    <tr>
        <td>Jose Paulo</td>
        <td>Não informado</td>
        <td>437589724985</td>
        <td>48758927584</td>
        <td>jose-terceiro@email.com</td>
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
