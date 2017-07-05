<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PMK ITS | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="public/Admin-LTE/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/Admin-LTE/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="public/Admin-LTE/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="public/Admin-LTE/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="public/Admin-LTE/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="public/Admin-LTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="public/Admin-LTE/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="public/Admin-LTE/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="public/Admin-LTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="dashboard" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>PMK</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>PMK</b>ITS</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a>
              <img src="public/Admin-LTE/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">{{Auth::user()->email}}</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="public/Admin-LTE/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
                        <!-- /.search form -->
                        <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">DASHBOARD</li>
        <li class="treeview">
          <a href="{{url('/dashboard')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
          
        <li class="header">DATA PMK ITS</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-database"></i> <span>Data Anggota PMK</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">
            <li><a href="{{route('mahasiswa.index')}}"><i class="fa fa-circle-o"></i> Mahasiswa</a></li>
            <li><a href="{{route('doskar.index')}}"><i class="fa fa-circle-o"></i> Dosen & Karyawan</a></li>
            <li><a href="{{route('alumni.index')}}"><i class="fa fa-circle-o"></i> Alumni</a></li>
          </ul>
        </li>

        <li class="header">KEPENGURUSAN PMK ITS</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-database"></i> <span>Data Pengurus PMK</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">
            <li><a href="{{route('pengurus')}}"><i class="fa fa-circle-o"></i> Index</a></li>
            <li><a href="{{route('ksb')}}"><i class="fa fa-circle-o"></i> KSB</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Media Informasi</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Doa, Pemerhati, Konseling</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Pemuridan</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Persekutuan</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> PKMBK</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Natal-Paskah</a></li>
          </ul>
        </li>
        
        <li>
          <a href="{{route('event.index')}}">
            <i class="fa fa-calendar"></i> <span>Event</span>
<!--
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
-->
          </a>
        </li>

        <li class="header">PERSEKUTUAN</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Persekutuan Jumat</span>
          </a>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Persekutuan Doa Jurusan</span>
          </a>
        </li>
          
        <li class="header">DLL</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Renungan</span>
          </a>
        </li>
          
        <li class="treeview">
          <a href="#">
            <i class="fa fa-commenting-o"></i> <span>Testimoni</span>
          </a>
        </li>
          
        <li class="header">LOGOUT</li>
        <li class="treeview">
          <a href="{{route('logout')}}">
            <i class="fa fa-power-off"></i> <span>Logout</span>
          </a>
        </li>
          
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
    <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>PMK ITS 2017-2018</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->


</body>
</html>
