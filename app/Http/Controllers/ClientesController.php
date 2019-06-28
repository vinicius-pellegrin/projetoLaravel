<?php

namespace App\Http\Controllers;
use App\Cliente;
use App\ClienteProfissional;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClienteRequest;

class ClientesController extends Controller
{
    //retornando um html nmetodo index

     public function index()
    {
        # code...
        //return "Olá sou o controler da CAtegoria";
       // $nome ='vinny'
       $clientes = Cliente::all(); 
       return view('clientes.index',['clientes'=>$clientes]);

    }

    public function create(){

        return view('clientes.create');
    }

    public function store(ClienteRequest $request){
        $novo_cliente = $request->all();
        Cliente::create($novo_cliente);

        return redirect()->route('clientes');
    }

    public function destroy($id){
        
       

try {
    ClienteProfissional::where('cliente_id',$id)->delete();
    Cliente::find($id)->delete();
    $ret= array('status'=>'ok','msg'=>'null');
} catch (\Illuminate\Database\QueryException $e) {
    $ret = array('status'=>'erro','msg'=>$e->getMessage());
}

catch(\PDOException $e){
    $ret = array('status'=>'erro','msg'=>$e->getMessage());
}
return $ret; 

      /* try{
        Cliente::find($id)->delete();
        $ret = array('status'=>'ok','msg'=>"null");
        }catch(\Illuminate\Database\QueryException $e){
            $ret = array('status'=>'erro','msg'=>$e->getMessage());

        }catch(\PDOException $e){
            $ret = array('status'=>'erro','msg'=>$e->getMessage());
        }
        return $ret;  

*/
        //return redirect()->route('clientes');
    }

    public function edit($id){
        
        $cliente = Cliente::find($id);
        return view('clientes.edit', compact('cliente'));
    }

public function update(ClienteRequest $request, $id){
    $cliente = Cliente::find($id)->update($request->all());
    //return redirect('clientes');
    return redirect()->route('clientes');

}

public function createMaster(){

    return view('clientes.masterDetail');
    
    }


public function masterDetail(Request $request){
    $cliente = Cliente::create(['nome'=>$request->get('nome'),'email'=>$request->get('email'),'dt_nasc'=>$request->get('dt_nasc'),'cidade_id'=>$request->get('cidade_id')]);
    //Estado::create($novo_estado);
$itens=$request->itens;
foreach($itens as $key => $value){
ClienteProfissional::create(['cliente_id'=>$cliente->id,'profissional_id'=>$itens[$key]

        ]); 
    }
return redirect()->route('clientes');
}



}
