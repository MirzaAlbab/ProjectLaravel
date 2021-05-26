@extends('layout.admin')
<link rel="stylesheet" href="{{asset('css/styleadmin.css') }}">
@section('title', 'Detail Dokter')

@section('container')
<div class="col-md-10 pt-5 p-5">
        <h3><i class="fas fa-user-md me-2"></i>DETAIL DOKTER</h3><hr>
        <div class="row">
			<div class="col-sm-2">
				<h5>Id</h5>            
			</div>
			<div class="col-sm-5">
			 	: {{$doctor->ID_DOKTER}}
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<h5>Nama</h5>            
			</div>
			<div class="col-sm-5">
            : {{$doctor->NAMA}}
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<h5>Gender</h5>            
			</div>
			<div class="col-sm-5">
            : {{$doctor->JENIS_KELAMIN}}
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<h5>Email</h5>            
			</div>
			<div class="col-sm-5">
            : {{$doctor->EMAIL}}
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<h5>Spesialisasi</h5>            
			</div>
			<div class="col-sm-5">
				: {{$doctor->SPESIALISASI}}
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<h5>No_Telepon</h5>            
			</div>
			<div class="col-sm-5">
				: {{$doctor->NO_TELP}}
			</div>
		</div>
        
	<a href="/doctor" class="btn btn-secondary my-3">Kembali</a>
    </div>
@endsection