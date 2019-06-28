@extends('default')
<!--
@section('htmlheader_title')
	{{('categorias') }}
@endsection-->
@section('content')
<head>
<center><h1>Listagem de Categorias</h1></center>
</head>

<div class='container-fluid'> 
    
    <a href="{{ route('categorias.create')}}" class="btn btn-primary">Nova categoria</a>
    
</div>

<!-- aqui é a pesquisa -->
{!! Form::open(['categorias'=>'categorias','route'=>'categorias']) !!}
<div class="sidebar-form">

<div class="input-group input-group-lg">
    <input type="search" name="filtragem" class="form-control" style="width:100% !important;" placeholder = "Pesquisa...">
    <span class="input-group-btn">
        <button type="submit" name="search" id="search-btn" class="btn btn-default">
            <i class="fa fa-search"></i>
        </button>
     </span>
</div>
</div>
<br>
{!! Form::close() !!}


<table class="table table-striped table-bordered table-hover">
<thead>
    <th>Id</th>
    <th>Descrição</th>
    <th>Ação</th>
</thead>

<tbody>
    @foreach ($categorias as $cat)
    <tr>
    <td>{{ $cat->id }}</td>
        <td>{{ $cat->descricao }}</td>

        <td>
            <a href="{{ route('categorias.edit', ['id'=>$cat->id])}}" class="btn-sm btn-success">Editar</a>
            <!--<a href="{{ route('categorias.destroy', ['id'=>$cat->id])}}"  class="btn-sm btn-danger">Remover</a>-->
            <a href="#" onclick="return ConfirmaExclusao({{$cat->id}})" class="btn-sm btn-danger">Remover</a>

        </td>

    </tr>
    @endforeach
</tbody>
    
</table>

{{ $categorias->links() }}

@endsection
@section('table-delete')
"categorias"
@endsection 

