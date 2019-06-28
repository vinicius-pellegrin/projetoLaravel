<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteProfissionalController extends Controller
{
      public function index()
    {
        # code...
        //return "Olá sou o controler da CAtegoria";
       // $nome ='vinny'
       $clienteProfissionals = ClienteProfissional::all(); 
       return view('clienteProfissionals.index',['clienteProfissionals'=>$clienteProfissionals]);

    }

    public function create(){

        return view('clienteProfissionals.create');
    }

    public function store(ClienteProfissionalRequest $request){
        $novo_clienteProfissional = $request->all();
        ClienteProfissional::create($novo_clienteProfissional);

        return redirect()->route('clienteProfissionals');
    }

    public function destroy($id){
        
       // ClienteProfissional::find($id)->delete();



       try{
        ClienteProfissional::find($id)->delete();
        $ret = array('status'=>'ok','msg'=>"null");
        }catch(\Illuminate\Database\QueryException $e){
            $ret = array('status'=>'erro','msg'=>$e->getMessage());

        }catch(\PDOException $e){
            $ret = array('status'=>'erro','msg'=>$e->getMessage());
        }
        return $ret;  


        //return redirect()->route('clienteProfissionals');
    }

    public function edit($id){
        
        $clienteProfissional = ClienteProfissional::find($id);
        return view('clienteProfissionals.edit', compact('clienteProfissional'));
    }

public function update(ClienteProfissionalRequest $request, $id){
    $clienteProfissional = ClienteProfissional::find($id)->update($request->all());
    //return redirect('clienteProfissionals');
    return redirect()->route('clienteProfissionals');

}
}
