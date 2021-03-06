<?php
// koneksi dikantor
$conn1 = mysqli_connect('10.3.10.227', 'user', 'view', 'mpninfo_v09');
$conn2 = mysqli_connect('10.3.10.220', 'root', '', 'db304');

// koneksi dikantor
// $conn1 = mysqli_connect('localhost', 'root', '', 'mpninfo_v09');
// $conn2 = mysqli_connect('localhost', 'root', '', 'db304');

// fungsi base url
function base_url($url = null)
{
    $base_url = "http://10.3.10.220/radiator";
    // $base_url = "http://localhost/radiator";
    if ($url != null) {
        return $base_url . "/" . $url;
    } else {
        return $base_url;
    }
}

// hapus session
function deleteSession()
{
    session_unset();
    session_destroy();
    echo "<script>window.location='../index.php';</script>";
}

// Mendapatkan IP pengunjung menggunakan getenv()
function get_client_ip()
{
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if (getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if (getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if (getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if (getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if (getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'IP tidak dikenali';
    return $ipaddress;
}

// aktifkan menu
function menu($title, $sidebar)
{
}

// Menghitung seluruh pegawai
function getAllPegawai()
{
    global $conn1;
    $sql = mysqli_query($conn1, "SELECT nama as jml FROM pegawai WHERE tahun = 2020");
    return $sql->num_rows;
}


function popup()
{
    echo '
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>
        ';
}

// Cek password apakah masih default
function cekPassword()
{
    global $conn1;
    $pass = $_SESSION['nip'];
    $sql = mysqli_query($conn1, "SELECT username, password FROM users where password = '$pass'");
    $cek = mysqli_fetch_assoc($sql);

    if (mysqli_num_rows($cek) > 0) {
        var_dump($cek);
    }
}

function penerimaan($tahun)
{
    global $conn1;
    $sql = mysqli_query($conn1, "SELECT SUM(nominal) as nominal FROM mpn WHERE tahunbayar = '$tahun'");
    $mpn = mysqli_fetch_assoc($sql);
    return number_format($mpn['nominal'] / 1000000000, 1) . " M";
}

function target($tahun)
{
    global $conn1;
    $sql = mysqli_query($conn1, "SELECT sum(target) AS renpen FROM renpen WHERE tahun = '$tahun'");
    $renpen = mysqli_fetch_assoc($sql);
    return number_format($renpen['renpen'] / 1000000000, 1) . " M";
}

// input log
function inputLog($nip, $nama, $seksi, $kegiatan, $keterangan, $ipaddress)
{
    global $conn2;
    date_default_timezone_set('Asia/Jakarta');
    $date = date("Y-m-d H:i:s");

    $sql = "INSERT INTO log (date, nip, nama, seksi, kegiatan, keterangan, ipaddress) VALUES ('$date', '$nip', '$nama', '$seksi', '$kegiatan', '$keterangan', '$ipaddress')";

    if (mysqli_query($conn2, $sql)) {
    };
}

// cek admin url
function cekAdmin($seksi)
{
    if ($seksi != $_SESSION['Seksi PDI']) {
        echo "<script>window.location='../stalker.php';</script>";
    }
}

// get update
function lastUpdate()
{
    global $conn2;
    $sql = mysqli_query($conn2, "SELECT * FROM changelog ORDER BY id DESC LIMIT 1");
    $upd = mysqli_fetch_assoc($sql);
    echo $upd['versi'] . '<br>';
    echo $upd['tgl'] . '<br>';
    echo $upd['upd'] . '<br>';
    echo $upd['detail'] . '<br>';
    echo $upd['dev'] . '<br>';
}

//get history update
function getVersi()
{
    global $conn2;
    $sql = mysqli_query($conn2, "SELECT versi FROM changelog ORDER BY id DESC LIMIT 1");
    $ver = mysqli_fetch_assoc($sql);
    return $ver['versi'];
}

// print array
function delok($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

// cek user harus PDI
function cekUser($user)
{
    global $conn1;
    if ($user !== "Seksi PDI") {
        echo "<script>window.location='" . base_url('stalker.php') . "';</script>";
    }
}

function user($ip)
{
    global $conn2;

    $sql = mysqli_query($conn2, "SELECT * FROM ipaddress WHERE ip = '$ip'");
    $ipuser = mysqli_fetch_assoc($sql);

    if ($ip == $ipuser['ip']) {
        echo 'anda sedang menggunakan komputer ' . $ipuser['user'];
    } else {
        echo 'anda siapa ya?';
    }
}

function sidebar($url) {
    switch ($url) {
        case base_url() . 'index.php':
            'menu-open';
            break;
        
        default:
            '';
            break;
    }
}