<?php
    include_once('../../_config/koneksi.php');

    // Get id from URL to delete that user
    $id = $_GET['id'];

    // Delete user row from table based on given id
    $result = mysqli_query($conn2, "DELETE FROM tb_pengaduan WHERE id=$id");

    // After delete redirect to Home, so that latest user list will be displayed.
    echo '<script language="javascript">';
    echo 'alert("Huweeeeeeeeee beneran dihapus dong !_!"); location.href="aduan.php"';
    echo '</script>';
    
?>