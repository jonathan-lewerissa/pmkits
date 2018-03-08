@extends('layouts.backend')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Data Mahasiswa
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="/admin/mahasiswa"><i class="fa fa-dashboard"></i> List Mahasiswa</a></li>
        <li class="active">Edit Data Mahasiswa</li>
      </ol>
      <br>
      <br>
    </section>

    <!-- Main content -->
    <br><br>
    <div class="container">
        <div class="row col-lg-12">
            <div class="box box-primary">
                <div class="box-body">
                {!! Form::model($mhs,['method'=>'PATCH','action'=>['MahasiswaController@update',$mhs->id]]) !!}
                    {{csrf_field()}}
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="message-text" class="form-control-label col-lg-4">Name</label>
                                <input name="name" type="text" class="form-control col-lg-8" value="{{$mhs->name}}" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="message-text" class="form-control-label col-sm-4">NRP</label>
                                <input name="nrp" type="text" class="form-control col-sm-8" value="{{$mhs->nrp}}" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="message-text" class="form-control-label col-sm-4">Username(Email)</label>
                                <input name="username" type="email" class="form-control col-sm-8"  value="{{$mhs->username}}" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="message-text" class="form-control-label col-sm-4">JK</label>
                                <input name="jk" type="text" class="form-control col-sm-8"  value="{{$mhs->jk}}" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="message-text" class="form-control-label col-sm-4">PKK</label>
                                <input name="pkk" type="text" class="form-control col-sm-8"  value="{{$mhs->pkk}}" required>
                            </div>

                            <div class="form-group">
                                <label for="message-text" class="form-control-label col-sm-4">Asal</label>
                                <input name="asal" type="text" class="form-control col-sm-8"  value="{{$mhs->asal}}" required>
                            </div>
                            
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="message-text" class="form-control-label col-sm-4">Tanggal Lahir</label>
                                <input name="tgl_lahir" class="form-control col-sm-8"  type="date" value="{{$mhs->tgl_lahir}}" required>
                            </div>

                            <div class="form-group">
                                <label for="message-text" class="form-control-label col-sm-4">Alamat Surabaya</label>
                                <input name="alamat_sby" type="text" class="form-control col-sm-8"  value="{{$mhs->alamat_sby}}" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="message-text" class="form-control-label col-sm-4">Alamat Asal</label>
                                <input name="alamat_asal" type="text" class="form-control col-sm-8"  value="{{$mhs->alamat_asal}}" required>
                            </div>

                            <div class="form-group">
                                <label for="message-text" class="form-control-label col-sm-4">Gereja</label>
                                <input name="gereja" type="text" class="form-control col-sm-8"  value="{{$mhs->gereja}}" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="message-text" class="form-control-label col-sm-4">No. HP</label>
                                <input name="no_hp" type="number" class="form-control col-sm-8"  value="{{$mhs->no_hp}}" required>
                            </div>

                            <div class="form-group">
                                <label for="message-text" class="form-control-label col-sm-4">Line ID</label>
                                <input name="line_id" type="text" class="form-control col-sm-8"  value="{{$mhs->line_id}}" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="message-text" class="form-control-label col-sm-4">Talenta</label>
                                <input name="talenta" type="text" class="form-control col-sm-8"  value="{{$mhs->talenta}}">
                            </div>
                        </div>
                    </div>
                    <div class="box-footer" align="right">
                        {!! Form::button('<i class="fa fa-plus-square"></i>'.' Simpan', array('type' => 'submit', 'class' => 'btn btn-primary'))!!}
                    </div>
                {!! Form::close() !!}
            </div>
    <!-- /.Main content -->
        </div>
      </div>
  </div>
 @stop
        
<!-- jQuery 2.2.3 -->
<script src="{{URL::asset('public/Admin-LTE/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="{{URL::asset('public/Admin-LTE/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- DataTables -->
<script src="{{URL::asset('public/Admin-LTE/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('public/Admin-LTE/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{URL::asset('public/Admin-LTE/plugins/morris/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{URL::asset('public/Admin-LTE/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{URL::asset('public/Admin-LTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{URL::asset('public/Admin-LTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{URL::asset('public/Admin-LTE/plugins/knob/jquery.knob.js')}}"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{URL::asset('public/Admin-LTE/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{URL::asset('public/Admin-LTE/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{URL::asset('public/Admin-LTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{URL::asset('public/Admin-LTE/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{URL::asset('public/Admin-LTE/plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{URL::asset('public/Admin-LTE/dist/js/app.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{URL::asset('public/Admin-LTE/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{URL::asset('public/Admin-LTE/dist/js/demo.js')}}"></script>