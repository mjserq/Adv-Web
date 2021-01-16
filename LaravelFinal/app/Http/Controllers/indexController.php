<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    
    public function index(){
    	return view('index');
    }
    public function generic(){
    	return view('generic');
    }
    public function elements(){
    	return view('elements');
    }
}
