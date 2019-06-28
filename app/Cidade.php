<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    //descrever os campos a serem inseridos na tabela

    protected $fillable =['nome_cid','estado_id'];

    public function estado(){
        return $this->belongsTo('App\Estado');

     
    }

}

