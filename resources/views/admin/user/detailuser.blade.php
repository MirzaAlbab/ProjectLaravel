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
			 	: {{$user->id_pasien}}
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<h5>Nama</h5>            
			</div>
			<div class="col-sm-5">
            : {{$user->nama}}
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<h5>Gender</h5>            
			</div>
			<div class="col-sm-5">
            : {{$user->gender}}
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<h5>Email</h5>            
			</div>
			<div class="col-sm-5">
            : {{$user->email}}
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<h5>Tanggal Lahir</h5>            
			</div>
			<div class="col-sm-5">
				: {{$user->tanggal_lahir}}
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<h5>Alamat</h5>            
			</div>
			<div class="col-sm-5">
				: {{$user->alamat}}
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<h5>No_Telepon</h5>            
			</div>
			<div class="col-sm-5">
				: {{$user->telp}}
			</div>
		</div>
        
	<a href="/user" class="btn btn-secondary my-3">Kembali</a>
    </div>
@endsection