@extends('admin.admin-sidebar')
<script src="{{ url('plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
<script src="{{ url('../../bootstrap/js/bootstrap.min.js')}}"></script>
@section('content')
      <div class="content-wrapper">
       <section class="content-header">
          <h1>
            Member
            <small>Data Member</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Admin Dashboard</li>
          </ol>
        </section>

        
        <style>
			.tengah {
		     	position: absolute;
				top: 20%;
				left: 34%;
				width: 100%;
				height: 50%;
				font-size: 16px;}
		</style>
            <div class="tengah">
            <div class="col-md-6">
            <h4>Tambah / Edit Fasilitas</h4>
       			 <div class="box box-danger col-md-6">
	                <div class="box-body">
	                  <!-- Date dd/mm/yyyy -->
	                  <div class="form-group">
	                    <label>Date masks:</label>
	                    <div class="input-group">
	                      <div class="input-group-addon">
	                        <i class="fa fa-calendar"></i>
	                      </div>
	                      <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
	                    </div><!-- /.input group -->
	                  </div><!-- /.form group -->

	                  <!-- Date mm/dd/yyyy -->
	                  <div class="form-group">
	                    <div class="input-group">
	                      <div class="input-group-addon">
	                        <i class="fa fa-calendar"></i>
	                      </div>
	                      <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
	                    </div><!-- /.input group -->
	                  </div><!-- /.form group -->

	                  <!-- phone mask -->
	                  <div class="form-group">
	                    <label>US phone mask:</label>
	                    <div class="input-group">
	                      <div class="input-group-addon">
	                        <i class="fa fa-phone"></i>
	                      </div>
	                      <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
	                    </div><!-- /.input group -->
	                  </div><!-- /.form group -->

	                  <!-- phone mask -->
	                  <div class="form-group">
	                    <label>Intl US phone mask:</label>
	                    <div class="input-group">
	                      <div class="input-group-addon">
	                        <i class="fa fa-phone"></i>
	                      </div>
	                      <input type="text" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
	                    </div><!-- /.input group -->
	                  </div><!-- /.form group -->

	                  <!-- IP mask -->
	                  <div class="form-group">
	                    <label>IP mask:</label>
	                    <div class="input-group">
	                      <div class="input-group-addon">
	                        <i class="fa fa-laptop"></i>
	                      </div>
	                      <input type="text" class="form-control" data-inputmask="'alias': 'ip'" data-mask>
	                    </div><!-- /.input group -->
	                  </div><!-- /.form group -->
	                  <div class="box-footer">
	                  	<button type="submit" class="btn btn-primary">Submit</button>
	                  </div>
                </form>
              </div>
                </div><!-- /.box-body -->
              </div>
   		
    </div><!-- ./wrapper -->
    </div>
@endsection