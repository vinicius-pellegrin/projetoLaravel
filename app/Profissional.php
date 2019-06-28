<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{  protected $fillable =['cidade_id','subCategoria_id','nome','profissao','dt_nasc','sub_nome'];

    public function cidade(){
        return $this->belongsTo('App\Cidade');

     
    }

    public function subCategoria(){
        return $this->belongsTo('App\SubCategoria');

     
    }
}
