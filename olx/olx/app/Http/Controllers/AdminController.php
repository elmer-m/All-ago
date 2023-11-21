<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //Criando a função de registo
    public function registerAdm(){
        return view('auth_admin.register');
    }
}
