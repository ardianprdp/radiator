<?php
include "../_config/koneksi.php";
// echo $_POST['versi'];
// echo $_POST['update'];
// echo $_POST['developer'];
// echo $_POST['detail'];
// die;

if (isset($_POST['update'])) {

    // print_r($_POST);

    $nip        = $_POST['nip'];
    $nama       = $_POST['nama'];
    $ip         = $_POST['ipaddress'];
    $hostname   = $_POST['hostname'];

    $sql = "UPDATE ipaddress SET nip = '$nip', user = '$nama', ip = '$ip', hostname = '$hostname' WHERE nip = '$nip'";

    if (mysqli_query($conn2, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("IP Address pegawai berhasil di update!"); location.href="' . $_SERVER["HTTP_REFERER"] . '"';
        echo '</script>';
    }
} else if (isset($_POST['simpan'])) {

    // print_r($_POST);

    $nip        = $_POST['nip'];
    $nama       = $_POST['nama'];
    $ip         = $_POST['ipaddress'];
    $hostname   = $_POST['hostname'];

    $sql = "INSERT INTO ipaddress (nip, user, ip, hostname) VALUES ('$nip', '$nama', '$ip', '$hostname')";

    if (mysqli_query($conn2, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("IP Address pegawai berhasil ditambahkan!"); location.href="' . $_SERVER["HTTP_REFERER"] . '"';
        echo '</script>';
    }
}
