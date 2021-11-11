<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIP CAIR | Sistem Informasi Pencairan Sp2d</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url().'welcome'?>" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url(); ?>" class="nav-link">Website</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <a href="<?php echo base_url().'auth/logout'?>"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
      <li class="nav-item dropdown">
        
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- <span class="dropdown-item dropdown-header">15 Notifications</span> -->
          <!-- <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item"> -->
            <!-- <i class="fas sign-out mr-2" href="<?php echo base_url().'auth/logout'?>"></i> Keluar -->
            <!-- <a href="<?php echo base_url().'auth/logout'?>"><i class="fas sign-out mr-2"></i>Sign Out</a> -->
          <!-- </a> -->
          <!-- <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a> -->
          <!-- <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a> -->
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-3">
    <!-- Brand Logo -->
    <a href="<?php echo base_url(); ?>" class="brand-link">
      <img src="<?php echo base_url(); ?>/assets/images/sp2dlogo.png" alt="AdminLTE Logo" class=" img-circle elevation-3" style="opacity: .8; width: 30%; text-align: center;">
      &nbsp&nbsp&nbsp<span class="brand-text font-weight-light"> SIP CAIR</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->

      <!-- SidebarSearch Form -->
      <div class="form-inline">

      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li <?php if ($menu == 'upload' ) { 
                            echo 'class="nav-item active"'; 
                        }else{
                            echo 'class="nav-item"';
                        }?>>
            <a href="<?php echo base_url().'upload'?>" class="nav-link">
              <i class="nav-icon fas fa-upload"></i>
              <p>
                Upload Data
              </p>
            </a>
            
          </li>
          <li <?php if ($menu == 'tambah' && $ses_level == 'admin') { 
                            echo 'class="nav-item active"'; 
                        }else if ($ses_level == 'admin'){
                            echo 'class="nav-item"';
                        }else{
                          echo 'class="nav-item" style = "display:none"';
                        }?>>
            <a href="<?php echo base_url().'auth/tambah_pengguna'?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Tambah Pengguna
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div id="load" style="width: 100%; height: 100%; position: fixed; text-indent: 100%; background: #e0e0e0 url('<?php echo base_url().'assets/img/loading.gif'?>') no-repeat center; z-index: 1; opacity: 0.4; background-size: 8%;">Loading...</div>
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Masukkan Pengguna Baru</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Users</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Silakan Tambah Pengguna</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <form class="form-horizontal" id="form-input-pengguna" method="POST">
        <div class="card-body">

            <div class="form-group row">
                  <label for="nama" class="col-sm-1 col-form-label">Nama Pengguna</label>
                  <div class="col-sm-10">
                    <div class="custom-file">
                      <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Pengguna">
                    </div>
                  </div>
            </div>

            <div class="form-group row">
                  <label for="username" class="col-sm-1 col-form-label">Username</label>
                  <div class="col-sm-10">
                    <div class="custom-file">
                      <input type="text" class="form-control" name="username" placeholder="Masukkan Username">
                    </div>
                  </div>
            </div>
            <div class="form-group row">
                  <label for="Password" class="col-sm-1 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <div class="custom-file">
                      <input type="password" class="form-control" name="password">
                    </div>
                  </div>
            </div>

            <div class="form-group row">
                  <label for="Password" class="col-sm-1 col-form-label">Level</label>
                  <div class="col-sm-10">
                    <div class="custom-file">
                      <select name="level" class="form-control" id="odp">
                        <option value = "admin">Admin</option>
                        <option value = "user">User</option>
                      </select>
                    </div>
                  </div>
            </div>                              
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        </form>
        <!-- /.card-footer-->
      </div>
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2021 SIP CAIR</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="<?php echo base_url(); ?>assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});

$(document).ready(function(){ 
  $("#load").fadeOut();
  $('#form-input-pengguna').on('submit', function(event){

    // var data = $(this).serialize();
    var data = new FormData(this);
    // console.log(data);
    event.preventDefault();

    $.ajax({

      url:'<?php echo base_url('auth/tambah'); ?>',

      method:"POST",

      data: data,

      contentType:false,

      cache:false,

      processData:false,

      success:function(data){
        if(data > 0){
          alert("Pengguna Berhasil Ditambahkan");
          document.getElementById("form-input-pengguna").reset();
        }else{
          alert("Pengguna Gagal Ditambahkan");
        }
        

      }

    })

  })
})


</script>
</body>
</html>