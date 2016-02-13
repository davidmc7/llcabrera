<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lectura extends Model
{
    protected $table = "lecturas";
    protected $fillable = ['idUsuario', 'idSocio', 'idTarifa','mes', 'anio', 'lectura', 'estado'];

    /**
    * belongsTo('App\Category') //para llaves foraneas de la objeto
    * hasMany('App\Image')   //para la llave q se encuentra en otra objeto
    **/


    public function usuario(){
    	return this->belongsTo('App\Usuario');
    }

    public function socio(){
    	return this->belongsTo('App\Socio');
    }

    public function tarifa(){
    	return this->belongsTo('App\Tarifa');
    }
}
