
@extends('default')

@section('title', 'cidades')

@section('content_header')
<h1>cidades</h1>
@stop

@section('content')
<h1>Cadastro de Cidades  </h1>

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



{!! Form::open(['route' =>'cidades.store']) !!}
    <div class='form-group'> 

        {!!Form::label('nome_cid','Nome Cidade:') !!}
        {!! Form::text('nome_cid',null, ['class'=>'form-control']) !!}


        {!!Form::label('estado_id','Estado:') !!}
        {!! Form::select('estado_id',\App\Estado::orderBy('nome_est')->pluck('nome_est','id')->toArray(),null, ['class'=>'form-control']) !!}


       





    </div>
    <div class='form-group'> 
    {!!Form::submit('Criar Cidade',['class'=>'btn btn-primary']) !!}
    <a href="{{ route('cidades')}}" class="btn btn-danger">Cancelar</a>
    </div>

{!! Form::Close() !!}


</div>
@endsection
@section('table-delete')
"cidades"
@endsection
