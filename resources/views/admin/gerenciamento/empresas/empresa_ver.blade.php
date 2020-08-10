@extends('admin.includes.layoutbase')

@section('stylesheet_sec')
    @include('admin.includes.css_principais')
@stop

@section('titulo')
    <h5>Visualizando assegurado</h5>
    <span>Página para visualização de assegurado</span>
@stop

@section('conteudo')
<div class="card">
  <div class="card-block">
      <ul>
          <li>Nome fantasia: teste</li>
          <li>Razão social: teste</li>
          <li>E-Mail: teste</li>
          <li>Autorizante: teste</li>
          <li>CNPJ: teste</li>
          <li>Telefone: teste</li>
          <li>CEP: teste</li>
          <li>Logradouro: teste</li>
          <li>UF: teste</li>
          <li>Cidade: teste</li>
          <li>Bairro: teste</li>
          <li>Complemento: teste</li>
      </ul>
    </div>
</div>
@stop
@section('scripts_foot')
    @include('admin.includes.scripts_principais')
@stop
