<?php
// masukin function kesini biar ngk ribet
include "function.php";

// setting default timezone
date_default_timezone_set('Asia/Jakarta');
session_start();

// kantor
$conn1 = mysqli_connect('10.3.10.227', 'user', 'view', 'mpninfo_v09');
$conn2 = mysqli_connect('10.3.10.220', 'root', '', 'db304');

// local
// $conn1 = mysqli_connect('localhost', 'root', '', 'mpninfo_v09');
// $conn2 = mysqli_connect('localhost', 'root', '', 'db304');
if (mysqli_connect_errno()) {
    echo mysqli_connect();
    // } else {
    //     echo "koneksi berhasil!";

}
