<?php
// koneksi dikantor
// $conn1 = mysqli_connect('10.3.10.227', 'user', 'view', 'mpninfo_v09');
// $conn2 = mysqli_connect('10.3.10.220', 'root', '', 'db304');

// koneksi dilaptop
$conn1 = mysqli_connect('localhost', 'root', '', 'mpninfo_v09');
$conn2 = mysqli_connect('localhost', 'root', '', 'db304');

function cekUser($user)
{
    global $conn1;
    if ($user !== "Seksi PDI") {
        echo "<script>window.location='../../stalker.php';</script>";
    }
}

function regAduan()
{
    global $conn2;
    $no = 1;
    $sql = mysqli_query($conn2, "SELECT * FROM tb_pengaduan ORDER BY id DESC");
    while ($aduan = mysqli_fetch_assoc($sql)) {
        echo '<tr>
                <td style="width: 10px">' . $aduan['register'] . '<br><span class="right badge badge-info">' . $aduan['status'] . '</span></td>
                <td style="width: 100px">' . $aduan['tgl'] . '</td>
                <td style="width: 200px">' . $aduan['nama'] . '<br><span class="right badge badge-danger">' . $aduan['seksi'] . '</span></td>
                <td>' . $aduan['detail_aduan'] . '</td>
                <td>' . $aduan['nama_pj'] . '</td>
            </tr>';
    }
}

function getPJ()
{
    global $conn1;
    $sql = mysqli_query($conn1, "SELECT nip, nama FROM pegawai WHERE
                                        tahun = 2020
                                        and seksi = 3
                                        and not jabatan = 1");
    while ($pj = mysqli_fetch_assoc($sql)) {
        echo '<option value="' . $pj['nip'] . '">' . $pj['nama'] . '</option>';
    }
}

// tampil aduan by id
function getAduan($id)
{
    global $conn2;
    $sql = mysqli_query($conn2, "SELECT * FROM tb_pengaduan WHERE id = '$id'");
    return $ngadu = mysqli_fetch_assoc($sql);
}


// Cetak tanggal terakhir aduan
function getTglAkhirAduan()
{
    global $conn2;
    $tgl = mysqli_query($conn2, "SELECT max(tgl) as tgl_terakhir from tb_pengaduan");
    $tgl_akhir = mysqli_fetch_assoc($tgl);
    echo $tgl_akhir['tgl_terakhir'];
}

// tampil jumlah aduan user
function getAduanUser($user)
{
    global $conn2;
    $sql = mysqli_query($conn2, "SELECT count(1) as hitung from tb_pengaduan WHERE nip = '$user'");
    $aduan = mysqli_fetch_assoc($sql);
    echo $aduan['hitung'];
}

// tampil menu ke register aduan, hanya seksi PDI
function tampilAduan($seksi)
{
    if ($seksi == 'Seksi PDI') {
        echo '<a href="register.php" class="btn btn-outline-primary btn-block mb-3">Register Aduan</a>';
    }
}

// tampil summary oc
function regAduanPJ()
{
    global $conn2;
    $no = 1;
    $sql = mysqli_query($conn2, "SELECT
                                    nama_pj as pj,
                                    count(case when status = 'open' then 1 else null end) as status_open,
                                    count(case when status = 'proses' then 1 else null end) as status_proses,
                                    count(case when status = 'selesai' then 1 else null end) as status_selesai,
                                    count(1) as jml
                                FROM
                                    tb_pengaduan
                                GROUP BY
                                    nama_pj");
    while ($aduan = mysqli_fetch_assoc($sql)) {
        echo '<tr>
                    <td style="text-align: center">' . $no++ . '</td>
                    <td style="text-align: center">' . $aduan['pj'] . '</td>
                    <td style="text-align: center">' . $aduan['status_open'] . '</td>
                    <td style="text-align: center">' . $aduan['status_proses'] . '</td>
                    <td style="text-align: center">' . $aduan['status_selesai'] . '</td>
                    <td style="text-align: center">' . $aduan['jml'] . '</td>
             </tr>';
    }
}

// proses aduan
function prosesAduan()
{
    if (isset($_POST['update'])) {
        global $conn2;

        $id = $_POST['id'];

        $tgl_selesai     = date("Y-m-d H:i:s");
        $nip_pj          = $_POST['pj'];
        // $nama_pj         = $_POST['nama'];
        $status          = $_POST['status'];
        $solusi          = $_POST['solusi'];

        $sql = mysqli_query($conn2, "UPDATE tb_pengaduan SET tgl_selesai = '$tgl_selesai', nip_pj = '$nip_pj', status = '$status', solusi = '$solusi' WHERE id = '$id'");

        header("Location: aduan.php");
    }
}
