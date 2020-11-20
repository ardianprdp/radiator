<?php
    include "../_config/koneksi.php";
    if(isset($_SESSION['user'])) {
      echo "<script>window.location='".base_url()."';</script>";
    } else {

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
          } else { 
            echo '<script language="javascript">';
            echo 'alert("Gagal login")';
            echo '</script>';
            echo "<script>window.location='".base_url()."';</script>";
              // echo "
              // <script>
              //   $(function() {
              //     const Toast = Swal.mixin({
              //       toast: true,
              //       position: 'top-end',
              //       showConfirmButton: false,
              //       timer: 3000
              //     });
              //     $('.toastrDefaultError').click(function() {
              //       toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
              //     });
              
              // </script>
              
              // ";
          }
      }
}  
?>
