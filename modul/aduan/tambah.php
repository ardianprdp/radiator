<?php
include "../../_config/koneksi.php";

if (isset($_POST['kategori']) && ($_POST['detail'])) {

    // ambil nomor register baru
    function newReg()
    {
        global $conn2;
        date_default_timezone_set('Asia/Jakarta');

        $sql = mysqli_query($conn2, "SELECT COUNT(id) as regAkhir FROM tb_pengaduan");
        $reg = mysqli_fetch_assoc($sql);

        $nomor = $reg['regAkhir'];
        $tahun = date('Y');

        $kode = $tahun . "-" . sprintf("%04s", $nomor);

        return $kode;
    }

    $kode     = newReg();
    $tgl      = date("Y-m-d H:i:s");
    $nip      = $_SESSION['nip'];
    $nama     = $_SESSION['nama'];
    $seksi    = $_SESSION['seksi'];
    $kategori = $_POST['kategori'];
    $detail   = $_POST['detail'];
    $sts      = 'open';

    $sql = "INSERT INTO tb_pengaduan (register, tgl, nip, nama, seksi, kategori, detail_aduan, status ) VALUES ('$kode', '$tgl', '$nip', '$nama', '$seksi', '$kategori', '$detail', '$sts')";

    if (mysqli_query($conn2, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("Aduan berhasil diinput!"); location.href="index.php"';
        echo '</script>';
    }
} else {
    echo '<script language="javascript">';
    echo 'alert("Aduan gagal diinput, harap cek isian aduan!"); location.href="index.php"';
    echo '</script>';
}
