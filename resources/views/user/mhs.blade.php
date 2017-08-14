@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @if (session('alert'))
            <div class="alert alert-success">
                {{ session('alert') }}
            </div>
        @endif
        <div class="col-md-12 panel">
            <h3>Change Password</h3>
            <form class="form col-lg-12" action="{{route('change_password')}}" method="POST">
            {{csrf_field()}}
                <div class="col-lg-12" style="margin-bottom:10px">                
                <input class="col-lg-2" name="nrp" value="{{$mhs->nrp}}" type="hidden"/>
                <label class="col-lg-2">New Password :</label>
                <input class="col-lg-2" name="password" id="password" type="password"/>
                <br>
                </div>
<!--
                <div class="col-lg-12" style="margin-bottom:10px">
                <label class="col-lg-2">confirm password: </label>
                <input class="col-lg-2" type="password" name="confirm_password" id="confirm_password"  onkeyup='check();' /> 
                <span class="col-lg-2" id='message'></span>
                <input type="text" name="nrp" style="visibility:hidden" value="{{$mhs->nrp}}">
                </div>
-->
                <div class="col-lg-12" style="margin-bottom:10px">
                    <button class="col-lg-2" type="submit">Change Password</button>
                </div>
            </form>
        </div>
        
        <div class="col-md-12 panel">
            <div class="box box-primary">
                <div class="box-body">
                    <h3>Data Mahasiswa</h3>
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
<!--                            <th>Update</th>-->
                          </tr>
                        </thead>
                        @if($mhs->count())
                        <tbody>
                          @php $m=$mhs; @endphp
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
<!--
                            <td>
                                <a class="btn btn-primary" type="submit" href="./home?edit={{$m->id}}">Edit</a>
                            </td>
-->
                        </tr>
                        </tbody>
                    @endif
                    </table>
                    </div> 
                </div>
            </div>
        </div>
        
        <div class="col-md-12 panel">
            <div class="box box-primary">
                <form role="form" action="{{route('mhs.update', $mhs->id)}}" method="post">
                    <input name="_method" type="hidden" value="PATCH">
                    {{csrf_field()}}
                    <div class="box-body">
                        <h4> Update Data Mahasiswa </h4>
                        <div class="col-lg-12">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>NRP:</label>
                                    <input type="text" class="form-control" id="nrp" name="nrp" value="{{$mhs->nrp}}" required>
                                </div>
                                <div class="form-group">
                                    <label>Nama:</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{$mhs->name}}" required>
                                </div>
                                <div class="form-group">
                                    <label>Email:</label>
                                    <input type="text" class="form-control" id="email" name="email" value="{{$mhs->email}}" required>
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin: (L/P)</label>
                                    <select class="form-control" name="jk">
                                        <option value="L" @if($mhs->jk=='L') selected @endif>Laki-laki</option>
                                        <option value="P" @if($mhs->jk=='P') selected @endif>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Asal:</label>
                                    <input type="text" class="form-control" id="asal" name="asal" value="{{$mhs->asal}}" required>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir:</label>
                                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{$mhs->tgl_lahir}}" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Alamat di Surabaya:</label>
                                    <input type="text" class="form-control" id="alamat_sby" name="alamat_sby" value="{{$mhs->alamat_sby}}" required>
                                </div>
                                <div class="form-group">
                                    <label>Alamat Asal:</label>
                                    <input type="text" class="form-control" id="alamat_asal" name="alamat_asal" value="{{$mhs->alamat_asal}}" required>
                                </div>
                                <div class="form-group">
                                    <label>Gereja di Surabaya:</label>
                                    <input type="text" class="form-control" id="gereja" name="gereja" value="{{$mhs->gereja}}">
                                </div>
                                <div class="form-group">
                                    <label>NO. HP:</label>
                                    <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{$mhs->no_hp}}" required>
                                </div>
                                <div class="form-group">
                                    <label>ID Line:</label>
                                    <input type="text" class="form-control" id="line_id" name="line_id" value="{{$mhs->line_id}}" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer pull-right">
                        <button type="reset" class="btn btn-default">Reset</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
        
        <!-- /.Main content -->
    </div>
</div>
@endsection
