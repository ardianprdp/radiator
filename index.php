<?php
include "_config/koneksi.php";
// inputLog(null, null, null, "OPEN", "BUKA WEB RADIATOR", $_SERVER["REMOTE_ADDR"], gethostbyaddr($_SERVER['REMOTE_ADDR']));

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
        <!-- <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link"></a>
        </li> -->
      </ul>

      <!-- SEARCH FORM -->
      <!-- <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form> -->

      <!-- <marquee behavior="scroll" direction="left">Penderitaan membuatku semakin kuat dan berkembang! ~ <i>anonim</i></marquee> -->


      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Notifikasi -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">?</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">... Notifikasi</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 Aduan Permasalahan
              <span class="float-right text-muted text-sm">...</span>
            </a>

          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i class="fas fa-th-large"></i></a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <?php include_once "_sidebar.php"; ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <h5 class="mt-4 mb-2"><br></h5>

          <!-- START ACCORDION & CAROUSEL-->

          <div class="row">
            <div class="col-md-12">
              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h3 class="card-title">Link Aplikasi</h3>
                  <div class="card-tools">
                    <ul class="nav nav-pills ml-auto">
                      <li class="nav-item">
                        <a class="nav-link active" href="#link1" data-toggle="tab">Link</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#link2" data-toggle="modal" data-target="#modalProxy">Proxy</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <div class="tab-pane" id="link1">
                    <table class="table table-hover table-sm">
                      <thead style="line-height: 16px">
                        <tr>
                          <th style="text-align: center">Kepegawaian</th>
                          <th colspan="3" style="text-align: center; background-color: #17a2b8">Aplikasi Elektronik, Pelayanan dan Data</th>
                          <th style="text-align: center">Forum dan lainnya</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr style="line-height: 20px;">
                          <td style="text-align: center; font-size: 15px;"><a href="https://sikka-djp/" target="_blank" style="color: black">SIKKA</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="http://sidjp:7777/SIDJP/sipt_web.showlogin" target="_blank" style="color: black">SIDJP</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="http://10.3.10.216:7777/phinisi/" target="_blank" style="color: black">Phinisi</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="http://dashboard/" target="_blank" style="color: black">Dashboard</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="http://tkb-djp/tkb" target="_blank" style="color: black">TKB DJP</a></td>
                        </tr>
                        <tr style="line-height: 20px;">
                          <td style="text-align: center; font-size: 15px;"><a href="http://e-performance.kemenkeu.go.id/" target="_blank" style="color: black">E-Performance</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="https://appportal.intranet.pajak.go.id/login/" target="_blank" style="color: black">Appportal</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="http://ereg/" target="_blank" style="color: black">Ereg</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="http://portaldjp/" target="_blank" style="color: black">Portal DJP</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="http://p2humas/" target="_blank" style="color: black">P2 Humas</a></td>
                        </tr>
                        <tr style="line-height: 20px;">
                          <td style="text-align: center; font-size: 15px;"><a href="http://elearning-djp/" target="_blank" style="color: black">E-Learning</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="http://approweb.intranet.pajak.go.id/" target="_blank" style="color: black">Approweb 3.0</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="http://helpmi/" target="_blank" style="color: black">Helpmi</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="http://10.254.4.56/rikpen/" target="_blank" style="color: black">Portal Rikpen</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="https://10.245.2.84/pelatihan/login.asp" target="_blank" style="color: black">Antariksa</a></td>
                        </tr>
                        <tr style="line-height: 20px;">
                          <td style="text-align: center; font-size: 15px;"><a href="http://e-prime.kemenkeu.go.id/" target="_blank" style="color: black">E-Prime</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="http://amnesti-pajak.intranet.pajak.go.id/" target="_blank" style="color: black">Amnesti Pajak</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="http://tpt-sidjpnine/" target="_blank" style="color: black">TPT SIDJPNINE</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="http://10.254.4.56/monev/" target="_blank" style="color: black">Portal Monev</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="https://kompatriot/" target="_blank" style="color: black">Kompatriot</a></td>
                        </tr>
                        <tr style="line-height: 20px;">
                          <td style="text-align: center; font-size: 15px;"><a href="http://emaildjp/" target="_blank" style="color: black">E-mail DJP</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="http://efiling/" target="_blank" style="color: black">DJP Online</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="https://eksten-sidjpnine.intranet.pajak.go.id/" target="_blank" style="color: black">SIDJPNINE Eksten</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="http://penyuluhan/" target="_blank" style="color: black">Aplikasi Penyuluhan</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="http://lasisonline/" target="_blank" style="color: black">Lasis Online</a></td>
                        </tr>
                        <tr style="line-height: 20px;">
                          <td style="text-align: center; font-size: 15px;"><a href="http://sikeu-djp/" target="_blank" style="color: black">Sikeu DJP</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="http://dmsviewerdjp/" target="_blank" style="color: black">DMS Viewer</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="https://pbb.sidjpnine.intranet.pajak.go.id/" target="_blank" style="color: black">SIDJPNINE PBB</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="http://persil/" target="_blank" style="color: black">Aplikasi Persil</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="http://10.245.7.140/login" target="_blank" style="color: black">Renpen</a></td>
                        </tr>
                        <tr style="line-height: 20px;">
                          <td style="text-align: center; font-size: 15px;"><a href="" target="_blank" style="color: black">Semantik</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="" target="_blank" style="color: black">ALPP Pemeriksaan</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="" target="_blank" style="color: black">SIDJPNINE Alket</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="" target="_blank" style="color: black">Billing</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="" target="_blank" style="color: black">Bimsis</a></td>
                        </tr>
                        <tr style="line-height: 20px;">
                          <td style="text-align: center; font-size: 15px;"><a href="" target="_blank" style="color: black">Rumah Kitsda</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="" target="_blank" style="color: black">E-Meterai</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="" target="_blank" style="color: black">SIDJPNINE Gakum</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="" target="_blank" style="color: black">Monitoring Billing</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="" target="_blank" style="color: black">E-Bimtek</a></td>
                        </tr>
                        <tr style="line-height: 20px;">
                          <td style="text-align: center; font-size: 15px;"><a href="" target="_blank" style="color: black">RAS</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="" target="_blank" style="color: black">E-Nofa</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="" target="_blank" style="color: black">Aktivasi Efin</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="" target="_blank" style="color: black">Monitoring SPT</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="" target="_blank" style="color: black"></a></td>
                        </tr>
                        <tr style="line-height: 20px;">
                          <td style="text-align: center; font-size: 15px;"><a href="" target="_blank" style="color: black">SIPP</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="" target="_blank" style="color: black">Notifikasi Data NTPN</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="" target="_blank" style="color: black">Sapu Jagat</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="" target="_blank" style="color: black">Monitoring Efilling</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="" target="_blank" style="color: black"></a></td>
                        </tr>
                        <tr style="line-height: 20px;">
                          <td style="text-align: center; font-size: 15px;"><a href="" target="_blank" style="color: black">Kepegawaian</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="" target="_blank" style="color: black">E-Audit</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="" target="_blank" style="color: black">Perekaman SPT</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="" target="_blank" style="color: black">Monitoring Token</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="" target="_blank" style="color: black">Aplikasi UPDDP</a></td>
                        </tr>
                        <tr style="line-height: 20px;">
                          <td style="text-align: center; font-size: 15px;"><a href="" target="_blank" style="color: black"></a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="" target="_blank" style="color: black">Mandor DJP</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="" target="_blank" style="color: black">SIM Assign</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="" target="_blank" style="color: black">Monitoring Pemeriksaan</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="" target="_blank" style="color: black"></a></td>
                        </tr>
                        <tr style="line-height: 20px;">
                          <td style="text-align: center; font-size: 15px;"><a href="" target="_blank" style="color: black"></a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="" target="_blank" style="color: black">Administrasi SIDJPNINE</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="" target="_blank" style="color: black">Derik Pemeriksaan</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="" target="_blank" style="color: black">Aplikasi e-dspp</a></td>
                          <td style="text-align: center; font-size: 15px;"><a href="" target="_blank" style="color: black">Pegasus</a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- <div class="tab-pane" id="link2">
                  tes link2
                </div> -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <a href="" class="btn btn-sm btn-info float-left">Anda sedang menggunakan komputer:
                    <i>
                      <?= $ses['nama']; ?></a>
                  </i>
                </div>
                <!-- /.card-footer -->
              </div>
              <!-- /.card -->
            </div>
          </div>
          <!-- /.row -->
          <!-- END ACCORDION & CAROUSEL-->

        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <?php include_once "_footer.php"; ?>
</body>

</html>