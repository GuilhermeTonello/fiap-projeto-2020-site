@extends('admin.includes.layoutbase')

@section('stylesheet_sec')
    @include('admin.includes.css_principais')
@stop

@section('titulo')
    <h5>Visualizando terceiro</h5>
    <span>Página para visualização de terceiro</span>
@stop

@section('conteudo')
<div class="card">
  <div class="card-block">
      <ul>
        <li>Nome: {{ $u->primeiro_nome . ' ' . $u->ultimo_nome }}</li>
        <li>Nome social: {{ empty($u->nome_social) ? 'Não possui' : $u->nome_social }}</li>
        <li>Gênero: {{ empty($u->genero) ? $u->sexo : $u->genero }}</li>
        <li>RG: {{ $u->rg }}</li>
        <li>CPF: {{ $u->cpf }}</li>
        <li>Telefone: {{ $u->telefone }}</li>
        <li>CEP: {{ json_decode($u->endereco)->cep }}</li>
        <li>Logradouro: {{ json_decode($u->endereco)->logradouro }}</li>
        <li>UF: {{ json_decode($u->endereco)->uf }}</li>
        <li>Cidade: {{ json_decode($u->endereco)->cidade }}</li>
        <li>Bairro: {{ json_decode($u->endereco)->bairro }}</li>
        <li>Complemento: {{ json_decode($u->endereco)->complemento }}</li>
        @if($i != null)
          <li><img src="data:image/png;base64,{{ $i }}" alt="teste" /></li>
        @endif

      </ul>
    </div>
</div>
@stop
@section('scripts_foot')
    @include('admin.includes.scripts_principais')
@stop
