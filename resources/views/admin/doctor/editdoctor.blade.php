@extends('layout.admin')
<link rel="stylesheet" href="{{asset('css/styleadmin.css') }}">
@section('title', 'Edit Dokter')

@section('container')
<div class="col-md-10 pt-5 p-5">
<h3><i class="fas fa-user-md me-2"></i>EDIT DOKTER</h3><hr>
	<form method="post" class="log" action="{{ route('doctor.update',$doctor->ID_DOKTER) }}">
            @method('patch')
            @csrf
            <div class="row justify-content-center">
                <div class="col">
                    <label for="namalengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" id="namalengkap" name="NAMA" class="form-control form-control-sm" placeholder="Nama Lengkap" value="{{$doctor->NAMA}}" >
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col">
                    <label for="E-mail" class="form-label">E-mail</label>
                    <input type="email" id="E-mail" name="EMAIL" class="form-control form-control-sm" placeholder="E-mail" value="{{$doctor->EMAIL}}">
                </div>
                <div class="col">
                    <label for="NomorTelepon" class="form-label">Nomor Telepon</label>
                    <input type="tel" id="NomorTelepon" name="NO_TELP" class="form-control form-control-sm" placeholder="Nomor Telepon"  value="{{$doctor->NO_TELP}}" >
                    
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col">
                    <label for="Spesialisasi" class="form-label">Spesialisasi</label>
                    <input type="text" id="Spesialisasi" name="SPESIALISASI" class="form-control form-control-sm" placeholder="Spesialisasi" value="{{$doctor->SPESIALISASI}}">
                </div>
            </div>
           
                <a href="/doctor" class="btn btn-secondary my-3">Kembali</a>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
    </form>
</div>
@endsection