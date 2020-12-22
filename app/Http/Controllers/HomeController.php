<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //membuka halaman home
    public function home(){
        return view('home');
    }
   
}
