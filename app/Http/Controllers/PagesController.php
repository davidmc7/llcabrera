<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function login(){
        return view('users.login');
    }
    public function bienvenida(){
    	return view('users.bienvenida');
    }
    public function socio(){
    	return view('socio');
    }
    public function lecturar(){
    	return view('lecturar');
    }
    public function cobrar(){
    	return view('cobrar');
    }
    public function informes(){
    	return view('informes');
    }
    public function admin(){
    	return view('admin');
    }
    public function parametro(){
    	return view('parametro');
    }

}
