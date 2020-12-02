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
        $sql = mysqli_query($conn2, "SELECT * FROM tb_pengaduan");
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
?>