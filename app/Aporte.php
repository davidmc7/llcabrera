<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aporte extends Model
{
    protected $table = "aportes";
    protected $fillable = ['usuario_id', 'categoria_id', 'nombre', 'monto', 'descripcion'];

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
    
    public function socios(){
    	return $this->belongsToMany('App\Socio')->withTimestamps();
    }
}
