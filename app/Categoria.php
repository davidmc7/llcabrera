<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = "categorias";
    protected $fillable = ['usuario_id', 'nombre', 'monto', 'montoMinimo', 'mesesRetraso', 'descripcion'];

    /**
    * belongsTo('App\Category') //para llaves foraneas de la objeto
    * hasMany('App\Image')   //para la llave q se encuentra en otra objeto
    **/


    public function usuario(){
    	return $this->belongsTo('App\Usuario');
    }

    public function socios(){
    	return $this->hasMany('App\Socio');
    }

    public function comisiones(){
        return $this->hasMany('App\Comision');
    }
}
