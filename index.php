<?php
 include "_config/koneksi.php";
?>

<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Radiator 304</title>


    <!-- icon -->
    <link rel="shortcut icon" href="<?= base_url() ;?>/_assets/images/icons/djp.png">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url() ;?>/_assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ;?>/_assets/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="<?= base_url() ;?>/_assets/fonts/googleapis/fonts.css">
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

      <marquee behavior="scroll" direction="left">Penderitaan membuatku semakin kuat dan berkembang! ~ <i>anonim</i></marquee>


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
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
              class="fas fa-th-large"></i></a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">Radiator 304</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?= base_url() ;?>/_assets/images/login.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">KPP 304</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview">
              <a href="" class="nav-link active" data-toggle="modal" data-target="#modal-primary">
                <p>
                  Login
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview menu">
              <a href="<?= base_url('index.php') ?>" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Beranda
                </p>
              </a>
            </li>
            <li class="nav-header">Other</li>
              <li class="nav-item">
                <a href="log.php" class="nav-link">
                  <i class="nav-icon far fa-circle text-warning"></i>
                  <p>Log Update</p>
                </a>
              </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

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
                        <th colspan="3" style="text-align: center; background-color: lightblue">Aplikasi Elektronik, Pelayanan dan Data</th>
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
                <a href="" class="btn btn-sm btn-info float-left">IP : <?= get_client_ip(); ?></a>
                <a href="" class="btn btn-sm btn-secondary float-right">Anda login dengan PC : <?= gethostbyaddr($_SERVER['REMOTE_ADDR']) ?></a>
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

    

    <!-- Main Footer -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2020 <a href="#">Kerang Ajaib</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 0.0.1
      </div>
    </footer>
  </div>
  <!-- ./wrapper -->


  <!-- Modal Proxy -->
  <div class="modal fade" id="modalProxy">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Konfigurasi proxy browser </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="input-group">Klik tombol berwarna biru!</div>
          <div class="col-sm-12 input-group">
              <span class="input-group-btn">
              <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="copy to clipboard" onclick="myFunction1()">IE / Chrome</button>
              </span>
              <input id="chrome" type="text" class="form-control" readonly="readonly" value="10.*; emaildjp; kepegawaian-djp; portaldjp; sikka-djp; bospn; spnapp1; eregkpp; eregkpp2; *.intranet.pajak.go.id; sidjp; sidjpwf; *.kpp">
          </div>
          <br>
          <div class="col-sm-12 input-group">
              <span class="input-group-btn">
              <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="copy to clipboard" onclick="myFunction2()">Mozilla Firefox</button>
              </span>
              <input id="firefox" type="text" class="form-control" readonly="readonly" value="localhost, 127.0.0.1, 10.0.0.0/8, naskpp, bospn, spnapp1, sidjp, sidjp5, sidjp7, sidjp9, sidjp10, appportal, sidjpwf, amnesti-pajak, elearning-djp, emaildjp, djponline, efiling, dmsviewerdjp, notifikasidatantpn, ereg, ereg2, helpmi, tpt-sidjpnine, alket, aktivasiefin, sapujagat, rekamspt, kepegawaian-djp, sikka-djp, sikeu-djp, eregkpp, eregkpp2, e-nofa, persil, billing-djp, billing-batch, monitoringspt, kompatriot, monitoring, portaldjp, p2humas, opdp, todolist-oc, dropbox, dropbox1, dropbox2, dropbox3, dropbox4, dropbox5, ras-sidjp, lasisonline, dashboard, rikpen, tkb-djp, kitsda, transformasi-kelembagaan, wwwsiptb, penyuluhan, pendukung-upddp, bimsis, ebimtek, pengaudanpajak, .kpp, approweb.intranet.pajak.go.id, mandor-djp, sso.sidjpnine.intranet.pajak.go.id">
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- End Modal Proxy -->

  <!-- Modal One Day One Information -->
  <div class="modal fade" id="OneDayModal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">One Day One Information</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p style="text-align: center;">Sekarang NPWP Elektronik bisa dikirim ke email, lho. Buka <a href="http://efiling/" class="">djponline</a> saja!</p>
          <img src="<?= base_url() ;?>/_assets/images/information/npwpel-1.png" alt="KTP Elektronik" style="display: block; margin-left: auto; margin-right: auto; width: 45%;">
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- End Modal One Day One Information -->

  <!-- Modal Login -->
  <div class="modal fade" id="modal-primary">
    <div class="modal-dialog">
      <div class="modal-content bg-primary">
        <div class="modal-header">
          <h4 class="modal-title">Login menggunakan akun...</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        </div>
        <form action="auth/login.php" method="post">
          <div class="modal-body">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Username" autofocus name="user">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Password" name="pass">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="submit" name="login" class="btn btn-outline-light">Login</button>
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- End Modal Login -->

  <script>
    function myFunction1() {
        var copyText = document.getElementById("chrome");
        copyText.select();
        document.execCommand("copy");
        alert("Text berhasil dikopi, silahkan paste pada setting proxy browser");
    }
    
    function myFunction2() {
        var copyText = document.getElementById("firefox");
        copyText.select();
        document.execCommand("copy");
        alert("Text berhasil dikopi, silahkan paste pada setting proxy browser");
    }
  </script>



  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="<?= base_url() ;?>/_assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?= base_url() ;?>/_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url() ;?>/_assets/dist/js/adminlte.js"></script>

  <script>
    $(window).on('load', function(){        
      $('#OneDayModal').modal('show');
    }); 
  </script>

  </body>
  </html>