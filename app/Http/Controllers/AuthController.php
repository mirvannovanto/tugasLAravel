<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //membuka halaman register
    public function register(){
        return view('register');
    }

    //membuka halaman submit seteleah register alias welcome
    public function welcome(){
        return view ('welcomeTugas');
    }

    //metode post untuk halaman register

    public function welcomeReg(Request $request){
        //deklarasi variabel
        $namaAwal = $request->namaAwal;
        $namaAkhir = $request->namaAkhir;

        //dd($request->all());
        
        return view ('welcomeTugas', compact('namaAwal','namaAkhir'));
    }
    
}


