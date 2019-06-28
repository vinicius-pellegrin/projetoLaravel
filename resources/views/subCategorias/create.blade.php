@extends('default')


@section('content_header')
<h1>SubCategorias</h1>
@stop

@section('content')
<h1>Cadastro de SubCategorias  </h1>

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

{!! Form::open(['route' =>'subCategorias.store']) !!}
    <div class='form-group'> 


    {!!Form::label('categoria_id','Categoria:') !!}
        {!! Form::select('categoria_id',\App\Categoria::orderBy('descricao')->pluck('descricao','id')->toArray(),null, ['class'=>'form-control']) !!}


    {!!Form::label('sub_nome','Nome da Sub-Categoria') !!}
        {!! Form::text('sub_nome',null, ['class'=>'form-control']) !!}

        {!!Form::label('sub_desc','Descricao:') !!}
        {!! Form::textarea('sub_desc',null, ['class'=>'form-control']) !!}

       

    </div>
    <div class='form-group'> 
    {!!Form::submit('Criar SubCategoria',['class'=>'btn btn-primary']) !!}
    <a href="{{ route('subCategorias')}}" class="btn btn-danger">Cancelar</a>
    </div>

{!! Form::Close() !!}


</div>
@endsection
@section('table-delete')
"subCategorias"
@endsection
