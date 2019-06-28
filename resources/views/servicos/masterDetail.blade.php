@extends('default')


@section('content_header')
<h1>Servicos-masterdetail</h1>
@stop

@section('content')
<h1>Cadastro de Servicos-MAsterdetail  </h1>

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



{!! Form::open(['route' =>'servicos.masterDetail']) !!}
    <div class='form-group'> 

    {!!Form::label('cliente_id','Cliente:') !!}
        {!! Form::select('cliente_id',\App\Cliente::orderBy('nome')->pluck('nome','id')->toArray(),null, ['class'=>'form-control','name'=>'cliente']) !!}

    </div>
    <div class='form-group'> 
<hr />
<h4>Profissional</h4>
<div class='input_fields_wrap'></div>
<br>

<button style='float:right;' class="add_field_button btn btn_success">Adicionar Profissional</button>

<br>
<hr />




    {!!Form::submit('Criar Servicos',['class'=>'btn btn-primary']) !!}

    </div>

{!! Form::Close() !!}


</div>
@endsection
@section('dyn_scripts')
<script>
$(document).ready(function(){


    var wrapper= $(".input_fields_wrap");
    var add_button=$(".add_field_button");

    var x=0;
    $(add_button).click(function(e){

        x++;
        var newField='<div><div style="width:94%; float:left" id="profissional">{!! Form::select("itens[]",\App\Profissional::orderBy("nome")->pluck("nome","id")->toArray(),null,["class"=>"form-control","required","placeholder"=>"selecione um profissional"]) !!}</div><button type="button" class="remove_field btn btn-danger"><i class="fa fa-trash"></button></div>';
$(wrapper).append(newField);
    });
    $(wrapper).on("click",".remove_field", function(e){
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});

</script>

@endsection

@section('table-delete')
"servicos"
@endsection
