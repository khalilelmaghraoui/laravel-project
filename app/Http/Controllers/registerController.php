<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerController extends Controller
{
    public function register()
    {

        return view('register');
    }

    public function show(){
        return view('showInfo');
    }
    public function preRegister(){
        return view('preRegister');
    }
}
