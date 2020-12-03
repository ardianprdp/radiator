<?php
    // koneksi
    $conn1 = mysqli_connect('10.3.10.227', 'user', 'view', 'mpninfo_v09');
    $conn2 = mysqli_connect('10.3.10.220', 'root', '', 'db304');

    function cekUser($user) {
        global $conn1;
        if($user !== "Seksi PDI") {
            echo "<script>window.location='../../stalker.php';</script>";
        } 
    }

    function regAduan() {
        global $conn2;
        $no = 1;
        $sql = mysqli_query($conn2, "SELECT * FROM tb_pengaduan ORDER BY id DESC");
        while ($aduan = mysqli_fetch_assoc($sql)){
            echo '<tr>
                        <td>'.$no++.'</td>
                        <td style="width: 100px">'.$aduan['tgl'].'</td>
                        <td style="width: 200px">'.$aduan['nama'].'<br><span class="right badge badge-danger">'.$aduan['seksi'].'</span></td>
                        <td>'.$aduan['detail_aduan'].'</td>
                        <td>'.$aduan['nama_pj'].'</td>
                 </tr>';
        }
    }

    function getPJ() {
        global $conn1;
        $sql = mysqli_query($conn1, "SELECT nip, nama FROM pegawai WHERE
                                        tahun = 2020
                                        and seksi = 3
                                        and not jabatan = 1");
        while ($pj = mysqli_fetch_assoc($sql)){
            echo '<option value="'.$pj['nip'].'">'.$pj['nama'].'</option>';
        }
    }

    function getAduan($id) {
        global $conn2;
        $sql = mysqli_query($conn2, "SELECT * FROM tb_pengaduan WHERE id = '$id'");
        return $ngadu = mysqli_fetch_assoc($sql);
    } 

    function newReg() {
        global $conn2;
        date_default_timezone_set('Asia/Jakarta');

        $sql = mysqli_query($conn2, "SELECT COUNT(id) as regAkhir FROM tb_pengaduan");
        $reg = mysqli_fetch_assoc($sql);

        $nomor = $reg['regAkhir'];
        $tahun = date('Y');

        $kode = $tahun . "-" . sprintf("%04s", $nomor);

        return $kode;
    }

    function inputAduan () {
        global $conn2;
        if (isset($_POST['kategori']) && ($_POST['detail'])) {

            $sqlAkhir = mysqli_query($conn2, "SELECT MAX(id)+1 as num FROM tb_pengaduan");
            $kodeAkhir = mysqli_fetch_assoc($sqlAkhir);
            $k = date("Y") . "-" . sprintf("%04s", $kodeAkhir['num']);
          
            $tgl      = date("Y-m-d");
            $nip      = $_SESSION['nip'];
            $nama     = $_SESSION['nama'];
            $seksi    = $_SESSION['seksi'];
            $kategori = $_POST['kategori'];
            $detail   = $_POST['detail'];
            $sts      = 'open';
          
            $sql = "INSERT INTO tb_pengaduan (register, tgl, nip, nama, seksi, kategori, detail_aduan, status ) VALUES ('$k', '$tgl', '$nip', '$nama', '$seksi', '$kategori', '$detail', '$sts')";
          
            if (!mysqli_query($conn2, $sql)) {
              die('Error: ' . mysqli_error($conn2));
            } else {
              echo '<script language="javascript">';
              echo 'alert("Aduan berhasil diinput!"); location.href="aduan.php"';
              echo '</script>';
            }
          }         
    }
