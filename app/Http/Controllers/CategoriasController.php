<?php

namespace App\Http\Controllers;
use App\Categoria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoriaRequest;


class CategoriasController extends Controller
{
    //retornando um html no metodo index

     public function index(Request $filtro){

        $filtragem = $filtro->get('filtragem');
        if ($filtragem == null)
        $categorias = Categoria::orderBy('descricao')->paginate(2);
        else
        $categorias = Categoria::where('descricao','like','%'.$filtragem.'%')->orderBy("descricao")->paginate(2);
        return view('categorias.index',['categorias'=>$categorias]);
        # code...
        //return "Olá sou o controler da CAtegoria";
       // $nome ='vinny'


       //sem paginação
       //$categorias = Categoria::all(); 
       //return view('categorias.index',['categorias'=>$categorias]);



       //com paginação
//sem pesquisa 
      // $categorias = Categoria::orderBy('descricao')->paginate(3);
       //return view('categorias.index',['categorias'=>$categorias]);
     }

    public function create(){

        return view('categorias.create');
    }

    public function store(CategoriaRequest $request){
        $nova_categoria = $request->all();
        Categoria::create($nova_categoria);

        return redirect()->route('categorias');
    }

    public function destroy($id){
        try{
            Categoria::find($id)->delete();
            $ret = array('status'=>'ok','msg'=>"null");
            }catch(\Illuminate\Database\QueryException $e){
                $ret = array('status'=>'erro','msg'=>$e->getMessage());

            }catch(\PDOException $e){
                $ret = array('status'=>'erro','msg'=>$e->getMessage());
            }
            return $ret;     
        

        //return redirect()->route('categorias');
    }

    public function edit($id){
        
        $categoria = Categoria::find($id);
        return view('categorias.edit', compact('categoria'));
    }

public function update(CategoriaRequest $request, $id){
    $categoria = Categoria::find($id)->update($request->all());
    //return redirect('categorias');
    return redirect()->route('categorias');

}





}




