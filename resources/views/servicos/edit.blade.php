
@extends('default')

@section('title', 'clientes')

@section('content_header')
<h1>clientes</h1>
@stop

@section('content')
<h1>Cadastro de Clientes  </h1>

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



{!! Form::open(['route' =>["clientes.update", $cliente->id], 'method'=>'put']) !!}
    <div class='form-group'> 

        {!!Form::label('nome','Nome:') !!}
        {!! Form::text('nome',$cliente->nome, ['class'=>'form-control']) !!}



        {!!Form::label('email','Email:') !!}
        {!! Form::text('email',$cliente->email, ['class'=>'form-control']) !!}


        {!!Form::label('dt_nasc','Dt.Nascimento:') !!}
        {!! Form::date('dt_nasc',$cliente->dt_nasc, ['class'=>'form-control']) !!}

        {!!Form::label('cidade_id','Cidade:') !!}
        {!! Form::select('cidade_id',\App\Cidade::orderBy('nome_cid')->pluck('nome_cid','id')->toArray(),$cliente->cidade->nome_cid, ['class'=>'form-control']) !!}


         
         

        <!--   --- -------------------------  -->


        <select id="options" onchange="optionCheck()">


        <option value="sh">Mostra</option>
<option value="show">Mostra Div</option>
<option value="goto">Vai para o Google</option>

</select>

<div id="hiddenDiv" style="height:100px;width:300px;border:1px;visibility:hidden;">
Eu estou visível agora!
</div>
 

 

<script type="text/javascript">
    function optionCheck(){
        var option = document.getElementById("options").value;
        if(option == "show"){
            document.getElementById("hiddenDiv").style.visibility ="visible";
        }else{
            document.getElementById("hiddenDiv").style.visibility ="hidden";

        }
        
    }
</script>


<!--   --- -------------------------  -->


    </div>
    <div class='form-group'> 
    {!!Form::submit('Criar Cliente',['class'=>'btn btn-primary']) !!}

    </div>

{!! Form::Close() !!}


</div>
@endsection
@section('table-delete')
"clientes"
@endsection
