<?php
    include "../../_config/koneksi.php";

    $id = $_GET['id'];

    $result = mysqli_query($conn2, "DELETE FROM tb_pengaduan WHERE id=$id");

    echo '<script language="javascript">';
    echo 'alert("Huweeeeeeeeee beneran dihapus dong !_!"); location.href="../aduan/"';
    echo '</script>';
    
?>