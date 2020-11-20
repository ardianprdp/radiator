<?php 
   include_once('../_config/koneksi1.php');

   if(isset($_POST['submit'])){

      $tgl      = date("Y-m-d");
      $nip      = $_SESSION['nip'];
      $nama     = $_SESSION['nama'];
      $seksi    = $_SESSION['seksi'];
      $kategori = $_POST['kategori'];
      $detail   = $_POST['detail'];
      $sts      = 'open';

      $sql="INSERT INTO tb_pengaduan (tgl, nip, nama, seksi, kategori, detail_aduan, status ) VALUES ('$tgl', '$nip', '$nama', '$seksi', '$kategori', '$detail', '$sts')";

      if(!mysqli_query($conn2, $sql)) 
      {
          die('Error: ' . mysqli_error($conn2));
      }

      else
      {
          echo 'Data berhasil terinput';
          "<script>window.location='aduan.php'</script>";
        }  
    }
?>