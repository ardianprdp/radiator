<?php
    // koneksi
    $conn1 = mysqli_connect('localhost', 'root', '', 'mpninfo_v09');
    $conn2 = mysqli_connect('localhost', 'root', '', 'db304 220');
    
    // fungsi base url
    function base_url($url = null) {
        $base_url = "http://localhost/radiator";
        if($url != null) {
            return $base_url."/".$url;
        } else {
            return $base_url;
        }
    }
    
    // Mendapatkan IP pengunjung menggunakan getenv()
    function get_client_ip() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'IP tidak dikenali';
        return $ipaddress;
    }

    // Menghitung seluruh pegawai
    function getAllPegawai() {
        global $conn1;
        $sql = mysqli_query($conn1, "SELECT nama as jml FROM pegawai WHERE tahun = 2020");
        return $sql -> num_rows;
    }


    function popup() {
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
    function cekPassword() {
        global $conn1;
        $pass = $_SESSION['nip'];
        $sql = mysqli_query($conn1, "SELECT username, password FROM users where password = '$pass'");
        $cek = mysqli_fetch_assoc($sql);

        if(mysqli_num_rows($cek) > 0) {
            var_dump($cek);
        }
    }


    // Cetak tanggal terakhir aduan
    function getTglAkhirAduan() {
        global $conn2;
        $tgl = mysqli_query($conn2, "SELECT max(tgl) as tgl_terakhir from tb_pengaduan"); 
        $tgl_akhir = mysqli_fetch_assoc($tgl);
        echo $tgl_akhir['tgl_terakhir'];
    }

    function getAduanUser($user) {
        global $conn2;
        $sql = mysqli_query($conn2, "SELECT count(1) as hitung from tb_pengaduan WHERE nip = '$user'"); 
        $aduan = mysqli_fetch_assoc($sql);
        echo $aduan['hitung'];
    }

    function target($tahun) {
        global $conn1;
        $sql = mysqli_query($conn1, "SELECT sum(target) AS renpen FROM renpen WHERE tahun = '$tahun'");
        $renpen = mysqli_fetch_assoc($sql);
        return number_format($renpen['renpen'] / 1000000000, 1) . " M";
    }

    function tambahAduan() {
        global $conn2;
        if(isset($_POST['submit'])){

            $tgl      = date("Y-m-d");
            $nip      = $_SESSION['nip'];
            $nama     = $_SESSION['nama'];
            $seksi    = $_SESSION['seksi'];
            $kategori = $_POST['kategori'];
            $detail   = $_POST['detail'];
            $sts      = 'open';
      
            $sql="INSERT INTO tb_pengaduan (tgl, nip, nama, seksi, kategori, detail_aduan, status ) VALUES ('$tgl', '$nip', '$nama', '$seksi', '$kategori', '$detail', '$sts')";
      
            if(!mysqli_query($conn2, $sql)) 
            {
                die('Error: ' . mysqli_error($conn2));
            }
      
            else
            {
                echo '<script language="javascript">';
                echo 'alert("Aduan berhasil diinput!"); location.href="aduan.php"';
                echo '</script>';
            }  
          }
    }

    function tampilAduan($user) {
        if($user = 'Seksi PDI') {
            echo '<a href="regAduan.php" class="btn btn-outline-primary btn-block mb-3">Register Aduan</a>';
        }
    }
?>