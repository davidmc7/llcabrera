<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agua extends Model
{
    protected $table = "aguas";
    protected $fillable = ['usuario_id', 'numeroMe', 'lecturaMe', 'DiametroMe', 'estadoMe', 'caracteristicaCo', 'diametroCo', 'materialCo', 'situacionCo', 'fugaCo', 'hubicacionCa', 'estadoCa', 'profundidadCa', 'estado'];

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
}
