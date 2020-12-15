<?php
include "../_config/koneksi.php";
// echo $_POST['versi'];
// echo $_POST['update'];
// echo $_POST['developer'];
// echo $_POST['detail'];
// die;

if (isset($_POST['versi']) && ($_POST['update']) && ($_POST['detail']) && ($_POST['developer'])) {
    global $conn2;
    date_default_timezone_set('Asia/Jakarta');

    $versi     = $_POST['versi'];
    $tgl       = date("Y-m-d H:i:s");
    $upd       = $_POST['update'];
    $detail    = $_POST['detail'];
    $developer = $_POST['developer'];
    $nip       = $_SESSION['nip'];
    $nama      = $_SESSION['nama'];

    $sql = "INSERT INTO changelog (versi, tgl, upd, detail, dev, nip, nama) VALUES ('$versi', '$tgl', '$upd', '$detail', '$developer', '$nip', '$nama')";

    if (mysqli_query($conn2, $sql)) {
        header("Location: admin.php");
    } else {
        echo 'gagal cok!!!!!';
    }
}
