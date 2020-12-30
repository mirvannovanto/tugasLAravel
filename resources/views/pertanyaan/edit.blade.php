@extends('layout.master')

@section('content')
<div class="container">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">SILAHKAN MENYUNTING ISI PERTANYAAN ke-{{$tanya->id}}</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" action="/pertanyaan/{{$tanya->id}}" method="POST" >
        @csrf
        @method('PUT')
        <div class="card-body">
          <div class="form-group">
            <label for="judul">Judul Pertanyaan</label>
            <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul pertanyaan" value="{{old('judul', $tanya->judul)}}">
            @error('judul')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="pertanyaan">Pertanyaan</label>
            <input type="text" class="form-control" id="pertanyaan" name="pertanyaan" placeholder="Apa pertanyaan anda?" value="{{old('isi', $tanya->isi)}}">
            @error('pertanyaan')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          
         
          
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" nameclass="btn btn-primary">Submit pertanyaan</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
@endsection