<?php

namespace App\Http\Controllers;
use App\Estado;
use App\EstadoCidades;
use App\Routes\web;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\EstadoRequest;

class EstadosController extends Controller
{
    //retornando um html nmetodo index

     public function index()
    {
        # code...
        //return "Olá sou o controler da CAtegoria";
       // $nome ='vinny'
       $estados = Estado::all(); 
       return view('estados.index',['estados'=>$estados]);

    }

    public function create(){

        return view('estados.create');
    }

    public function store(EstadoRequest $request){
        $novo_estado = $request->all();
        Estado::create($novo_estado);

        return redirect()->route('estados');
    }

    public function destroy($id){
        
        Estado::find($id)->delete();

        return redirect()->route('estados');
    }

    public function edit($id){
        
        $estado = Estado::find($id);
        return view('estados.edit', compact('estado'));
    }

public function update(EstadoRequest $request, $id){
    $estado = Estado::find($id)->update($request->all());
    //return redirect('estados');
    return redirect()->route('estados');

}

public function createMaster(){

    return view('estados.masterDetail');
    
    }


public function masterDetail(Request $request){
    Estado::create(['nome_est'=>$request->get('nome_est'),'uf_est'=>$request->get('uf_est')]);
    //Estado::create($novo_estado);
$itens =$request ->itens;
foreach($itens as $key=> $value){
EstadoCidades::create([
'cidade_id'=>$cidade->id,
'estado_id'=>$itens[$key]

        ]); 
    }
return redirect()->route('masterDetail');
}

}
