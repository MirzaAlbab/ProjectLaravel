@extends('layout.admin')
<link rel="stylesheet" href="{{asset('css/styleadmin.css') }}">
@section('title', 'Dashboard')

@section('container')
<div class="col-md-10 pt-5 p-5">
        <h3><i class="fas fa-tachometer-alt me-2"></i>DASHBOARD</h3><hr>
        <div class="row">
          <div class="d-flex flex-row p-2 bd-highlight text-start">
            <div class="card kotak1" style="width: 15rem;">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-comments"></i>
                </div>
                <h5 class="card-title">KONSULTASI</h5>
                <div class="display-4">30</div>
                <a href=""><p class="card-text text-white">Lihat Detail <i class="fas fa-arrow-alt-circle-right ms-2"></i></p></a>
              </div>
            </div>
            <div class="card kotak2" style="width: 15rem;">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-users"></i>
                </div>
                <h5 class="card-title">USERS</h5>
                <div class="display-4">50</div>
                <a href="/user"><p class="card-text text-white">Lihat Detail <i class="fas fa-arrow-alt-circle-right ms-2"></i></p></a>
              </div>
            </div>
            <div class="card kotak3" style="width: 15rem;">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-user-md"></i>
                </div>
                <h5 class="card-title">DOCTORS</h5>
                <div class="display-4">10</div>
                <a href="/doctor"><p class="card-text text-white">Lihat Detail <i class="fas fa-arrow-alt-circle-right ms-2"></i></p></a>
              </div>
            </div>
            <div class="card d-flex kotak4" style="width: 15rem;">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-wallet"></i>
                </div>
                <h5 class="card-title">EARNINGS</h5>
                <div class="display-4">1000</div>
                <a href=""><p class="card-text text-white">Lihat Detail <i class="fas fa-arrow-alt-circle-right ms-2"></i></p></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection