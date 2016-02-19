<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comision extends Model
{
    protected $table = "comisiones";
    protected $fillable = ['usuario_id', 'categoria_id', 'estado', 'nombre', 'monto', 'descripcion'];

    /**
    * belongsTo('App\Category') //para llaves foraneas de la objeto
    * hasMany('App\Image')   //para la llave q se encuentra en otra objeto
    **/


    public function usuario(){
    	return $this->belongsTo('App\Usuario');
    }

    public function categoria(){
    	return $this->belongsTo('App\Categoria');
    }

    public function tarifas(){
    	return $this->hasMany('App\Tarifa');
    }
}
