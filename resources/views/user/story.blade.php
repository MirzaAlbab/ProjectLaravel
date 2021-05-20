@extends('layout.home')
<link rel="stylesheet" href="{{asset('css/stylestory.css') }}">
@section('title', 'Story')

@section('container')
<div class="containerkonten">
        <div class="container gambar">
          <img class="covid" src="../img/script.png" alt="" width="50%">
        </div>
    <div class="container">
        <h1 class="text-center title">Submit your story</h1>
        <form method="post" class="log">
            <div class="row justify-content-center">
                <div class="col">
                    <label for="namalengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" id="namalengkap" class="form-control form-control-sm" placeholder="Nama Lengkap">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col">
                    <label for="E-mail" class="form-label">E-mail</label>
                    <input type="email" id="E-mail" class="form-control form-control-sm" placeholder="E-mail">
                </div>
                <div class="col">
                    <label for="NomorTelepon" class="form-label">Nomor Telepon</label>
                    <input type="tel" id="NomorTelepon" class="form-control form-control-sm" placeholder="Nomor Telepon">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col">
                    <label for="Gender" class="form-label">Gender</label>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col">
                    <input class="form-check-input" type="radio" name="Gender" id="Laki-Laki">
                    <label class="form-check-label" for="Laki-Laki">
                    Laki-Laki
                    </label>
                </div>
                <div class="col">
                    <input class="form-check-input" type="radio" name="Gender" id="Wanita" >
                    <label class="form-check-label" for="Wanita">
                    Wanita
                    </label>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col">
                    <label for="Alamat" class="form-label">File</label>
                    <input type="file" id="Alamat" class="form-control form-control-sm" placeholder="Alamat">
                </div>
            </div>
        
            <div class="row justify-content-center agree">
                <div class="col ">
                    <input class="form-check-input" type="checkbox" value="" id="Terms" required>
                    <label class="form-check-label" for="Terms">
                    I Agree to the <a href="#">Terms of Services</a>
                    </label>
                </div>
            </div>
            <div class="d-grid gap-2 mx-auto">
                <button class="btn mt-3 tombolsto" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection