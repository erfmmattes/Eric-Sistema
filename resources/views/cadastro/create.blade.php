@extends('layouts.appHome')

@section('title')

@section('content')
<div class="row">
    <div id="id-alert" class="col-lg-6 mx-auto mt-3">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h2>Realizar cadastro</h2>
        <form method="POST" action="{{ route('cadastro.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="post-eleitor"><strong>Nome</strong></label>
                <input type="text" name="name" 
                        value="{{ old('name') }}"class="form-control" id="cadastro-eleitor">
            </div>
            <div class="form-group">
                <label for="post-email"><strong>E-mail</strong></label>
                <input type="email" name="email" 
                        value="{{ old('email') }}"class="form-control" id="cadastro-email">
            </div>
            <div class="form-group">
                <label for="post-senha"><strong>Senha</strong> (máximo 10 caractéres)</label>
                <input type="password" name="password" maxlength="10" 
                        value="{{ old('password') }}"class="form-control" id="cadastro-senha">
            </div>
            <div class="form-group">
                <label for="post-telefone"><strong>Telefone</strong></label>
                <input type="text" name="telefone" onkeyup="mascara( this, mtel );" maxlength="15"
                        value="{{ old('telefone') }}"class="form-control" id="cadastro-telefone">
            </div>
            <div class="form-group">
                <label for="foto" style="margin-bottom:-3px"><strong>Foto</strong></label>
                <span style="font-size: 14px; font-style: italic;">Extenções Válidas: jpg, jpeg e png. </span>
                <input type="file" name="foto" id="foto" class="form-control">
            </div>
            <button type="submit" class="btn salvar-cadastro">Salvar cadastro</button>
        </form>
        <a href="{{ route('cadastro.index') }}" class="btn voltar-cadastro">Voltar</a>
    </div>
</div>
@endsection