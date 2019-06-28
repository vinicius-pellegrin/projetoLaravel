<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicoProfissional extends Model
{
    //

    protected $fillable =['cliente_id','profissional_id','nome'];
    //

    
    public function profissional(){
        return $this->belongsTo('App\Profissional');

     
    }
}
