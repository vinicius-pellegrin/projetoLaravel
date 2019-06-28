
@extends('default')

@section('title', 'Profissionals')

@section('content_header')
<h1>Profissionals</h1>
        View para apresentar as Profissionals
@stop

@section('content')
<table class="table table-striped table-bordered table-hover">
<a href="{{ route('profissionals.create')}}" class="btn btn-primary">Novo profissional</a>
<thead>
<th>Id</th>
    <th>Nome</th>
    <th>Profissao</th>
    <th>Dt.Nascimento</th>
    <th>SubCategoria</th>
    <th>Cidade</th>
    <th>Ação</th>
</thead>

<tbody>
    @foreach ($profissionals as $prof)
    <tr>
        <td>{{ $prof->id }}</td>
        <td>{{ $prof->nome }}</td>
        <td>{{ $prof->profissao }}</td>
        <td>{{ date('d-m-Y', strtotime($prof->dt_nasc)) }}</td>
       
        <td>{{ $prof->SubCategoria }}</td>


        <td>{{ $prof->cidade->nome_cid }}</td>
        <td>
            <a href="{{ route('profissionals.edit', ['id'=>$prof->id])}}" class="btn-sm btn-success">Editar</a>
            <!--<a href="{{ route('profissionals.destroy', ['id'=>$prof->id])}}"  class="btn-sm btn-danger">Remover</a>-->
            <a href="#" onclick="return ConfirmaExclusao({{$prof->id}})" class="btn-sm btn-danger">Remover</a>
        </td>


    </tr>
    @endforeach
</tbody>
    
</table>
@endsection
@section('table-delete')
"profissionals"
@endsection
