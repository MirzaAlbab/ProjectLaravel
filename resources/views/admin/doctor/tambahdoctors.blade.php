@extends('layout.admin')
<link rel="stylesheet" href="{{asset('css/styleadmin.css') }}">
@section('title', 'Tambah Dokter')

@section('container')
<div class="col-md-10 pt-5 p-5">
        <h3><i class="fas fa-user-md me-2"></i>TAMBAH DOKTER</h3><hr>
        <form method="post" class="log" action="{{ route('doctor.store')}}">
        @csrf
		<div class="row justify-content-center">
			<div class="col">
				<label for="namalengkap" class="form-label">Nama Lengkap</label>
				<input type="text" id="namalengkap" name="nama" class="form-control form-control-sm" placeholder="Nama Lengkap">
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col">
				<label for="gender" class="form-label">Gender</label>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col">
				<input class="form-check-input" type="radio" name="gender" id="Laki-Laki" value="M">
				<label class="form-check-label" for="Laki-Laki">
				Laki-Laki
				</label>
			</div>
			<div class="col">
				<input class="form-check-input" type="radio" name="gender" id="Wanita" value="F" >
				<label class="form-check-label" for="Wanita">
				Wanita
				</label>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col">
				<label for="E-mail" class="form-label">E-mail</label>
				<input type="email" id="E-mail" name="email" class="form-control form-control-sm" placeholder="E-mail">
			</div>
			<div class="col">
				<label for="NomorTelepon" class="form-label">Nomor Telepon</label>
				<input type="tel" id="NomorTelepon" name="telp" class="form-control form-control-sm" placeholder="Nomor Telepon">
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col">
				<label for="Spesialisasi" class="form-label">Spesialisasi</label>
				<input type="text" id="Spesialisasi" name="spesialisasi" class="form-control form-control-sm" placeholder="Spesialisasi">
			</div>
		</div>
		
		<div class="row justify-content-center">
			<div class="col">
				<label for="password" class="form-label">Password</label>
				<input type="password" id="password" class="form-control form-control-sm" placeholder="Password" name="password">
			</div>
			<div class="col">
				<label for="confirmpassword" class="form-label">Konfirmasi Password</label>
				<input type="password" id="password_confirmation" class="form-control form-control-sm" placeholder="Ketik Ulang Password" name="password_confirmation">
			</div>
		</div>
	<a href="/admin/doctor" class="close btn btn-secondary my-3">Kembali</a>
	<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
@endsection