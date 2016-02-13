<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoSocio extends Model
{
    protected $table = "tiposocios";
    protected $fillable = ['idUsuario', 'nombre', 'descripcion'];

    /**
    * belongsTo('App\Category') //para llaves foraneas de la objeto
    * hasMany('App\Image')   //para la llave q se encuentra en otra objeto
    **/


    public function usuario(){
    	return this->belongsTo('App\Usuario');
    }

    public function socios(){
    	return this->hasMany('App\Socio');
    }
}
