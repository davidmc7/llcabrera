<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    protected $table = "socios";
    protected $fillable = ['idUsuario', 'idTipoSocio', 'idAgua', 'idAlcantarillado', 'codigoSocio', 'ci', 'ciExpedido', 'fecNac', 'nombre', 'apellidoP', 'apellidoM', 'profesion', 'genero', 'estadoCivil', 'tipoResponsable', 'telefono', 'celular', 'email', 'direccion', 'lote', 'manzano', 'pisos', 'conexiones', 'personas', 'familias', 'estado'];

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

    public function agua(){
    	return this->belongsTo('App\Agua');
    }

    public function alcantarillado(){
        return this->belongsTo('App\Alcantarillado');
    }s
    public function aportes(){
        return this->belongsToMany('App\Aporte');
    }
}
