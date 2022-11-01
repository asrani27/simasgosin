<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIMASGOSIN</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/assets/dist/css/AdminLTE.min.css">
  <link href="/assets/cocon.otf" rel="stylesheet">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/assets/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- IziToast -->
  <link rel="stylesheet" href="/notif/dist/css/iziToast.min.css">
  <script src="/notif/dist/js/iziToast.min.js" type="text/javascript"></script>

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <header class="main-header" style="background-image: linear-gradient(15deg, #13547a 0%, #80d0c7 100%);">
    <nav class="navbar navbar-static-top"  style="box-shadow: 0 8px 8px 0 rgba(0,0,0,.2); min-height:55px;">
      <div class="container">
        <div class="navbar-header">
          <a href="#" class="navbar-brand"><b>SIMASGOSIN <img src="/logo/masgosin.png" width="4%"> </b></a>
          
          {{-- <a href="#" class="navba-brand" style="color: white"><img src="/logo/pemko.png" width="6%">Aplikasi Perizinan Dan Pengawasan Bangunan</a> --}}
          {{-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button> --}}
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            {{-- <li class="active"><a href="#">Dinas Pekerjaan Umum dan Penataan Ruang</a></li> --}}
          </ul>
          
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Notifications Menu -->
            <li class="dropdown notifications-menu">
              <!-- Menu toggle button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <b></b>
              </a>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper"  style="background-image: url('/logo/bg4.png'); background-size:cover">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        {{-- <h1>
          Top Navigation
          <small>Example 2.0</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Layout</a></li>
          <li class="active">Top Navigation</li>
        </ol> --}}
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-12 text-center"> <br/>
            <img src="/logo/SIMASGOSIN.png" width="50%"> &nbsp;&nbsp;&nbsp;<img src="/logo/masgosin.png" width="4%" height="5%"><br/>
            <h3>Sistem Informasi Masyarakat Geospasial Banjarmasin</h3>
          </div>
          
        </div>
        <br/>
        <br/>
        <div class="row">
          <div class="col-lg-3 col-xs-6 text-center">
            <a href="http://simtaru.banjarmasinkota.go.id" target="_blank"><img src="/logo/simtaru.png" width="40%"></a><br/>
            <strong>SIMTARU</strong>
          </div>
          <div class="col-lg-3 col-xs-6 text-center">
            <a href="https://atcs.banjarmasinkota.go.id" target="_blank"><img src="/logo/atcs.png" width="40%"></a><br/>
            <strong>ATCS</strong>
          </div>
          <div class="col-lg-3 col-xs-6 text-center">
            <a href="https://bakawan.banjarmasinkota.go.id" target="_blank"><img src="/logo/bakawan.png" width="40%"></a><br/>
            <strong>BAKAWAN</strong>
          </div>
          <div class="col-lg-3 col-xs-6 text-center">
            <a href="https://e-damkar.banjarmasinkota.go.id" target="_blank"><img src="/logo/edamkar.png" width="40%"></a><br/>
            <strong>E-DAMKAR</strong>
          </div>
        </div>
        <br/>
          <div class="row">
          <div class="col-lg-3 col-xs-6 text-center">
            <a href="https://poskobencana.banjarmasinkota.go.id" target="_blank"><img src="/logo/pb.png" width="40%"></a><br/>
            <strong>POSKO BENCANA</strong>
          </div>
          <div class="col-lg-3 col-xs-6 text-center">
            <a href="https://baiman.pambandarmasih.com:8735/apipdam/public/webgis/rekanan/login" target="_blank"><img src="/logo/PAM.png" width="40%"></a><br/>
            <strong>PDAM BANDARMASIH</strong>
          </div>
          <div class="col-lg-3 col-xs-6 text-center">
            <a href="https://sidin-baiman.banjarmasinkota.go.id" target="_blank"><img src="/logo/sb.png" width="40%"></a><br/>
            <strong>SIDIN-BAIMAN</strong>
          </div>
          <div class="col-lg-3 col-xs-6 text-center">
            <a href="http://banjarmasinkota.ina-sdi.or.id" target="_blank"><img src="/logo/GEOPORTAL.png" width="40%"></a><br/>
            <strong>GEOPORTAL</strong>
          </div>
          
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.0.0
      </div>
      <strong>Pemerintah Kota Banjarmasin</strong>
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="/assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/assets/dist/js/demo.js"></script>
<script type="text/javascript">
@include('layouts.notif')
</script>

</body>
</html>
