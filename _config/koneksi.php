<?php
// masukin function kesini biar ngk ribet
include "function.php";

// setting default timezone
date_default_timezone_set('Asia/Jakarta');
session_start();

// kantor
// $conn1 = mysqli_connect('10.3.10.227', 'user', 'view', 'mpninfo_v09');
// $conn2 = mysqli_connect('10.3.10.220', 'root', '', 'db304');

// local
$conn1 = mysqli_connect('localhost', 'root', '', 'mpninfo_v09');
$conn2 = mysqli_connect('localhost', 'root', '', 'db304');
if (mysqli_connect_errno()) {
    echo mysqli_connect();
    } else {
    
    // cek ip
    $ip     =   get_client_ip();

    // cek ip di db
    $sql    =   mysqli_query($conn2, "SELECT * FROM ipaddress WHERE ip ='$ip'");
    $user   =   mysqli_fetch_assoc($sql);
    $nip    =   $user['nip'];

    // print_r($user);

    if (mysqli_num_rows($sql) > 0) {
        // echo '<br>';

        $sql2       =   mysqli_query($conn1, "SELECT * FROM user WHERE nip = '$nip' ");
        $ses        =   mysqli_fetch_assoc($sql2);
        // print_r(mysqli_fetch_assoc($sql2));

        if ($sql2) {
            $_SESSION['nip']      = $ses['nip'];
            $_SESSION['nama']     = $ses['nama'];
            $_SESSION['seksi']    = $ses['seksi'];
            $_SESSION['jabatan']  = $ses['jabatan'];
            $_SESSION['login']    = true;
        }
    }
}
