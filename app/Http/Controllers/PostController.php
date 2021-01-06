<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class PostController extends Controller
{
    //untuk ke halaman ngepost pertanyaan
    public function create(){
        return view('pertanyaan.create');
    }

    //untuk input data/store
    public function store(Request $request){
       // dd($request->all());
        $request->validate([
            'judul' => 'required',
            'pertanyaan' => 'required'
        ]);
        $query = DB::table('pertanyaan')->insert([
            "judul" => $request["judul"],
            "isi" => $request["pertanyaan"],
            "user_id" => Auth::id()
        ]);

        return redirect('/pertanyaan/index')->with('success','pertanyaan berhasil dimasukkan');
    }
    //menampilkan index untuk list pertanyaan
    public function index(){

        $pertanyaan = DB::table('pertanyaan')->get();
        //dd($pertanyaan);
        return view('pertanyaan.index', compact('pertanyaan'));
    }

    public function show($tanyaID){

        $tanya = DB::table('pertanyaan')->where('id', $tanyaID)->first();
        //dd($tanya);
    return view('pertanyaan.show', compact('tanya'));

    }

    public function edit($tanyaID){
        $tanya = DB::table('pertanyaan')->where('id', $tanyaID)->first();
        return view('pertanyaan.edit', compact('tanya'));
    }
    
    public function update($tanyaID, Request $request){
        $request->validate([
            'judul' => 'required',
            'pertanyaan' => 'required'
        ]);
        $query = DB::table('pertanyaan')->where('id',$tanyaID)
        ->update([
            'judul' => $request["judul"],
            'isi' => $request["pertanyaan"]
        ]);
        return redirect('/pertanyaan/index')->with('success', 'Berhasil Menyunting Pertanyaan');
    }

    public function destroy($tanyaID){
        $query = DB::table('pertanyaan')->where('id', $tanyaID)->delete();
        return redirect('/pertanyaan/index')->with('success', 'Berhasil MEnghapus Pertanyaan');
    }

    //bagian autentifikasi user
    public function __construct()
    {
    $this->middleware('auth')->except(['index']);
    }
}
