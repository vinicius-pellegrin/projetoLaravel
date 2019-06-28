
@extends('default')

@section('title', 'servicos')

@section('content_header')
<h1>servicos</h1>
@stop

@section('content')
<h1>Cadastro de Servicos  </h1>

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



{!! Form::open(['route' =>'servicos.store']) !!}
    <div class='form-group'> 

      
         {!!Form::label('cliente_id','Cliente:') !!}
        {!! Form::select('cliente_id',\App\Cliente::orderBy('nome')->pluck('nome','id')->toArray(),null, ['class'=>'form-control']) !!}

        {!!Form::label('profissional_id','Profissional:') !!}
        {!! Form::select('profissional_id',\App\Profissional::orderBy('nome')->pluck('nome','id')->toArray(),null, ['class'=>'form-control']) !!}


         
         

        <!--   --- -------------------------  -->





<!--   --- -------------------------  -->


    </div>
    <div class='form-group'> 
    {!!Form::submit('Criar Servico',['class'=>'btn btn-primary']) !!}
    <a href="{{ route('servicos')}}" class="btn btn-danger">Cancelar</a>
    </div>

{!! Form::Close() !!}


</div>
@endsection
@section('table-delete')
"servicos"
@endsection
