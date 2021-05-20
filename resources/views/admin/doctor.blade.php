@extends('layout.admin')
<link rel="stylesheet" href="{{asset('css/styleadmin.css') }}">
@section('title', 'Doctor')

@section('container')
<div class="col-md-10 pt-5 p-5">
        <h3><i class="fas fa-user-md me-2"></i>DAFTAR DOCTORS</h3><hr>
        <a href="" class="btn btn-primary mb-2" data-toggle="modal" data-target="#dokter"><i class="fas fa-plus-circle me-2"></i>Tambah Dokter</a>
        <div class="modal fade" id="dokter" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Form Tambah Dokter</h5>
              </div>
              <div class="modal-body">
                <form method="post" class="log">
                  <div class="row justify-content-center">
                      <div class="col">
                          <label for="namalengkap" class="form-label">Nama Lengkap</label>
                          <input type="text" id="namalengkap" class="form-control form-control-sm" placeholder="Nama Lengkap">
                      </div>
                      <div class="col">
                          <label for="TanggalLahir" class="form-label">Tanggal Lahir</label>
                          <input type="date" id="TanggalLahir" class="form-control form-control-sm" placeholder="DD/MM/YY" name="TanggalLahir">
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
                          <label for="Alamat" class="form-label">Alamat</label>
                          <input type="text" id="Alamat" class="form-control form-control-sm" placeholder="Alamat">
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
                          <label for="password" class="form-label">Password</label>
                          <input type="password" id="password" class="form-control form-control-sm" placeholder="Password" name="password">
                      </div>
                      <div class="col">
                          <label for="confirmpassword" class="form-label">Konfirmasi Password</label>
                          <input type="confirmpassword" id="confirmpassword" class="form-control form-control-sm" placeholder="Ketik Ulang Password" name="confirmpassword">
                      </div>
                  </div>
              </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="close btn btn-danger" data-dismiss="modal" aria-label="Close"> Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>

          </div>
        </div>
        <table class="table table-striped table-bordered text-center">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Doctor</th>
              <th scope="col">Email</th>
              <th scope="col">Alamat</th>
              <th scope="col">Gender</th>
              <th colspan="3" scope="col" >Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>L</td>
              <td><a href="" class="btn btn-info">Detail</a></td>
              <td><i class="fas fa-edit bg-success p-2 text-white rounded"></i></td>
              <td><i class="fas fa-trash-alt bg-danger p-2 text-white rounded"></i></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>L</td>
              <td><a href="" class="btn btn-info">Detail</a></td>
              <td><i class="fas fa-edit bg-success p-2 text-white rounded"></i></td>
              <td><i class="fas fa-trash-alt bg-danger p-2 text-white rounded"></i></td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>L</td>
              <td><a href="" class="btn btn-info">Detail</a></td>
              <td><i class="fas fa-edit bg-success p-2 text-white rounded"></i></td>
              <td><i class="fas fa-trash-alt bg-danger p-2 text-white rounded"></i></td>
            </tr>
            
          </tbody>
        </table>
      </div>
    </div>
@endsection