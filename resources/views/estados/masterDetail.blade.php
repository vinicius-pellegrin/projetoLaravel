@extends('default')


@section('content_header')
<h1>Estados-masterdetail</h1>
@stop

@section('content')
<h1>Cadastro de Estados-MAsterdetail  </h1>

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



{!! Form::open(['route' =>'estados.masterDetail']) !!}
    <div class='form-group'> 

       


        {!!Form::label('estado_id','Estado:') !!}
        {!! Form::select('estado_id',\App\Estado::orderBy('nome_est')->pluck('nome_est','id')->toArray(),null, ['class'=>'form-control','require']) !!}


        <!--{!!Form::label('nome_cid','Nome Cidade:') !!}
        {!! Form::text('nome_cid',null, ['class'=>'form-control','require']) !!}-->

    </div>
    <div class='form-group'> 
<hr />
<h4>Cidades</h4>
<div class='input_fields_wrap'></div>
<br>

<button style='float:right;' class="add_field_button btn btn_success">Adicionar cidade</button>

<br>
<hr />




    {!!Form::submit('Criar Cidade',['class'=>'btn btn-primary']) !!}

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
        var newField='<div><div style="width:94%; float:left" id="cidade">{!! Form::select("itens[]",\App\Cidade::orderBy("nome_cid")->pluck("nome_cid","id")->toArray(),null,["class"=>"form-control","required","placeholder"=>"selecione uma Cidade"]) !!}</div><button type="button" class="remove_field btn btn-danger"><i class="fa fa-trash"></button></div>';
$(wrapper).append(newField);
    });
    $(wrapper).on("click",".remove_field", function(e){
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});

</script>

@endsection

@section('table-delete')
"cidades"
@endsection
