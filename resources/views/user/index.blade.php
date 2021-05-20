@extends('layout.home')
<link rel="stylesheet" href="{{asset('css/stylehome.css') }}">
@section('title', 'Home')

@section('container')
<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
      <div class="container quote" >
        <div class="row">
          	<div class="col-md-6">
            	<h1>Professional Health Care</h1>
              <h5>Konsultasi dokter 100% terpercaya</h5>
                  <!-- <div class="kotak">
                    <a href="html/login.html" class="layanan justify-content-center"><i class="fas fa-comments fa-2x float" style="color: #DF014C;" ></i> <br> Konsultasi dengan Dokter</a>
                  </div> -->
                  <div class="card fitur text-center" style="width: 10rem;">
                    <div class="card-body">
                      <div class="card-body-icon">
                        <i class="fas fa-comments fa-2x" style="color: #DF014C;"></i>
                      </div>
                      <a href="/payment"><p class="card-text text-dark">Konsultasi dengan Dokter</p></a>
                    </div>
                  </div>
        	</div>
        </div>
        
        <div class="row mt-2">
          <div class="col">
            <a href="/admin" class="btn layanan">Admin</a>

          </div>
        </div>
        
      </div>
      
    </div>
    
    <!-- Akhir Jumbotron -->
    <!-- Artikel -->
    <div class="container artikel">
      <div class="row mb-3">
        <div class="col">
          <h4>Baca 99+ Artikel</h4>
        </div>
        <div class="col text-end">
          <a href="/spotlight" class="btn btn-outline-danger semua">Lihat Semua</a>
        </div>
      </div>
      <div class="d-flex p-2 bd-highlight arti">
        <div class="card p-2" style="width: 18rem;">
          <img src="{{asset('img/virus.png')}}" class="card-img-top mx-auto" alt="..." style="width: 30%;">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      
      
        <div class="card p-2" style="width: 18rem;">
          <img src="{{asset('img/covid-19.png')}}" class="card-img-top mx-auto" alt="..." style="width: 30%;">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
    
    
        <div class="card p-2" style="width: 18rem;">
          <img src="{{asset('img/man.png')}}" class="card-img-top mx-auto img-fluid" alt="..." style="width: 30%;">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
          
       
      </div>
    </div>

    


    <script>
      function notif(){
        alert('artikel belum tersedia');

      }
    </script>
@endsection