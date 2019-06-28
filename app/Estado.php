<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    //
    protected $fillable =['nome_est','uf_est'];


   // public function cidades(){
      //  return $this->ToMany('App\Cidade');

      public function estadocidades(){
        // return $this->belongsTo('App\Estado'); 
        return $this->hasmany('App\EstadoCidades');
    }
}
