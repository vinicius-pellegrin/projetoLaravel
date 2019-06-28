@extends('default')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.subCategorias') }}
@endsection

@section('content')
<div class='container-fluid'> 
    
    <a href="{{ route('subCategorias.create')}}" class="btn-sm btn-primary">Nova subCategoria</a>
   
</div>
<table class="table table-striped table-bordered table-hover">
<thead>
    <th>Id</th>
    <th>Nome</th>
    <th>Descrição</th>
    <th>Categoria</th>
    <th>Ação</th>
</thead>

<tbody>
@foreach ($subCategorias as $sub_cat)
    <tr>
    <td>{{ $sub_cat->id }}</td>
        <td>{{ $sub_cat->sub_nome }}</td>
        <td>{{ $sub_cat->sub_desc }}</td>
        <td>{{ $sub_cat->categoria->descricao }}</td>
        <td>
            <a href="{{ route('subCategorias.edit', ['id'=>$sub_cat->id])}}" class="btn-sm btn-success">Editar</a>
            <!--<a href="{{ route('clientes.destroy', ['id'=>$sub_cat->id])}}"  class="btn-sm btn-danger">Remover</a>-->
            <a href="#" onclick="return ConfirmaExclusao({{$sub_cat->id}})" class="btn-sm btn-danger">Remover</a>
        </td>


    </tr>
    @endforeach
</tbody>
    
</table>
@endsection
@section('table-delete')
"subCategorias"
@endsection 

