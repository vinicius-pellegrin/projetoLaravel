<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    //

    

    public function servicoProfissional(){
        return $this->hasMany('App\ServicoProfissional');

     
    }


    public function cliente(){
        return $this->belongsTo('App\Cliente');

     
    }
}
