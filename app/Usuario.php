<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "usuarios";
    protected $fillable = ['login', 'password', 'tipo', 'nombre', 'apellidoP', 'apellidoM', 'ci', 'ciExpedido', 'telefono', 'celular', 'email', 'foto', 'direccion'];

    /**
    * belongsTo('App\Category') //para llaves foraneas de la objeto
    * hasMany('App\Image')   //para la llave q se encuentra en otra objeto
    **/


    public function usuario(){
    	return this->belongsTo('App\Usuario');
    }

    public function aguas(){
    	return this->hasMany('App\Agua');;
    }

    public function alcantarillados(){
    	return this->hasMany('App\Alcantarillado');
    }

    public function aportes(){
        return this->hasMany('App\Aporte');
    }

    public function lecturas(){
        return this->hasMany('App\Lectura');
    }

    public function socios(){
        return this->hasMany('App\Socio');
    }

    public function tarifas(){
        return this->hasMany('App\Tarifa');
    }

    public function tipoSocios(){
        return this->hasMany('App\TipoSocio');
    }
}