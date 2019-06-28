
@extends('default')

@section('title', 'Clientes')

@section('content_header')
<h1>Clientes</h1>
        View para apresentar as Clientes
@stop

@section('content')
<table class="table table-striped table-bordered table-hover">
<a href="{{ route('clientes.create')}}" class="btn btn-primary">Novo cliente</a>
<a href="{{ route('clientes.createMaster')}}" class="btn btn-primary">Novo cliente MasterDetail</a>
<thead>
<th>Id</th>
    <th>Nome</th>
    <th>Email</th>
    <th>Dt.Nascimento</th>
    <th>Cidade</th>
    <th>Profissional</th>
    <th>Ação</th>
</thead>

<tbody>
    @foreach ($clientes as $cli)
    <tr>
    <td>{{ $cli->id }}</td>
        <td>{{ $cli->nome }}</td>
        <td>{{ $cli->email }}</td>
        <td>{{ date('d-m-Y', strtotime($cli->dt_nasc)) }}</td>
        <td>{{ $cli->cidade->nome_cid }}</td>

        <td> @foreach($cli->clienteProfissional as $clipro)
        <li>{{$clipro->profissional->nome}}</li>        
        @endforeach
         </td>
        <td>
            <a href="{{ route('clientes.edit', ['id'=>$cli->id])}}" class="btn-sm btn-success">Editar</a>
            <!--<a href="{{ route('clientes.destroy', ['id'=>$cli->id])}}"  class="btn-sm btn-danger">Remover</a>-->
            <a href="#" onclick="return ConfirmaExclusao({{$cli->id}})" class="btn-sm btn-danger">Remover</a>
        </td>


    </tr>
    @endforeach
</tbody>
    
</table>
@endsection
@section('table-delete')
"clientes"
@endsection
