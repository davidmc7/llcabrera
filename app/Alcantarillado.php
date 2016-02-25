<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alcantarillado extends Model
{
    protected $table = "alcantarillados";
    protected $fillable = ['caracteristicasCo', 'diametroCo', 'materialCo', 'situacionCo', 'fechaConexion', 'caracteristicasTa', 'estadoTa', 'hubicacionCa', 'materialCa', 'estadoCa', 'saneamiento', 'observaciones', 'estado'];

    /**
    * belongsTo('App\Category') //para llaves foraneas de la objeto
    * hasMany('App\Image')   //para la llave q se encuentra en otra objeto
    **/

    public function socios(){
        return $this->hasMany('App\Socio');
    }
}
