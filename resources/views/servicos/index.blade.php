
@extends('default')

@section('title', 'Servicos')

@section('content_header')
<h1>Servicos</h1>
        View para apresentar as Servicos
@stop

@section('content')
<table class="table table-striped table-bordered table-hover">
<a href="{{ route('servicos.create')}}" class="btn btn-primary">Novo servico</a>
<thead>
<th>Id</th>
    <th>Cliente</th>
    <th>Profissionais</th>
    <th>Ação</th>
</thead>

<tbody>
    @foreach ($servicos as $serv)
    <tr>
    <td>{{ $serv->id }}</td>
        <td>{{ $serv->cliente }}</td>

        <td> @foreach($serv->servicoProfissional as $servpro)
        <li>{{$servpro->profissional->nome}}</li>        
        @endforeach
         </td>
        <td>
            <a href="{{ route('servicos.edit', ['id'=>$serv->id])}}" class="btn-sm btn-success">Editar</a>
            <!--<a href="{{ route('servicos.destroy', ['id'=>$serv->id])}}"  class="btn-sm btn-danger">Remover</a>-->
            <a href="#" onclick="return ConfirmaExclusao({{$serv->id}})" class="btn-sm btn-danger">Remover</a>
        </td>


    </tr>
    @endforeach
</tbody>
    
</table>
@endsection
@section('table-delete')
"servicos"
@endsection
