@extends('layout.admin')
<link rel="stylesheet" href="{{asset('css/styleadmin.css') }}">
@section('title', 'Edit User')

@section('container')
<div class="col-md-10 pt-5 p-5">
<h3><i class="fas fa-users me-2"></i>EDIT USERS</h3><hr>
        <!-- Edit Form -->
        <form method="post" class="log" action="{{ route('user.update',$user->id) }}">
        @method('patch')
        @csrf
            <div class="row justify-content-center">
            
                <div class="col">
                    <label for="namalengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" id="namalengkap" name="nama" class="form-control form-control-sm" placeholder="Nama Lengkap" value="{{$user->nama}}" >
                    
                </div>
                <div class="col">
                    <label for="TanggalLahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" id="TanggalLahir" name="tanggal_lahir" class="form-control form-control-sm" placeholder="DD/MM/YY" name="TanggalLahir" value="{{$user->tanggal_lahir}}" >
                    
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col">
                    <label for="E-mail" class="form-label">E-mail</label>
                    <input type="email" id="E-mail" name="email" class="form-control form-control-sm" placeholder="E-mail" value="{{$user->email}}">
                </div>
                <div class="col">
                    <label for="NomorTelepon" class="form-label">Nomor Telepon</label>
                    <input type="tel" id="NomorTelepon" name="telp" class="form-control form-control-sm" placeholder="Nomor Telepon"  value="{{$user->telp}}" >
                    
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col">
                    <label for="Alamat" class="form-label">Alamat</label>
                    <input type="text" id="Alamat" name="alamat" class="form-control form-control-sm" placeholder="Alamat" value="{{$user->alamat}}">
                   
                </div>
            </div>
                <a href="/admin/user" class="btn btn-secondary my-3">Kembali</a>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
              </form>
              </div>
            </div>

          </div>
        </div>
        
</div>
@endsection