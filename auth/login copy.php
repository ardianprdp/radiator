<?php
    include "../_config/koneksi.php";
    if(isset($_SESSION['user'])) {
      echo "<script>window.location='".base_url()."';</script>";
    } else {
    ?>

  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login | Portal KPP 304</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- icon -->
    <link rel="shortcut icon" href="<?= base_url('_assets/images/icons/djp.png')?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('_assets/plugins/fontawesome-free/css/all.min.css')?>">
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url('_assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('_assets/dist/css/adminlte.min.css')?>">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="<?= base_url('_assets/fonts/googleapis/fonts.css')?>">
  </head>
  <body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="#"><b>Portal KPP </b>304</a>
    </div>
    <!-- /.login-logo -->
      <?php
      if(isset($_POST['login'])) {
          $user = trim(mysqli_real_escape_string($conn1, $_POST['user']));
          $pass = trim(mysqli_real_escape_string($conn1, $_POST['pass']));

          $sql_login = mysqli_query($conn1, "SELECT
                a.username as nip,
                a.password as password,
                a.fullname as nama,
                c.nama2 as seksi,
                b.jabatan
              from
                users a
              left join pegawai b on
                a.username = b.nip
              left join seksi c on
                b.seksi = c.id
              where
                nip = '$user'
                and password = '$pass'
                and b.tahun = 2020") or die (mysqli_error($conn1));
          
          $dataLogin  = mysqli_fetch_assoc($sql_login);            

          if (mysqli_num_rows($sql_login) > 0) {
            $_SESSION['nip']   = $dataLogin['nip'];
            $_SESSION['nama']   = $dataLogin['nama'];
            $_SESSION['seksi']       = $dataLogin['seksi'];
            $_SESSION['jabatan']      = $dataLogin['jabatan'];
            echo "<script>window.location='".base_url('home.php')."';</script>";

            // echo "<pre>";
            // print_r($_SESSION);
            // echo "<pre>";
          } else { ?>
              <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-exclamation-triangle"></i> Notif!</h5>
                  <strong>Login gagal!</strong> Username / password salah 
              </div>
          <?php
          }
      }
      ?> 

    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Login menggunakan Akun MPN Info</p>

        <form action="" method="post">
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
          <div class="row">
            <!-- <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div> -->
            <!-- /.col -->
            <!-- <div class="col-4">
              <button type="submit" name="login" class="btn btn-primary btn-block" onclick="">Home</button>
            </div> -->
            <div class="col-4">
              <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="<?= base_url('_assets/plugins/jquery/jquery.min.js')?>"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('_assets/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('_assets/dist/js/adminlte.min.js')?>"></script>

  </body>
  </html>

<?php }  
?>
