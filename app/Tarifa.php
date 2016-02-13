<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarifa extends Model
{
    protected $table = "tarifas";
    protected $fillable = ['idUsuario', 'idTipoSocio', 'nombre', 'montoMts3', 'montoBs', 'mesIni', 'MesFin', 'anio'];

    /**
    * belongsTo('App\Category') //para llaves foraneas de la objeto
    * hasMany('App\Image')   //para la llave q se encuentra en otra objeto
    **/


    public function usuario(){
    	return this->belongsTo('App\Usuario');
    }

    public function tipoSocio(){
    	return this->belongsTo('App\TipoSocio');
    }

    public function tarifas(){
    	return this->hasMany('App\Tarifa');
    }
}
