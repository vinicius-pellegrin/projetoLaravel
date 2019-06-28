@extends('default')


@section('content_header')
<h1>Categorias</h1>
@stop

@section('content')
<h1>Cadastro de Categorias  </h1>

<div class='container'>

@if($errors->any())
    <ul class="alert alert-info">
    @foreach($errors->all() as $error)
        <li>
        {{$error}}
        </li>
    @endforeach
    </ul>
@endif



{!! Form::open(['route' =>'categorias.store']) !!}
    <div class='form-group'> 

        {!!Form::label('descricao','Descricao:') !!}
        {!! Form::text('descricao',null, ['class'=>'form-control']) !!}

    </div>
    <div class='form-group'> 
    {!!Form::submit('Criar Categoria',['class'=>'btn btn-primary']) !!}
    <a href="{{ route('categorias')}}" class="btn btn-danger">Cancelar</a>   
    </div>

{!! Form::Close() !!}



</div>
@endsection
@section('table-delete')
"categorias"
@endsection
