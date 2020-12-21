<?php
include_once "_config/koneksi.php";

// cek ip
$ip     =   get_client_ip();

// cek ip di db
$sql    =   mysqli_query($conn2, "SELECT * FROM ipaddress WHERE ip ='$ip'");
$user   =   mysqli_fetch_assoc($sql);
$nip    =   $user['nip'];

// print_r($user);

if (mysqli_num_rows($sql) > 0) {
    echo '<br>';
    
    $sql2       =   mysqli_query($conn1, "SELECT * FROM user WHERE nip = '$nip' ");
    // print_r(mysqli_fetch_assoc($sql2));
    $ses        =   mysqli_fetch_assoc($sql2);
    
    if ($sql2) {
        $_SESSION['nip']      = $ses['nip'];
        $_SESSION['nama']     = $ses['nama'];
        $_SESSION['seksi']    = $ses['seksi'];
        $_SESSION['jabatan']  = $ses['jabatan'];
        $_SESSION['login']    = true;

        echo '<br>';
        echo $_SESSION['nama'];
    }
}
