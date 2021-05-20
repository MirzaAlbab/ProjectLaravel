@extends('layout.admin')
<link rel="stylesheet" href="{{asset('css/styleadmin.css') }}">
@section('title', 'Users')

@section('container')
<div class="col-md-10 pt-5 p-5">
        <h3><i class="fas fa-users me-2"></i>DAFTAR USERS</h3><hr>
       <!-- Button trigger modal -->
        <a href="/user/create" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#user"><i class="fas fa-plus-circle me-2"></i>Tambah Users</a>
        @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
        @endif
        <div class="modal fade" id="user" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Form Tambah User</h5>
              </div>
              <div class="modal-body">
                <form method="post" class="log" action="user">
                @csrf
                  <div class="row justify-content-center">
                      <div class="col">
                          <label for="namalengkap" class="form-label">Nama Lengkap</label>
                          <input type="text" id="namalengkap" name="Nama" class="form-control form-control-sm" placeholder="Nama Lengkap">
                      </div>
                      <div class="col">
                          <label for="TanggalLahir" class="form-label">Tanggal Lahir</label>
                          <input type="date" id="TanggalLahir" name="Tanggal" class="form-control form-control-sm" placeholder="DD/MM/YY" name="TanggalLahir">
                      </div>
                  </div>
                  <div class="row justify-content-center">
                      <div class="col">
                          <label for="E-mail" class="form-label">E-mail</label>
                          <input type="email" id="E-mail" name="Email" class="form-control form-control-sm" placeholder="E-mail">
                      </div>
                      <div class="col">
                          <label for="NomorTelepon" class="form-label">Nomor Telepon</label>
                          <input type="tel" id="NomorTelepon" name="Telepon" class="form-control form-control-sm" placeholder="Nomor Telepon">
                      </div>
                  </div>
                  <div class="row justify-content-center">
                      <div class="col">
                          <label for="Alamat" class="form-label">Alamat</label>
                          <input type="text" id="Alamat" name="Alamat" class="form-control form-control-sm" placeholder="Alamat">
                      </div>
                  </div>
                  <div class="row justify-content-center">
                      <div class="col">
                          <label for="Gender" class="form-label">Gender</label>
                      </div>
                  </div>
                  <div class="row justify-content-center">
                      <div class="col">
                          <input class="form-check-input" type="radio" name="Gender" id="Laki-Laki" value="M">
                          <label class="form-check-label" for="Laki-Laki">
                          Laki-Laki
                          </label>
                      </div>
                      <div class="col">
                          <input class="form-check-input" type="radio" name="Gender" id="Wanita" value="F" >
                          <label class="form-check-label" for="Wanita">
                          Wanita
                          </label>
                      </div>
                  </div>
                  <div class="row justify-content-center">
                      <div class="col">
                          <label for="password" class="form-label">Password</label>
                          <input type="password" id="password" class="form-control form-control-sm" placeholder="Password" name="Password">
                      </div>
                      <div class="col">
                          <label for="confirmpassword" class="form-label">Konfirmasi Password</label>
                          <input type="confirmpassword" id="confirmpassword" class="form-control form-control-sm" placeholder="Ketik Ulang Password" name="confirmpassword">
                      </div>
                  </div>
              
              </div>
              <div class="modal-footer">
                <button type="button" class="close btn btn-danger" data-bs-dismiss="modal" aria-label="Close"> Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
              </div>
            </div>

          </div>
        </div>
        <table class="table table-striped table-bordered text-center">
        
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama User</th>
              <th scope="col">Email</th>
              <th scope="col">Alamat</th>
              <th scope="col">Gender</th>
              <th colspan="3" scope="col" >Aksi</th>
            </tr>
          </thead>
          <tbody>
          @foreach($user as $us)
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$us->Nama}}</td>
              <td>{{$us->Gender}}</td>
              <td>{{$us->Email}}</td>
              <td><a href="" class="btn btn-info">Detail</a></td>
              <td><i class="fas fa-edit bg-success p-2 text-white rounded"></i></td>
              <td><i class="fas fa-trash-alt bg-danger p-2 text-white rounded"></i></td>
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