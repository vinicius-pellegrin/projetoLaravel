
@extends('default')

@section('title', 'Categorias')

@section('content_header')
<h1>Categorias</h1>
@stop

@section('content')


<div class='container'>
<h1>Editando Categorias: {{$categoria->descricao}}  </h1>

@if($errors->any())
    <ul class="alert alert-info">
    @foreach($errors->all() as $error)
        <li>
        {{$error}}
        </li>
    @endforeach
    </ul>
@endif



{!! Form::open(['route' =>["categorias.update", $categoria->id], 'method'=>'put']) !!}
    <div class='form-group'> 
     

        {!!Form::label('descricao','Descricao:') !!}
        {!! Form::text('descricao',$categoria->descricao, ['class'=>'form-control']) !!}

    </div>
    <div class='form-group'> 
    {!!Form::submit('Editar Categoria',['class'=>'btn btn-primary']) !!}

    </div>

{!! Form::Close() !!}


</div>
@endsection
@section('table-delete')
"categorias"
@endsection
