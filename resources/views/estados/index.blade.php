
@extends('default')

@section('title', 'Estados')

@section('content_header')
<h1>Estados</h1>
        View para apresentar as Estados
@stop



@section('content')
<head>
<center><h1>Listagem de Estados</h1></center>
</head>
<div class='form-group'> 
    
    <a href="{{ route('estados.create')}}" class="btn-sm btn-primary">Nova estado</a>
   
    </div>
<table class="table table-striped table-bordered table-hover">
<thead>
<th>Id</th>
    <th>Nome</th>
    <th>UF</th>
    <th>Ação</th>
</thead>


<tbody>
    @foreach ($estados as $estado)
    <tr>
    <td>{{ $estado->id }}</td>
        <td>{{ $estado->nome_est }}</td>
        <td>{{ $estado->uf_est }}</td>
        <td>
            <a href="{{ route('estados.edit', ['id'=>$estado->id])}}" class="btn-sm btn-success">Editar</a>
            <!--<a href="{{ route('estados.destroy', ['id'=>$estado->id])}}"  class="btn-sm btn-danger">Remover</a>-->
            <a href="#" onclick="return ConfirmaExclusao({{$estado->id}})" class="btn-sm btn-danger">Remover</a>
        </td>

    </tr>
    @endforeach
</tbody>
    
</table>
@endsection
@section('table-delete')
"estados"
@endsection
