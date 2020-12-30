@extends('layout.master')

@section('content')
<div class="card text-center">
    <div class="card-header">
      Detail Pertanyaan
    </div>
    <div class="card-body">
      <h5 class="card-title"> {{$tanya->judul}} </h5>
      <p class="card-text">{{$tanya->isi}}</p>
      <a href="/pertanyaan/index" class="btn btn-primary">Kembali Ke Halaman Utama</a>
    </div>
    
  </div>
   
@endsection