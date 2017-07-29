@extends('layouts.backend')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Persekutuan Jumat ITS
          <small>Data Persekutuan Jumat</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Data Persekutuan Jumat</li>
      </ol>
    </section>

    <!-- Main content -->
      
    <br><br>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-body">
                        <h3>Data Persekutuan Jumat<a href="#" class="pull-right"> <i class="fa fa-plus"></i></a></h3>
                        <div class="table-responsive" style="overflow: auto">
                        <table id="pj" class="table table-bordered table-striped">
                        @php $count = 1 @endphp
                            <thead>
                              <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Kehadiran</th>
                                <th>Persembahan</th>
                                <th>Notes</th>
                                <th>Update</th>
                                <th>Detail</th>
                              </tr>
                            </thead>
                            @if($pj->count())
                            <tbody>
                              @foreach($pj as $d)
                              <tr>
                                <td>@php echo $count++ @endphp</td>
                                <td>{{$d->name}}</td>
                                <td>{{$d->date}}</td>
                                <td>{{$d->absence}}</td>
                                <td>{{$d->persembahan}}</td>
                                <td>{{$d->notes}}</td>
                                <td>
                                    <a class="btn btn-primary" type="submit" href="./pd?id={{$d->ID}}">Edit</a>
                                </td>
                                <td>
                                    <a class="btn btn-success" type="submit">View Detail</a>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                            @endif
                          </table>
                        {{$pj->render()}}
                        </div> 
                    </div>
                </div>
              </div>
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-body">
                        <h3>Data Absensi Persekutuan Jumat<a href="#" class="pull-right">
                        <div class="table-responsive" style="overflow: auto">
                        <table id="absenpj" class="table table-bordered table-striped">
                        @php $count = 1 @endphp
                            <thead>
                              <tr>
                                <th>No.</th>
                                <th>NRP</th>
                                <th>Name</th>
                                <th>Date</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>@php echo $count++ @endphp</td>
                                <td>{{'nrp'}}</td>
                                <td>{{'name'}}</td>
                                <td>{{'date'}}</td>
                              </tr>
                            </tbody>
                          </table>
                        </div> 
                    </div>
                </div>
              </div>
          </div>
        </section>
    <!-- /.Main content -->
    
  </div>
  @stop

<!-- jQuery 2.2.3 -->
<script src="public/Admin-LTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="public/Admin-LTE/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="public/Admin-LTE/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="public/Admin-LTE/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="public/Admin-LTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="public/Admin-LTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="public/Admin-LTE/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="public/Admin-LTE/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="public/Admin-LTE/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="public/Admin-LTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="public/Admin-LTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="public/Admin-LTE/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="public/Admin-LTE/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="public/Admin-LTE/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="public/Admin-LTE/dist/js/demo.js"></script>
<script>
$(function() {
    $('#pj').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true
    });
  });
</script>
