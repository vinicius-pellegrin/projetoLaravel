<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategoria extends Model
{
    protected $fillable =['categoria_id','sub_nome','sub_desc'];
    
    public function categoria(){
        return $this->belongsTo('App\Categoria');
}
public function profissional(){
    return $this->belongsTo('App\profissional');
}
}
