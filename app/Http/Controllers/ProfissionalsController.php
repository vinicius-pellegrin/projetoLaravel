<?php

namespace App\Http\Controllers;
use App\Profissional;
use App\SubCategoria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfissionalRequest;

class ProfissionalsController extends Controller
{
    //retornando um html nmetodo index

     public function index()
    {
        # code...
        //return "Olá sou o controler da CAtegoria";
       // $nome ='vinny'
       $profissionals = Profissional::all(); 
       return view('profissionals.index',['profissionals'=>$profissionals]);

    }

    public function create(){

        return view('profissionals.create');
    }

    public function store(ProfissionalRequest $request){
        $novo_profissional = $request->all();
        Profissional::create($novo_profissional);

        return redirect()->route('profissionals');
    }

    public function destroy($id){
        
       // Profissional::find($id)->delete();



       try{
        Profissional::find($id)->delete();
        $ret = array('status'=>'ok','msg'=>"null");
        }catch(\Illuminate\Database\QueryException $e){
            $ret = array('status'=>'erro','msg'=>$e->getMessage());

        }catch(\PDOException $e){
            $ret = array('status'=>'erro','msg'=>$e->getMessage());
        }
        return $ret;  


        //return redirect()->route('profissionals');
    }

    public function edit($id){
        
        $profissional = Profissional::find($id);
        return view('profissionals.edit', compact('profissional'));
    }

public function update(ProfissionalRequest $request, $id){
    $profissional = Profissional::find($id)->update($request->all());
    //return redirect('profissionals');
    return redirect()->route('profissionals');

}


}
