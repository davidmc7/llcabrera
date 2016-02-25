<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    protected $table = "ingresos";
    protected $fillable = ['usuario_id', 'tipo', 'entidad', 'datos'];

    /**
    * belongsTo('App\Category') //para llaves foraneas de la objeto
    * hasMany('App\Image')   //para la llave q se encuentra en otra objeto
    **/


    public function usuario(){
    	return $this->belongsTo('App\Usuario');
    }
}
