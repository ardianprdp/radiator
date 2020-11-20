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
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Log Update</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Log</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
    <div class="card-header">
        <h3 class="card-title">Detail</h3>

        <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
        <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
            <div class="row">
            <div class="col-12 col-sm-4">
                <div class="info-box bg-light">
                <div class="info-box-content">
                    <?php $sql = mysqli_query($conn2, "SELECT * FROM log_update WHERE status = 0");
                        $log = $sql -> num_rows;
                    ?>
                    <span class="info-box-text text-center text-muted">Update Count</span>
                    <span class="info-box-number text-center text-muted mb-0"><?php echo $log; ?></span>
                </div>
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="info-box bg-light">
                <div class="info-box-content">
                    <?php $sql = mysqli_query($conn2, "SELECT max(tgl) as tgl FROM log_update");
                        $tgl = mysqli_fetch_assoc($sql);
                    ?>
                    <span class="info-box-text text-center text-muted">Last Update</span>
                    <span class="info-box-number text-center text-muted mb-0"><?php echo $tgl["tgl"] ;?></span>
                </div>
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="info-box bg-light">
                <div class="info-box-content">
                    <?php $sql = mysqli_query($conn2, "SELECT * FROM log_update WHERE status = 1");
                        $log = $sql -> num_rows;
                    ?>
                    <span class="info-box-text text-center text-muted">Next Project</span>
                    <span class="info-box-number text-center text-muted mb-0"><?php echo $log; ?><span>
                </div>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-12">
                <h4>Aktivitas update</h4>

                <?php $sql = $conn2->query("SELECT * FROM log_update WHERE status = 0");
                    while( $data = $sql->fetch_assoc() ) { ?>

                <div class="post">
                    <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="_assets/images/icons/djp.png" alt="user image">
                    <span class="username">
                        <strong><?php echo $data["title"]; ?></strong>
                    </span>
                    <span class="description"><?php echo $data["title"]; ?> - <i><?php echo $data["tgl"]; ?></i></span>
                    </div>
                    <!-- /.user-block -->
                    <p>
                    <?php echo $data["detail"]; ?>
                    </p>
                    <a href="log.php" class="link-black text-sm"><i class="fas fa-link mr-1"></i> halaman log</a>
                </div>

                <?php } ;?>

            </div>
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
            <h3 class="text-primary"><i class="fas fa-paint-brush"></i> Radiator 304</h3>
            <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia est explicabo repellendus tempore vitae quos recusandae maxime numquam! At, eum ea assumenda illo accusantium dignissimos tenetur explicabo cupiditate quis qui.</p>
            <br>
            <div class="text-muted">
            <p class="text-sm">Kantor
                <b class="d-block">KPP Pratama Pangkal Pinang</b>
            </p>
            <p class="text-sm">Developer
                <b class="d-block">Kerang Ajaib.</b>
            </p>
            </div>

            <h5 class="mt-5 text-muted">Next Update</h5>
            <ul class="list-unstyled">
            
            <?php  $sql = $conn2->query("SELECT * FROM log_update WHERE status = 1");
                while( $data = $sql-> fetch_assoc() ) { ?>
            <li>
                <p class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i> <?php echo $data["title"]; ?></p>
            </li>

                <?php } ?>
            </ul>
            <div class="text-center mt-5 mb-3">
            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-update">Update Baru</button>
            <!-- <a href="#" class="btn btn-sm btn-warning">Report contact</a> -->
            </div>
        </div>
        </div>
    </div>
    <!-- /.card-body -->
    </div>
    <!-- /.card -->

    <!-- modal -->
    <div class="modal fade" id="modal-update">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Update Aplikasi</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form>
                <div class="form-group">
                    <label class="col-form-label">Tanggal:</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Modul:</label>
                    <input type="text" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Detail Update:</label>
                    <textarea class="form-control" id="message-text"></textarea>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Status:</label>
                    <input type="text" class="form-control"></input>
                </div>
            </form>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="float-right btn btn-primary">Simpan</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script>
  $(function () {
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
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