<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Multa extends Model
{
    protected $table = "multas";
    protected $fillable = ['usuario_id', 'categoria_id', 'meses', 'multa', 'porcentaje','descripcion'];

    /**
    * belongsTo('App\Category') //para llaves foraneas de la objeto
    * hasMany('App\Image')   //para la llave q se encuentra en otra objeto
    **/


    public function usuario(){
    	return $this->belongsTo('App\Usuario');
    }

    public function categoria(){
        return $this->belongsTo('App\Categoria');
    }
}
