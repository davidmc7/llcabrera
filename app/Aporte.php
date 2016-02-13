<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aporte extends Model
{
    protected $table = "aportes";
    protected $fillable = ['idUsuario', 'nombre', 'monto', 'descripcion'];

    /**
    * belongsTo('App\Category') //para llaves foraneas de la objeto
    * hasMany('App\Image')   //para la llave q se encuentra en otra objeto
    **/


    public function usuario(){
    	return this->belongsTo('App\Usuario');
    }

    public function socios(){
    	return this->belongsToMany('App\Socio')->withTimestamps();
    }
}
