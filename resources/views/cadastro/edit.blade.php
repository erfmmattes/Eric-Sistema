@extends('layouts.appHome')

@section('title', 'Editar Publicação', $cadastro->title )

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
        <form method="POST" action="{{ route('cadastro.update', $cadastro) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="cadastro-name"><strong>Nome</strong></label>
                <input type="text" name="name" 
                        value="{{ $cadastro->name }}"class="form-control" id="cadastro-name">
            </div>
            <div class="form-group">
                <label for="cadastro-email"><strong>E-mail</strong></label>
                <input type="text" name="email" 
                        value="{{ $cadastro->email }}"class="form-control" id="cadastro-email">
            </div>
            <div class="form-group">
                <label for="cadastro-password"><strong>Senha</strong> (máximo 10 caractéres)</label>
                <input type="password" name="password" maxlength="10" 
                        value=""class="form-control" id="cadastro-password">
            </div>
            <div class="form-group">
                <label for="cadastro-telefone"><strong>Telefone</strong></label>
                <input type="text" name="telefone" onkeyup="mascara( this, mtel );" maxlength="15"
                        value="{{ $cadastro->telefone }}"class="form-control" id="cadastro-telefone">
            </div>
            <div class="form-group">
                <label for="foto" style="margin-bottom:-3px"><strong>Foto</strong></label>
                <span style="font-size: 14px; font-style: italic;">Extenções Válidas: jpg, jpeg e png. </span>
                <input type="file" name="foto" id="foto" class="form-control">
            </div>
            <button type="submit" class="btn salvar-cadastro">Salvar Edição</button>
        </form>
        <a href="{{ route('cadastro.index') }}" class="btn voltar-cadastro">Voltar</a>
    </div>
</div>
@endsection