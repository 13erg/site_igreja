<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// controller homer manipulará toda a página principal do site
class HomeController extends Controller
{   
    
    public function index(){

        return view('site.index');
    }
}
