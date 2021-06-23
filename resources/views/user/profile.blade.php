@extends('layout.home')
<link rel="stylesheet" href="{{asset('css/styleprofile.css') }}">
@section('title', 'Profile')

@section('container')
<div class="container">
    <div class="main-body">
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{ $user->nama }}</h4>
                      <p class="text-secondary mb-1">Users</p>
                      <p class="text-muted font-size-sm">{{ $user->alamat }}</p>
                      <form action="" method="post" enctype="multipart/form-data" id="formavatar">
                      @csrf
                      <div class="file btn btn-primary" id="button">
                      Upload Photo
                      <input type="file" name="avatar" id="avatar" hidden>
                      <input type="submit" name="" id="submit" hidden>
                      
                      </div>
                      
                      </form>
                      
                    </div>
                  </div>
                </div>
              </div>
              
              
            </div>
            
            
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ $user->nama }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ $user->email }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ $user->telp }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date Of Birth</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ $user->tanggal_lahir }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ $user->alamat }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
                    </div>
                  </div>
                </div>
              </div>
              </div>
            

              

        </div>
    </div>
    
@endsection
@section('js')
<script>
document.getElementById('button').addEventListener('click', openDialog);
function openDialog() {
			document.getElementById('avatar').click();
		
		}
    document.getElementById('avatar').addEventListener('change', submit);
  
		function submit(){
			document.getElementById('submit').click();
		}
$(document).ready(function(){
  $('#avatar').change(function(){
    alert('ingin ganti');
    $('#formavatar').submit()
  });
  $('#formavatar').submit(function(e){
    $.ajaxSetup({
      headers:{
        'X-CSRF_TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    e.preventDefault();
    var formData = new formData(this);
    $.ajax({
      type: 'post',
      data: formData,
      cache: false,
      url: '/profile',
      contentType: false,
      dataType: 'json',
      processData: false,
      success: data =>{
        this.reset();
      },
      error:function(data){
        console.log(data);
      }
    }) 
  });
});
</script>


@endsection