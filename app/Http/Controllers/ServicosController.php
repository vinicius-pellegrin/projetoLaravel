<?php

namespace App\Http\Controllers;
use App\Servico;
use App\Cliente;
use App\ServicoProfissional;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServicoRequest;

class ServicosController extends Controller
{
    //retornando um html nmetodo index

     public function index()
    {
        # code...
        //return "Olá sou o controler da CAtegoria";
       // $nome ='vinny'
       $servicos = Servico::all(); 
       return view('servicos.index',['servicos'=>$servicos]);

    }

    public function create(){

        return view('servicos.create');
    }

    public function store(ServicoRequest $request){
        $novo_servico = $request->all();
        Servico::create($novo_servico);

        return redirect()->route('servicos');
    }

    public function destroy($id){
        
       // Servico::find($id)->delete();



       try{
        Servico::find($id)->delete();
        $ret = array('status'=>'ok','msg'=>"null");
        }catch(\Illuminate\Database\QueryException $e){
            $ret = array('status'=>'erro','msg'=>$e->getMessage());

        }catch(\PDOException $e){
            $ret = array('status'=>'erro','msg'=>$e->getMessage());
        }
        return $ret;  


        //return redirect()->route('servicos');
    }

    public function edit($id){
        
        $servico = Servico::find($id);
        return view('servicos.edit', compact('servico'));
    }

public function update(ServicoRequest $request, $id){
    $servico = Servico::find($id)->update($request->all());
    //return redirect('servicos');
    return redirect()->route('servicos');

}

public function createMaster(){

    return view('servicos.masterDetail');
    
    }


public function masterDetail(Request $request){
     //Servico::create();

    //Estado::create($novo_estado);
    $servico = $request->all();
$itens=$request->itens;
foreach($itens as $key => $value){
ServicoProfissional::create(['cliente_id'=>cliente_id,'profissional_id'=>$itens[$key]

        ]); 
    }
return redirect()->route('servicos');
}



}
