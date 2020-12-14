<?php
include "../_config/koneksi.php";

$id = $_GET['id'];

$url = $_SERVER['PHP_SELF'];
$sql = mysqli_query($conn2, "DELETE FROM changelog WHERE id = '$id'");

echo '<script language="javascript">';
echo 'alert("Huweeeeeeeeee beneran dihapus dong !_!"); location.href="'.$_SERVER["HTTP_REFERER"].'"';
echo '</script>';
