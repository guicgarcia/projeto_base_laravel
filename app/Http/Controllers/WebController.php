<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
    	 return view('front.home', [
            'home' => 'Olá Mundo'
        ]);
    }

    public function login()
    {
    	 return view('front.login', [
            
        ]);
    }
}
