@extends('layouts.appHome')

@section('content')
<div class="container m-auto">
    
@if(session('success'))
    <div id="id-alert" class="alert alert-success">
        <p>{{session('success')}}</p>
    </div>
@endif
    <a href="{{ route('cadastro.create') }}" class="btn mt-3 criar-noticia-btn novo-cadastro">Novo Cadastro</a><br />
    <button onclick="exportTableToExcel('tblData')" class=" btn exportar">Exportar para Excel</button>

    <form method="GET" action="{{ route('cadastro.index') }}" style="display:contents;">
        <input type="text" name="name" value="{{ old('name') }}"class="form-control busca" id="eleitor">
    <button type="submit" class="btn botao-buscar">Buscar</button>
    </form>

    <table id="tblData" class="table table-striped mt-3" >
        <thead>
            <tr class="topo">
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Telefone</th>
                <th scope="col">foto</th>
                <th scope="col">Ver | Editar | Deletar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cadastros as $cadastro)
            <tr>
                <td scope="row">{{ $cadastro->name }}</td>
                <td>{{ $cadastro->email }}</td>
                <td>{{ $cadastro->telefone }}</td>
                <td><img style="border-radius:40px;" src="{{ env('APP_URL') }}/storage/avatars/{{ $cadastro->foto }}" alt="{{ $cadastro->eleitor }}" title="{{ $cadastro->eleitor }}" height="60" width="60"></td>
                <td class="table-buttons">
                <a href="{{ route('cadastro.show', $cadastro) }}" class="btn btn-success">
                    <i class="fa fa-eye"></i>
                </a>
                <a href="{{ route('cadastro.edit', $cadastro) }}" class="btn btn-primary">
                    <i class="fa fa-pencil"></i>
                </a>
                <form method="POST" action="{{ route('cadastro.destroy', $cadastro) }}" style="display:contents;">
                @csrf
                @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Você deseja realmente DELETAR este cadastro?');">
                        <i class="fa fa-trash"></i>
                    </button>
                </form>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="paginacao-centro">
    {{ $cadastros->appends(Request::all())->links() }}
    </div>
</div>

<script>
    function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'Lista-de-cadastros.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}
  </script>

@endsection