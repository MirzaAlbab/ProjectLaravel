@extends('layout.home')
<link rel="stylesheet" href="{{asset('css/styleregis.css') }}">
@section('title', 'Register')

@section('container')
<div class="container-konten">
        <div class="container gambar">
          <img class="covid" src="../img/man.png" alt="" width="50%">
        </div>
    <div class="container">
        <h1 class="text-center title">Register as User</h1>
        <form method="post" class="log" action="{{ route('register') }}">
            @csrf
            <div class="row justify-content-center">
                <div class="col">
                    <label for="namalengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" id="namalengkap" class="form-control form-control-sm @error('nama') is-invalid @enderror" placeholder="Nama Lengkap" name="nama" value="{{old('nama')}}">
                </div>
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                <div class="col">
                    <label for="TanggalLahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" id="TanggalLahir" class="form-control form-control-sm @error('tanggal_lahir') is-invalid @enderror" placeholder="DD/MM/YY" name="tanggal_lahir" value="{{old('tanggal_lahir')}}">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col">
                    <label for="E-mail" class="form-label">E-mail</label>
                    <input type="email" id="E-mail" class="form-control form-control-sm @error('email') is-invalid @enderror" placeholder="E-mail" name="email" value="{{old('email')}}">
                </div>
                <div class="col">
                    <label for="NomorTelepon" class="form-label">Nomor Telepon</label>
                    <input type="tel" id="telp" class="form-control form-control-sm" placeholder="Nomor Telepon" name="telp" value="{{old('telp')}}">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col">
                    <label for="Alamat" class="form-label">Alamat</label>
                    <input type="text" id="Alamat" class="form-control form-control-sm" placeholder="Alamat" name="alamat" value="{{old('alamat')}}">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col">
                    <label for="gender" class="form-label">Gender</label>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col">
                    <input class="form-check-input @error('gender') is-invalid @enderror" type="radio"  id="Laki-Laki" name="gender" value="M">
                    <label class="form-check-label" for="Laki-Laki">
                    Laki-Laki
                    </label>
                </div>
                <div class="col">
                    <input class="form-check-input @error('gender') is-invalid @enderror" type="radio"  id="Wanita" name="gender" value="F">
                    <label class="form-check-label" for="Wanita">
                    Wanita
                    </label>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" class="form-control form-control-sm @error('password') is-invalid @enderror" placeholder="Password" name="password">
                </div>
                <div class="col">
                    <label for="password-confirm" class="form-label">Konfirmasi Password</label>
                    <input type="password" id="password_confirmation" class="form-control form-control-sm @error('password_confirmation') is-invalid @enderror" placeholder="Ketik Ulang Password" name="password_confirmation">
                </div>
            </div>
        
            <div class="row justify-content-center agree mt-2">
                <div class="col ">
                    <input class="form-check-input" type="checkbox" value="" id="Terms" required>
                    <label class="form-check-label" for="Terms">
                    I Agree to the <a href="#">Terms of Services</a>
                    </label>
                </div>
            </div>
            <div class="d-grid gap-2 mt-1 mx-auto">
                <button class="btn tombolreg" type="submit">Create Account</button>
            </div>
        </form>
        <div class="row justify-content-center">
            <div class="col">
                <h5 class="klarifikasi">Already have an account? <a href="/login">Log in</a></h5>
            </div>
        </div>
        
    </div>
@endsection