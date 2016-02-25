<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;

    protected $table = "usuarios";
    protected $fillable = ['login', 'password', 'tipo', 'nombre', 'apellidoP', 'apellidoM', 'ci', 'ciExpedido', 'telefono', 'celular', 'email', 'foto', 'direccion'];

    /**
    * belongsTo('App\Category') //para llaves foraneas de la objeto
    * hasMany('App\Image')   //para la llave q se encuentra en otra objeto
    **/

    public function aportes(){
        return $this->hasMany('App\Aporte');
    }

    public function socios(){
        return $this->hasMany('App\Socio');
    }

    public function lecturas(){
        return $this->hasMany('App\Lectura');
    }

    public function comisiones(){
        return $this->hasMany('App\Comision');
    }

    public function categorias(){
        return $this->hasMany('App\Categoria');
    }

    public function multas(){
        return $this->hasMany('App\multa');
    }

    public function ingresos(){
        return $this->hasMany('App\ingreso');
    }

    public function sistema(){
        return $this->hasMany('App\sistema');
    }
}