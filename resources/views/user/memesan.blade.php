@extends('user.user-sidebar')

@section('content')
      <div class="content-wrapper">
      	<section class="content-header">
          <h1>
            Pemesanan
            <small>Lakukan pemesanan</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>
        <style>
			.tengah {
		     	position: relative;
				top: 0%;
				left: 12%;
				width: 150%;
				height: 50%;
				font-size: 16px;}
		</style>
        <div class="tengah">
        <section class="content">
          <div class="row">
          <div class="box-header">
              
                      <div class="box-body">
                        <h4>Lakukan Pemesanan</h4>
                      </div>
            <div class="col-xs-6">
              <div class="box">
       			 <div class="box box-danger col-md-6">
	                <div class="box-body">
	                  <!-- Date dd/mm/yyyy -->
	                  <div class="form-group">
	                    <label>Tentukan tanggal Pemesanan</label>
	                    <div class="input-group">
	                      <div class="input-group-addon">
	                        <i class="fa fa-calendar"></i>
	                      </div>
	                       <input type="text" id="DatePicker" class="form-control for_date" name="tanggal">
	                    </div><!-- /.input group -->
	                  </div><!-- /.form group -->

	                  <!-- phone mask -->
	                  <div class="form-group">
	                    <label>Fasilitas</label>
	                    <div class="input-group">
                      		<div class="input-group"> Gedung<br>
                      		
              <?php $i = 1; ?>
                <input type="number" id="sound" name="quantity1" value="" readonly style="float:right;">
              @foreach($data as $keys => $key)
              @if($i<=2)
                <input type="radio" name="fasilitasr[]" id="{{ $keys }}" value="gedung {{$i}}"  value="{{$key->id}}"> {{ $key->nama_fasilitas }}
              @else<br><br>
                <input type="checkbox" class="minimal" id="{{ $keys }}" name="fasilitas[]" value="{{ $key->id }}"> {{ $key->nama_fasilitas }} 
                          
                <input type="number" id="quantity{{ $keys }}" name="quantity[]" value="" readonly style="float:right;">
                          
              @endif
              
                      		<?php $i++; ?>
                          @endforeach

	                  </div><!-- /.form group -->

	                  <div class="box-footer">
	                  	<button type="submit" class="btn btn-warning">Pesan</button>
	                  </div>
                      </div>
                   </div><!-- /.box-body -->
            </div><!-- /.box -->
          </div>
          </div>
        </div>
        </div>
        </div>
        </section>
        

       <script src="{{ url('plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/jquery-2.2.4.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/weekpicker.js')}}"></script>
<script type="text/javascript" src="{{url('js/daterangepicker.js')}}"></script>
<script type="text/javascript" src="{{url('js/bootstrap-timepicker.min.js')}}"></script>
<script src="{{ url('../../bootstrap/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript">
        $("input[name='fasilitas[]']").change(function(){
          var id = '#quantity'+$(this).attr('id');
          if($(this).is(':checked')){
            $.ajax({
                'type': 'POST',
                'url': '/ajax/fasilitas',
                'data': { id : $(this).val(), _token : '{{ csrf_token() }}' },
                'success': function(data){
                  // console.log(data);
                    $(id).val(data);
                }
            });                                                                                                       
          } else {
             $(id).val("0");
          }
        });
        </script>
       <script type="text/javascript">
          $('#date2').DatePicker({
  flat: true,
  date: ['2008-07-31', '2008-07-28'],
  current: '2008-07-31',
  format: 'Y-m-d',
  calendars: 1,
  mode: 'multiple',
  onRender: function(date) {
    return {
      disabled: (date.valueOf() < now.valueOf()),
      className: date.valueOf() == now2.valueOf() ? 'datepickerSpecial' : false
    }
  },
  starts: 0
});
});

</script>
@endsection
