<?php
include "_config/koneksi.php";
if (
  !isset($_SESSION['nip']) &&
  !isset($_SESSION['nama']) &&
  !isset($_SESSION['seksi']) &&
  !isset($_SESSION['jabatan'])
) {
  echo "<script>window.location='" . base_url('index.php') . "';</script>";
} else {
?>



  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Radiator 304</title>

    <!-- icon -->
    <link rel="shortcut icon" href="<?= base_url(); ?>/_assets/images/icons/djp.png">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url(); ?>/_assets/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url(); ?>/_assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url(); ?>/_assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?= base_url(); ?>/_assets/plugins/toastr/toastr.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>/_assets/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="<?= base_url(); ?>/_assets/fonts/googleapis/fonts.css">
  </head>

  <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <!-- <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Link Website</a>
        </li> -->
          <li class="nav-item d-none d-sm-inline-block">
            <a href="<?= base_url(); ?>/auth/logout.php" class="nav-link">Logout</a>
          </li>
        </ul>

        <marquee behavior="scroll" direction="left">Penderitaan membuatku semakin kuat dan berkembang! ~ <i>anonim</i></marquee>

        <!-- Right navbar links -->
      </nav>
      <!-- /.navbar -->

    <?php }
    ?>