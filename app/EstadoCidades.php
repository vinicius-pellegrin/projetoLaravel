<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoCidades extends Model
{
    //
    protected $fillable =['id_est','nome_cid'];
    
    public function estado(){
        return $this->belongsTo('App\Estado');

}
}
