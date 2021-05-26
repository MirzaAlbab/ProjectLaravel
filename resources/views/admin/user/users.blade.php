@extends('layout.admin')
<link rel="stylesheet" href="{{asset('css/styleadmin.css') }}">
@section('title', 'Users')

@section('container')
<div class="col-md-10 pt-5 p-5">
        <h3><i class="fas fa-users me-2"></i>DAFTAR USERS</h3><hr>
       <!-- Button trigger modal -->
        <a href="{{ route('user.create')}}" class="btn btn-primary mb-2"><i class="fas fa-plus-circle me-2"></i>Tambah Users</a>
        @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
        @endif
        <table class="table border-dark table-striped table-hover table-bordered table-light text-center align-middle">
        
          <thead class="table-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama User</th>
              <th scope="col">Gender</th>
              <th scope="col">Email</th>
              <th colspan="3" scope="col" >Aksi</th>
            </tr>
          </thead>
          <tbody>
          @foreach($user as $us)
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$us->NAMA}}</td>
              <td>{{$us->JENIS_KELAMIN}}</td>
              <td>{{$us->EMAIL}}</td>
              <td><a href="{{ route('user.show',$us->ID_PASIEN) }}" class="btn btn-info">Detail</a></td>
              <td><a href="{{ route('user.edit',$us->ID_PASIEN) }}" class="btn  btn-sm bg-success" ><i class="fas fa-edit bg-success p-2 text-white rounded"></i></td></a>
              <form action="{{ route('user.destroy',$us->ID_PASIEN) }}" method="post">
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