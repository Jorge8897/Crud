<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlador extends Controller
{
    public function login (){
        return view('login');
    }

    public function validarlogin (Request $request){
        $user = $request -> input('user');
        $pass = $request -> input('password');
        $key = $request -> input('key');

        if($user === 'usuarioprueba' && $pass === '123' && $key === '123'){
            $url='archivo';
        } else{
            $url='login';
        }

        return view($url);
    }

    public function home (){
        return view('archivo');
    }

    public function pintor1 (){
        return view('Vincent');
    }

    public function pintor2 (){
        return view('Dali');
    }

    public function pintor3 (){
        return view('Picasso');
    }

    public function pintor4 (){
        return view('leovinci');
    }

    public function pintor5 (){
        return view('frida');
    }
}

