
@extends('default')

@section('title', 'Cidades')

@section('content_header')
<h1>Cidades</h1>
@stop

@section('content')


<div class='container'>
<h1>Editando Cidades: {{$cidade->nome_cid}}  </h1>

@if($errors->any())
    <ul class="alert alert-info">
    @foreach($errors->all() as $error)
        <li>
        {{$error}}
        </li>
    @endforeach
    </ul>
@endif



{!! Form::open(['route' =>["cidades.update", $cidade->id], 'method'=>'put']) !!}
    <div class='form-group'> 
     

    {!!Form::label('nome_cid','Nome Cidade:') !!}
    {!! Form::text('nome_cid',$cidade->nome_cid, ['class'=>'form-control']) !!}

    {!!Form::label('estado','Estado:') !!}
    
    {!! Form::select('estado_id',\App\Estado::orderBy('nome_est')->pluck('nome_est','id')->toArray(),$cidade->estado->nome_est, ['class'=>'form-control']) !!}
    </div>
    <div class='form-group'> 
    {!!Form::submit('Editar Cidade',['class'=>'btn btn-primary']) !!}

    </div>

{!! Form::Close() !!}


</div>
@endsection
@section('table-delete')
"cidades"
@endsection
