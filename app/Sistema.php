<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sistema extends Model
{
    protected $table = "sistemas";
    protected $fillable = ['usuario_id', 'nombre', 'sigla', 'gestionInicio', 'gestionFin'];

    /**
    * belongsTo('App\Category') //para llaves foraneas de la objeto
    * hasMany('App\Image')   //para la llave q se encuentra en otro objeto
    **/


    public function usuario(){
    	return $this->belongsTo('App\Usuario');
    }
}
