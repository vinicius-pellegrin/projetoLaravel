
@extends('default')

@section('title', 'Estados')

@section('content_header')
<h1>Estados</h1>
@stop

@section('content')


<div class='container'>
<h1>Editando Estados: {{$estado->nome_cid}}  </h1>

@if($errors->any())
    <ul class="alert alert-info">
    @foreach($errors->all() as $error)
        <li>
        {{$error}}
        </li>
    @endforeach
    </ul>
@endif



{!! Form::open(['route' =>["estados.update", $estado->id], 'method'=>'put']) !!}
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
    {!!Form::submit('Editar Estado',['class'=>'btn btn-primary']) !!}

    </div>

{!! Form::Close() !!}


</div>
@endsection
@section('table-delete')
"estados"
@endsection
