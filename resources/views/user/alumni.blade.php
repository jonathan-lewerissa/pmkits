@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
<!--
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
-->
        
        <div class="col-md-12 panel">
            <div class="box box-primary">
                <div class="box-body">
                    <h3>Data Alumni</h3>
                    <div class="table-responsive" style="overflow: auto">
                    <table id="alumni" class="table table-bordered table-striped">
                    @php $count = 1 @endphp
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>JK</th>
                            <th>Asal</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Gereja</th>
                            <th>No. HP</th>
                            <th>Pekerjaan</th>
                            <th>Tempat Kerja</th>
                            <th>Asal Fakultas</th>
                            <th>Asal Departemen</th>
                            <th>Angkatan</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($alumni as $a)
                          <tr>
                            <td>@php echo $count++ @endphp</td>
                            <td>{{$a->name}}</td>
                            <td>{{$a->email}}</td>
                            <td>{{$a->jk}}</td>
                            <td>{{$a->asal}}</td>
                            <td>{{$a->tgl_lahir}}</td>
                            <td>{{$a->alamat}}</td>
                            <td>{{$a->gereja}}</td>
                            <td>{{$a->no_hp}}</td>
                            <td>{{$a->pekerjaan}}</td>
                            <td>{{$a->tempat_kerja}}</td>
                            <td>{{$a->asal_fakultas}}</td>
                            <td>{{$a->asal_departemen}}</td>
                            <td>{{$a->angkatan}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                    {{$alumni->render()}}
                    </div> 
                </div>
            </div>
        </div>

        <!-- /.Main content -->
    </div>
</div>
@endsection
