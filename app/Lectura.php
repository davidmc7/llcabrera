<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lectura extends Model
{
    protected $table = "lecturas";
    protected $fillable = ['usuario_id', 'socio_id','mes', 'anio', 'lectura', 'estado'];

    /**
    * belongsTo('App\Category') //para llaves foraneas de la objeto
    * hasMany('App\Image')   //para la llave q se encuentra en otro objeto
    **/


    public function usuario(){
    	return $this->belongsTo('App\Usuario');
    }

    public function socio(){
    	return $this->belongsTo('App\Socio');
    }

    public function scopeBuscarSocioLecturasAnteriores($query, $socio_id){
        $query
            ->where('estado', '=', '0')
            ->where('socio_id', '=', $socio_id);

        return $query;
    }

    public function scopeBuscarSocioLecturasActuales($query, $socio_id){
        $query
            ->where('estado', '=', '1')
            ->where('socio_id', '=', $socio_id)
            ->orderBy('mes','asc')
            ->orderBy('anio','asc');

        return $query;
    }
}
