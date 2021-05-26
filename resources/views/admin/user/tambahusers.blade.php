@extends('layout.admin')
<link rel="stylesheet" href="{{asset('css/styleadmin.css') }}">
@section('title', 'Edit User')

@section('container')
<div class="col-md-10 pt-5 p-5">
        <h3><i class="fas fa-users me-2"></i>TAMBAH USERS</h3><hr>
        <!-- Add Form -->
        <form method="post" class="log" action="{{ route('user.store')}}">
        @csrf
        <div class="row justify-content-center">
            <div class="col">
                <label for="namalengkap" class="form-label">Nama Lengkap</label>
                <input type="text" id="namalengkap" name="NAMA" class="form-control form-control-sm" placeholder="Nama Lengkap">
            </div>
            <div class="col">
                <label for="TanggalLahir" class="form-label">Tanggal Lahir</label>
                <input type="date" id="TanggalLahir" name="TANGGAL_LAHIR" class="form-control form-control-sm" placeholder="DD/MM/YY" name="TanggalLahir">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col">
                <label for="E-mail" class="form-label">E-mail</label>
                <input type="email" id="E-mail" name="EMAIL" class="form-control form-control-sm" placeholder="E-mail">
            </div>
            <div class="col">
                <label for="NomorTelepon" class="form-label">Nomor Telepon</label>
                <input type="tel" id="NomorTelepon" name="NO_TELP" class="form-control form-control-sm" placeholder="Nomor Telepon">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col">
                <label for="Alamat" class="form-label">Alamat</label>
                <input type="text" id="Alamat" name="ALAMAT" class="form-control form-control-sm" placeholder="Alamat">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col">
                <label for="JENIS_KELAMIN" class="form-label">Gender</label>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col">
                <input class="form-check-input" type="radio" name="JENIS_KELAMIN" id="Laki-Laki" value="M">
                <label class="form-check-label" for="Laki-Laki">
                Laki-Laki
                </label>
            </div>
            <div class="col">
                <input class="form-check-input" type="radio" name="JENIS_KELAMIN" id="Wanita" value="F" >
                <label class="form-check-label" for="Wanita">
                Wanita
                </label>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" class="form-control form-control-sm" placeholder="Password" name="PASSWORD">
            </div>
            <div class="col">
                <label for="confirmpassword" class="form-label">Konfirmasi Password</label>
                <input type="confirmpassword" id="confirmpassword" class="form-control form-control-sm" placeholder="Ketik Ulang Password" name="CONFIRMPASSWORD">
            </div>
        </div>
        <a href="/user" class="close btn btn-secondary my-3">Kembali</a>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>
@endsection