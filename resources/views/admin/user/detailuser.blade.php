@extends('layout.admin')
<link rel="stylesheet" href="{{asset('css/styleadmin.css') }}">
@section('title', 'Detail User')

@section('container')
<div class="col-md-10 pt-5 p-5">
		<h3><i class="fas fa-users me-2"></i>DETAIL USERS</h3><hr>
        <div class="row">
			<div class="col-sm-2">
				<h5>Id</h5>            
			</div>
			<div class="col-sm-5">
			 	: {{$user->ID_PASIEN}}
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<h5>Nama</h5>            
			</div>
			<div class="col-sm-5">
            : {{$user->NAMA}}
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<h5>Gender</h5>            
			</div>
			<div class="col-sm-5">
            : {{$user->JENIS_KELAMIN}}
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<h5>Email</h5>            
			</div>
			<div class="col-sm-5">
            : {{$user->EMAIL}}
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<h5>Tanggal Lahir</h5>            
			</div>
			<div class="col-sm-5">
				: {{$user->TANGGAL_LAHIR}}
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<h5>Alamat</h5>            
			</div>
			<div class="col-sm-5">
				: {{$user->ALAMAT}}
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<h5>No_Telepon</h5>            
			</div>
			<div class="col-sm-5">
				: {{$user->NO_TELP}}
			</div>
		</div>
        
	<a href="/user" class="btn btn-secondary my-3">Kembali</a>
    </div>
@endsection