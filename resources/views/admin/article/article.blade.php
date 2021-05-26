@extends('layout.admin')
<link rel="stylesheet" href="{{asset('css/styleadmin.css') }}">
@section('title', 'Article')

@section('container')
<div class="col-md-10 pt-5 p-5">
        <h3><i class="fas fa-newspaper me-2"></i>DAFTAR ARTIKEL</h3><hr>
        <a href="" class="btn btn-primary mb-2" data-toggle="modal" data-target="#artikel"><i class="fas fa-plus-circle me-2"></i>Tambah Artikel</a>
        <div class="modal fade" id="artikel" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Form Tambah Artikel</h5>
              </div>
              <div class="modal-body">
                <form method="post" class="log">
                  <div class="row justify-content-center">
                      <div class="col">
                          <label for="penulis" class="form-label">Penulis</label>
                          <input type="text" id="penulis" class="form-control form-control-sm" placeholder="Penulis">
                      </div>
                    
                  </div>

                  <div class="row justify-content-center">
                      <div class="col">
                          <label for="judul" class="form-label">Judul Artikel</label>
                          <input type="text" id="judul" class="form-control form-control-sm" placeholder="Judul Artikel">
                      </div>
                  </div>
                  <div class="row justify-content-center">
                    <div class="col">
                        <label for="link" class="form-label">Link</label>
                        <input type="text" id="link" class="form-control form-control-sm" placeholder="Link">
                    </div>
                </div>
                <div class="row justify-content-center">
                  <div class="col">
                      <label for="tag" class="form-label">Tag Artikel</label>
                      <input type="text" id="tag" class="form-control form-control-sm" placeholder="Tag">
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
              <th scope="col">Penulis</th>
              <th scope="col">Judul Artikel</th>
              <th scope="col">Link</th>
              <th scope="col">Tag</th>
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