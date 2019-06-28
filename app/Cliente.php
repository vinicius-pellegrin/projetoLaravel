<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //descrever os campos a serem inseridos na tabela

    protected $fillable =['nome','email','dt_nasc','cidade_id','profissional_id'];

    public function cidade(){
        return $this->belongsTo('App\Cidade');

     
    }

    public function clienteProfissional(){
        return $this->hasMany('App\ClienteProfissional');

     
    }
}
