
@extends('default')

@section('title', 'Cidades')

@section('content_header')
<h1>Cidades</h1>
        View para apresentar as Cidades
@stop



@section('content')
<head>
<center><h1>Listagem de Cidades</h1></center>
</head>
<div class='form-group'> 
    
    <a href="{{ route('cidades.create')}}" class="btn-sm btn-primary">Nova cidade</a>
   
    </div>
<table class="table table-striped table-bordered table-hover">
<thead>
<th>Id</th>
    <th>Nome</th>
    <th>Estado</th>
    <th>Ação</th>
</thead>


<tbody>
    @foreach ($cidades as $cid)
    <tr>
    <td>{{ $cid->id }}</td>
        <td>{{ $cid->nome_cid }}</td>
        <td>{{ $cid->estado->nome_est }}</td>
        <td>
            <a href="{{ route('cidades.edit', ['id'=>$cid->id])}}" class="btn-sm btn-success">Editar</a>
            <!--<a href="{{ route('cidades.destroy', ['id'=>$cid->id])}}"  class="btn-sm btn-danger">Remover</a>-->
            <a href="#" onclick="return ConfirmaExclusao({{$cid->id}})" class="btn-sm btn-danger">Remover</a>
        </td>

    </tr>
    @endforeach
</tbody>
    
</table>
@endsection
@section('table-delete')
"cidades"
@endsection
