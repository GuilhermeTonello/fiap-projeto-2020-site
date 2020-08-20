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
          <li>Nome fantasia: {{ $e->nome_fantasia }}</li>
          <li>Razão social: {{ $e->razao_social }}</li>
          <li>E-Mail: {{ $e->email }}</li>
          <li>Autorizante: {{ $e->autorizante }}</li>
          <li>CNPJ: {{ $e->cnpj }}</li>
          <li>Telefone: {{ $e->telefone }}</li>
          <li>CEP: {{ json_decode($e->endereco)->cep }}</li>
          <li>Logradouro: {{ json_decode($e->endereco)->logradouro }}</li>
          <li>UF: {{ json_decode($e->endereco)->uf }}</li>
          <li>Cidade: {{ json_decode($e->endereco)->cidade }}</li>
          <li>Bairro: {{ json_decode($e->endereco)->bairro }}</li>
          <li>Complemento: {{ json_decode($e->endereco)->complemento }}</li>
      </ul>
    </div>
</div>
@stop
@section('scripts_foot')
    @include('admin.includes.scripts_principais')
@stop
