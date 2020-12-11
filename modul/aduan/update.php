<?php
include_once('../../_config/koneksi.php');
inputLog($_SESSION['nip'], $_SESSION['nama'], $_SESSION['seksi'], "UPDATE", "UPDATE ADUAN", $_SERVER["REMOTE_ADDR"]);


if (isset($_POST['pj']) && ($_POST['solusi']) && ($_POST['status'])) {
    global $conn2;

    $id              = $_POST['id'];
    $tgl_selesai     = date("Y-m-d H:i:s");
    $nip_pj          = $_POST['pj'];

    // lookup nama pj
    $pj = mysqli_query($conn1, "SELECT nip, nama FROM pegawai WHERE tahun = 2020 AND nip = '$nip_pj'");
    $pj = mysqli_fetch_assoc($pj);

    $nama_pj         = $pj['nama'];
    $status          = $_POST['status'];
    $solusi          = $_POST['solusi'];

    $sql = mysqli_query($conn2, "UPDATE tb_pengaduan SET tgl_selesai = '$tgl_selesai', nip_pj = '$nip_pj', nama_pj = '$nama_pj', status = '$status', solusi = '$solusi' WHERE id = '$id'");

    if ($sql) {
        echo '<script language="javascript">';
        echo 'alert("Aduan berhasil diupdate!"); location.href="index.php"';
        echo '</script>';
    }
} else {
    echo '<script language="javascript">';
    echo 'alert("Aduan gagal diupdate! lengkapi isian proses penanganan aduan"); location.href="aduan.php?id=' . $_POST['id'] . '"';
    echo '</script>';
}
