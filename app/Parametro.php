<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parametro extends Model
{
    protected $table = "aportes";
    protected $fillable = ['nombreSistema', 'siglaSistema', 'gestionOrigen', 'gestionActual', 'mesesRetrasoMulta', 'diasRetrasoMulta', 'multaMeses', 'multaDias'];

    /**
    * belongsTo('App\Category') //para llaves foraneas de la objeto
    * hasMany('App\Image')   //para la llave q se encuentra en otra objeto
    **/
}
