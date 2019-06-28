
@extends('default')

@section('title', 'estados')

@section('content_header')
<h1>estados</h1>
@stop

@section('content')
<h1>Cadastro de Estados  </h1>

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



{!! Form::open(['route' =>'estados.store']) !!}
    <div class='form-group'> 

        {!!Form::label('nome_estado','Nome Estado:') !!}
        {!! Form::text('nome_estado',null, ['class'=>'form-control']) !!}


       <!-- {!!Form::label('estado_id','Estado:') !!}
        {!! Form::select('estado_id',\App\Estado::orderBy('nome_est')->pluck('nome_est','id')->toArray(),null, ['class'=>'form-control']) !!}
-->

        {!!Form::label('uf_estado','UF Estado:') !!}
        {!! Form::text('uf_estado',null, ['class'=>'form-control']) !!}
       





    </div>
    <div class='form-group'> 
    {!!Form::submit('Criar Estado',['class'=>'btn btn-primary']) !!}
    <a href="{{ route('estados')}}" class="btn btn-danger">Cancelar</a>
    </div>

{!! Form::Close() !!}


</div>
@endsection
@section('table-delete')
"estados"
@endsection
