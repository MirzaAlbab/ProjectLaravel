@extends('layout.admin')
<link rel="stylesheet" href="{{asset('css/styleadmin.css') }}">
@section('title', 'Dokter')

@section('container')
<div class="col-md-10 pt-5 p-5">
        <h3><i class="fas fa-user-md me-2"></i>DAFTAR DOKTER</h3><hr>
       <!-- Button trigger modal -->
        <a href="{{ route('doctor.create')}}" class="btn btn-primary mb-2" ><i class="fas fa-plus-circle me-2"></i>Tambah Dokter</a>
        @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
        @endif
        
        <table class="table border-dark table-striped table-hover table-bordered table-light text-center align-middle">
        
          <thead class="table-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Dokter</th>
              <th scope="col">Gender</th>
              <th scope="col">Spesialisasi</th>
              <th colspan="3" scope="col" >Aksi</th>
            </tr>
          </thead>
          <tbody>
          @foreach($doctor as $doc)
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$doc->NAMA}}</td>
              <td>{{$doc->JENIS_KELAMIN}}</td>
              <td>{{$doc->SPESIALISASI}}</td>
              <td><a href="{{ route('doctor.show',$doc->ID_DOKTER) }}" class="btn btn-info">Detail</a></td>
              <td><a href="{{ route('doctor.edit',$doc->ID_DOKTER) }}" class="btn  btn-sm bg-success" ><i class="fas fa-edit bg-success p-2 text-white rounded"></i></td></a>
              <form action="{{ route('doctor.destroy',$doc->ID_DOKTER) }}" method="post">
              @csrf
              @method('delete')
              <td><button type="submit" class="btn btn-sm bg-danger"><i class="fas fa-trash-alt p-2 text-white rounded"></i></button></td>
              </form>
            </tr>
          @endforeach
            
          </tbody>
        </table>
      </div>
    <script>
    var myModal = document.getElementById('myModal')
    var myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', function () {
    myInput.focus()
    })
    </script>
    
@endsection