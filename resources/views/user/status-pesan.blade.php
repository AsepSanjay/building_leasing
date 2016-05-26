@extends('user.user-sidebar')
<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script src="../../bootstrap/js/bootstrap.min.js"></script>
@section('content')

      <div class="content-wrapper">
       <section class="content-header">
          <h1>
            Pemesanan
            <small>Status Pemesanan</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="/user"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
              	<div class="box-header">
                  <h3 class="box-title">Data Pemesanan</h3>
                      </div><!-- /.box-header -->
                      <div class="box-body">
                        <table id="data-member" class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Nama</th>
                              <th>Alamat</th>
                              <th>No Telp</th>
                              <th>Tgl Daftar</th>
                              <th>Email</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>            
                          </tbody>
                          <!-- <tfoot>
                            <tr>
                              <th>Rendering engine</th>
                              <th>Browser</th>
                              <th>Platform(s)</th>
                              <th>Engine version</th>
                              <th>CSS grade</th>
                            </tr>
                          </tfoot> -->
                        </table>
                      </div>
                   </div><!-- /.box-body -->
            </div><!-- /.box -->
          </div>
          @include('user.footer')
        </section>
        <script>
      $(function () {
        $("#data-member").DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
       
@endsection
