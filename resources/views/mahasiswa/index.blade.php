@extends('layouts.backend')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Mahasiswa
        <small>Data Mahasiswa</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">List Mahasiswa</li>
      </ol>
    </section>

      
    <!-- Main content -->
    <br><br>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-body">
                        <h3>Data Mahasiswa <a href="{{route('mahasiswa.create')}}" class="pull-right"> <i class="fa fa-plus"></i></a></h3>
                        <div class="table-responsive" style="overflow: auto">
                        <table id="alumni" class="table table-bordered table-striped">
                        @php $count = 1 @endphp
                            <thead>
                              <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>NRP</th>
                                <th>Email</th>
                                <th>JK</th>
                                <th>Asal</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat Surabaya</th>
                                <th>Alamat Asal</th>
                                <th>Gereja</th>
                                <th>No. HP</th>
                                <th>Line ID</th>
                                <th>Talenta</th>
                                <th>Kehadiran PJ</th>
                                <th>Kehadiran PD</th>
                                <th>Kehadiran Rapat</th>
                                <th>Update</th>
                                <th>Delete</th>
                              </tr>
                            </thead>
                            @if($mhs->count())
                            <tbody>
                              @foreach($mhs as $m)
                              <tr>
                                <td>@php echo $count++ @endphp</td>
                                <td>{{$m->name}}</td>
                                <td>{{$m->nrp}}</td>
                                <td>{{$m->email}}</td>
                                <td>{{$m->jk}}</td>
                                <td>{{$m->asal}}</td>
                                <td>{{$m->tgl_lahir}}</td>
                                <td>{{$m->alamat_sby}}</td>
                                <td>{{$m->alamat_asal}}</td>
                                <td>{{$m->gereja}}</td>
                                <td>{{$m->no_hp}}</td>
                                <td>{{$m->line_id}}</td>
                                <td>{{$m->talenta}}</td>
                                <td>{{$m->kehadiran_pj}}</td>
                                <td>{{$m->kehadiran_pd}}</td>
                                <td>{{$m->kehadiran_rapat}}</td>
                                <td>
<<<<<<< HEAD
                                    <a class="btn btn-primary" type="submit" href="./mahasiswa/{{$m->id    }}/edit">Edit</a>
                                </td>
                                <td>
                                    {!! Form::open(array('route' => array('mahasiswa.destroy', $m->id),
                                                         'method' => 'delete',
                                                         'style' => 'display:inline')) !!}
                                    {!! Form::submit('Delete', array('onclick'=>"return confirm('Anda yakin akan menghapus data ?');", 'class' => 'btn btn-danger')) !!}
                                    {!! Form::close() !!}
=======
                                    <a class="btn btn-primary" type="submit" href="./mahasiswa?id={{$m->nrp}}">Edit</a>
                                </td>
                                <td>
                                    {{ Form::open(array('url' => 'mahasiswa/' . $m->nrp)) }}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {{ Form::submit('Delete', array('onclick'=>"return confirm('Anda yakin akan menghapus data ?');", 'class' => 'btn btn-danger')) }}
                                    {{ Form::close() }}
>>>>>>> 5b8cdb21d99003b558279ce09755add954b3d625
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                            @endif
                          </table>
                          {{$mhs->render()}}
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