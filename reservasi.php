<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aplikasi  | Pemesanan Hotel</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition layout-top-nav layout-navbar-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
      <div class="container">
        <a href="" class="navbar-brand">
          <img src="admin/gambar/logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Ayo Hotel</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="user.php" class="nav-link active">Kembali</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Silahkan Pesan Kamar</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
     
        <!-- Main content -->
              <form action="proses_pesan.php" method="POST">
                <div class="card card-body">
              <div class="col-md-12">
                <div class="card-body">
                  <div class="row">
                    <label>Tanggal Cek In</label>                 
                      <input type="date" name="cek_in" class="form-control" placeholder=".col-3">
                    </div>
                    <label>Tanggal Cek Out</label>
                    <div class="form-group">             
                      <input type="date" name="cek_out" class="form-control" placeholder=".col-4">
                    </div>
                    <label>Jumlah Kamar</label>
                    <div class="form-group col-sm-2">                  
                      <input type="text" name="jml_kamar" class="form-control" placeholder="Jumlah Kamar">
                    </div>
                    <div class="col-sm-3">
                      <button type="button" class="form-control btn btn-primary" data-toggle="modal" data-target="#pesan">Pesan</button>
                    </div>
</form>
                  </div>
                </div>
              <div class="modal fade" id="pesan">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Form Pemesanan</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="form-group">
                        <label>Nama Pemesan</label>
                        <input type="text" name="nama_pemesan" class="form-control" placeholder="Masukan Nama Pemesan">
                      </div>
                      <div class="form-group">
                        <label>Email Pemesan</label>
                        <input type="text" name="email_pemesan" class="form-control" placeholder="Masukan Email Pemesan">
                      </div>
                      <div class="form-group">
                        <label>No. Handphone</label>
                        <input type="text" name="hp_pemesan" class="form-control" placeholder="Masukan No. Handphone">
                      </div>
                      <div class="form-group">
                        <label>Nama Tamu</label>
                        <input type="text" name="nama_tamu" class="form-control" placeholder="Masukan Nama Tamu">
                      </div>
                      <div class="form-group">
                        <label>No. Kamar</label>
                        <select name="id_kamar" class="form-control">
                          <option value="">--- Pilih Kamar ---</option>
                          <?php
                          include 'koneksi.php';
                          $data = mysqli_query($koneksi, "select * from kamar");
                          while ($d = mysqli_fetch_array($data)) { 
                            ?>
                            <option value="<?php echo $d['id_kamar']; ?>"><?php echo $d['type_kamar']; ?> <?php echo $d['harga_kamar']; ?> </option>
                            <?php
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Konfirmasi Pesanan</button>
                        </div>
                        </div>
                        </div>
                        </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->

      <!-- Main Footer -->

<footer class=" bg-dark">
  <div class="container">
    <div class="row flex-center">
      <div class="col text-center text-md-left">
        <p class="mb-0">Copyright &copy; Rafi Maulana Darmawan. All rights reserved.</p>
        <span class="fab fa-whatsapp"></span>
       <a class="icon-item  transition-base text-danger" href="https://www.instagram.com/rafireee_/ "><span class="fab fa-instagram"></span></a>
      </div>
      <div class="d-none d-md-block col-md-auto">
        <p class="mb-0">v1.0.0</p>
      </div>
    </div>
  </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/dist/js/adminlte.min.js"></script>
  </body>
  </html>
