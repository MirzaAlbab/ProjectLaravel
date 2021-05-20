@extends('layout.home')
<link rel="stylesheet" href="{{asset('css/stylespot.css') }}">
@section('title', 'Spotlight')

@section('container')
<div class="container artikel">
      <div class="row">
        <div class="col-md-9">
          <h3>Artikel Terpopuler</h3>
          
        </div>
        <div class="col-md-3">
          <a class="sub text-right" href="/story"><button type="button" class="btn btn-outline-danger  tombolsub ">Submit your story</button></a>
        </div>
      </div>
        
        <div class="card bg-dark text-white main">
            <img src="../img/plcimage2.png" class="card-img" alt="...">
            <div class="card-img-overlay">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text">Last updated 3 mins ago</p>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <h3>Artikel Terbaru</h3>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                <img src="../img/plcimage1.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="../img/plcimage4.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="../img/plcimage5.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
        </div>   
    </div>
</div>

@endsection