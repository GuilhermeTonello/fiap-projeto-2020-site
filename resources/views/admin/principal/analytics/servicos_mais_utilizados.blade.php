@extends('admin.includes.layoutbase')

@section('stylesheet_sec')
    @include('admin.includes.css_principais')
    @include('admin.includes.datatable_css')
@stop

@section('titulo')
    <h5>Analytics - Serviços mais utilizados</h5>
    <span>Página sobre os serviços mais utilizados</span>
@stop

@section('conteudo')
<div class="form-group">
    <label for="procurar">Procurar registros:</label>
    <input aria-describedby="procurar-help" class="form-control" type="text" id="procurar" placeholder="Procurar registros..." />
    <small id="procurar-help" class="form-text text-muted">
        Procure por nome do serviço ou quantidade.
    </small>
</div>
<table id="tabela" class="table table-striped table-bordered nowrap">
  <thead>
    <tr>
      <th>Serviço</th>
      <th>Quantidade</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td>Serviço realizado</td>
        <td>Quantidade realizada aqui</td>
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
