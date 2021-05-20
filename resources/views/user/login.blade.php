@extends('layout.home')
<link rel="stylesheet" href="{{asset('css/stylelogin.css') }}">
@section('title', 'Login')

@section('container')
<div class="containerkonten">
        <div class="container gambar">
          <img class="covid" src="../img/covid-19.png" alt="" width="50%">
        </div>
        <div class="container">
          <h1 class="text-center">Log in</h1>
          <form method="post" class="log mt-4">
              <div class="row justify-content-center">
                  <div class="col">
                      <label for="E-mail" class="form-label">E-mail</label>
                      <div class="input-icon">
                        <input type="email" id="E-mail" class="form-control form-control-sm" placeholder="E-mail">
                        <i class="fas fa-envelope"></i>
                      </div>

                  </div>
              </div>
              <div class="row justify-content-center">
                  <div class="col">
                      <label for="password" class="form-label">Password</label>
                      <div class="input-icon">
                        <input type="password" id="password" class="form-control form-control-sm" placeholder='Password' name="password">
                        <i class="fas fa-key"></i>
                      </div>
                      
                  </div>
              </div>
              <div class="row mt-2">
                <div class="col">
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="remember">
                      <label class="form-check-label" for="remember">
                        Remember me
                      </label>
                  </div>  
                </div>
                <div class="col">
                  <p class="text-end lupa">Forgot Password?</p>
                </div>  
              </div>  
              <div class="d-grid gap-2 mx-auto">
                  <button class="btn mt-1 tombollog" type="submit"><i class="fas fa-sign-in-alt me-2"></i>Log in</button>
              </div>
          </form>
          <div class="row justify-content-center">
              <div class="col">
                  <h5 class="klarifikasi log">Don't have an account? <a href="registeruser.html">Sign Up</a></h5>
              </div>
          </div>
        </div>
        
    </div>
    @endsection