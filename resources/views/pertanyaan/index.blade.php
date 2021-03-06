@extends('layout.master')

@section('content')
<div class="container-fluid">
    <div class="card-body">
    @if (session('success'))
       <div class="alert alert-success" >
        {{session('success')}}
       </div>
    @endif
    <a role="button" href="/pertanyaan/create" class="btn btn-primary btn-lg btn-block">Masukkan Pertanyaan Baru</a>
    <table class="table table-bordered ">
      <thead class="bg-success">                  
        <tr>
          <th style="width:10px">No</th>
          <th>Judul</th>
          <th >Pertanyaan</th>
          <th > Tindakan </th>
          
        </tr>
      </thead>
      <tbody>
        @forelse ($pertanyaan as $key => $tanya)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$tanya->judul}}</td>
                <td>{{$tanya->isi}}</td>
                <td >
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <a class="btn btn-info btn-sm" href="/pertanyaan/{{$tanya->id}}" role="button">Tampilkan Detail</a>
                    <a class="btn btn-info btn-sm" href="/pertanyaan/{{$tanya->id}}/edit" role="button">Edit</a>
                    <form action="/pertanyaan/{{$tanya->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger btn-sm" value="!!HAPUS!!">
                    </form>
                    </div>
                </td>
            </tr>
        @empty
        <td colspan="3" align="center"> <h3> BELUM ADA DATA MASUK </h3> </td>
            
        
        @endforelse
      </tbody>
    </table>
  </div>

</div>

@endsection