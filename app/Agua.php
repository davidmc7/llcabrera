<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agua extends Model
{
    protected $table = "aguas";
    protected $fillable = ['numeroMe', 'lecturaMe', 'fechaConexion', 'DiametroMe', 'materialMe', 'caracteristicaCo', 'diametroCo', 'materialCo', 'situacionCo', 'fugaCo', 'hubicacionCa', 'materialCa','estadoCa', 'profundidadCa', 'estado'];

    /**
    * belongsTo('App\Category') //para llaves foraneas de la objeto
    * hasMany('App\Image')   //para la llave q se encuentra en otra objeto
    **/

    public function socios(){
        return $this->hasMany('App\Socio');
    }
}
