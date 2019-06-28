
@extends('default')

@section('title', 'profissionals')

@section('content_header')
<h1>profissionals</h1>
@stop

@section('content')
<h1>Cadastro de Profissionals  </h1>

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




{!! Form::open(['route' =>'profissionals.store']) !!}
    <div class='form-group'> 

    {!!Form::label('nome','Nome:') !!}
        {!! Form::text('nome',null, ['class'=>'form-control']) !!}



        {!!Form::label('profissao','Profissao:') !!}
        {!! Form::text('profissao',null, ['class'=>'form-control']) !!}


        {!!Form::label('dt_nasc','Dt.Nascimento:') !!}
        {!! Form::date('dt_nasc',null, ['class'=>'form-control']) !!}
        
        {!!Form::label('subCategoria_id','SubCategoria:') !!}
        {!! Form::select('subCategoria_id',\App\SubCategoria::orderBy('sub_nome')->pluck('sub_nome','id')->toArray(),null, ['class'=>'form-control']) !!}



        {!!Form::label('cidade_id','Cidade:') !!}
        {!! Form::select('cidade_id',\App\Cidade::orderBy('nome_cid')->pluck('nome_cid','id')->toArray(),null, ['class'=>'form-control']) !!}


         
      
        <!--   --- -------------------------  -->


<!--   --- -------------------------  -->
    </div>
    <div class='form-group'> 
    {!!Form::submit('Criar Cliente',['class'=>'btn btn-primary']) !!}
    <a href="{{ route('profissionals')}}" class="btn btn-danger">Cancelar</a>


</div>
@endsection
@section('table-delete')
"profissionals"
@endsection
