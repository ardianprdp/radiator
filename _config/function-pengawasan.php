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