@extends('user.user-sidebar')
<script src="{{ url('plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
<script src="{{ url('../../bootstrap/js/bootstrap.min.js')}}"></script>
@section('content')

      <div class="content-wrapper">
       <section class="content-header">
          <h1>
            Akun
            <small>Pengaturan Akun</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        
        <style>
      .tengah {
          position: absolute;
        top: 17%;
        left: 34%;
        width: 100%;
        height: 50%;
        font-size: 16px;}
    </style>
            <div class="tengah">
            <div class="col-md-6">
            <h4>Edit Data Akun</h4>
             <div class="box box-danger col-md-6">
              <form action="{{url(action('UserController@editUser'))}}" method="post">
              <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                <div style="overflow:auto;width:auto;height:525px;" >
                  <div class="box-body">
                    <!-- Date dd/mm/yyyy -->
                    <div class="form-group">
                      <label>Nama:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class=" fa fa-user"></i>
                        </div>
                        <input type="text" class="form-control" name="nama" value="{{ Auth::user()->nama }}">
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->
                    
                    <div class="form-group">
                      <label>Tempat Lahir:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class=" fa fa-map"></i>
                        </div>
                        <input type="text" class="form-control" name="tempat_lahir" value="{{ Auth::user()->tempat_lahir }}">
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <div class="form-group">
                      <label>Tanggal Lahir:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class=" fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control" name="tanggal_lahir" value="{{ Auth::user()->tanggal_lahir }}">
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <div class="form-group">
                      <label>Jenis Kelamin:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class=" fa fa-genderless"></i>
                        </div>
                        <input type="text" class="form-control" name="jenis_kelamin" value="{{ Auth::user()->jenis_kelamin }}">
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <div class="form-group">
                      <label>Alamat:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class=" fa fa-home"></i>
                        </div>
                        <input type="text" class="form-control" name="alamat" value="{{ Auth::user()->alamat }}">
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <div class="form-group">
                      <label>Email:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class=" fa fa-user"></i>
                        </div>
                        <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}">
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <div class="form-group">
                      <label>Password:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class=" fa fa-key"></i>
                        </div>
                        <input type="password" class="form-control" name="password" value="{{ Auth::user()->password }}">
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <!-- phone mask -->
                    <div class="form-group">
                      <label>No Telp</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" class="form-control" name="no_telp" value="{{ Auth::user()->no_telp }}">
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <div class="box-footer">
                      <button type="submit" class="btn btn-warning">Simpan Perubahan</button>
                    </div>
                </form>
              </div>
                </div><!-- /.box-body -->
              </div>
              </div>
      
    </div><!-- ./wrapper -->
    </div>
@endsection