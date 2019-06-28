<?php

namespace App\Http\Controllers;
use App\SubCategoria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SubCategoriaRequest;


class SubCategoriasController extends Controller
{
    //retornando um html no metodo index

     public function index()
    {
        # code...
        //return "Olá sou o controler da CAtegoria";
       // $nome ='vinny'
       $subCategorias = SubCategoria::all(); 
       return view('subCategorias.index',['subCategorias'=>$subCategorias]);

    }

    public function create(){

        return view('subCategorias.create');
    }

    public function store(SubCategoriaRequest $request){
        $nova_subCategoria = $request->all();
        SubCategoria::create($nova_subCategoria);

        return redirect()->route('subCategorias');
    }

    public function destroy($id){
        try{
            SubCategoria::find($id)->delete();
            $ret = array('status'=>'ok','msg'=>"null");
            }catch(\Illuminate\Database\QueryException $e){
                $ret = array('status'=>'erro','msg'=>$e->getMessage());

            }catch(\PDOException $e){
                $ret = array('status'=>'erro','msg'=>$e->getMessage());
            }
            return $ret;     
        

        //return redirect()->route('subCategorias');
    }

    public function edit($id){
        
        $subCategoria = SubCategoria::find($id);
        return view('subCategorias.edit', compact('subCategoria'));
    }

public function update(SubCategoriaRequest $request, $id){
    $subCategoria = SubCategoria::find($id)->update($request->all());
    //return redirect('subCategorias');
    return redirect()->route('subCategorias');

}


}
