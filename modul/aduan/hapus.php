<?php
    include "../../_config/koneksi.php";
    inputLog($_SESSION['nip'], $_SESSION['nama'], $_SESSION['seksi'], "HAPUS", "HAPUS ADUAN", $_SERVER["REMOTE_ADDR"]);

    $id = $_GET['id'];

    $result = mysqli_query($conn2, "DELETE FROM tb_pengaduan WHERE id=$id");

    echo '<script language="javascript">';
    echo 'alert("Huweeeeeeeeee beneran dihapus dong !_!"); location.href="../aduan/"';
    echo '</script>';
