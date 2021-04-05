@extends('layouts.app')

@section('title', $cadastro->title)

@section('content')
<div class="container m-auto">
<div class="card mt-3">
  <div class="card-body">
    <h3>Dados cadastrados</h3>
    <p>
      <span class="bb">Nome:</span> {{ $cadastro->name }}<br />
      <span class="bb">E-mail:</span> {{ $cadastro->email }}<br />
      <span class="bb">Telefone:</span> {{ $cadastro->telefone }}<br />
      <span class="bb">Foto:</span><br />
      <img src="{{ env('APP_URL') }}/storage/avatars/{{ $cadastro->foto }}" alt="{{ $cadastro->eleitor }}" title="{{ $cadastro->eleitor }}" height="235" width="300">
    </p>
    <a href="{{ route('cadastro.index') }}" class="btn mt-3 novo-cadastro">Voltar</a>
  </div>
</div>
</div>
@endsection