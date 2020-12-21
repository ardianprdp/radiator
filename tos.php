<?php
// $conn2 = mysqli_connect('10.3.10.220', 'root', '', 'db304');

$cmd = shell_exec('arp -a');
$cmd = preg_split('/[\n]  /', $cmd);

echo '<pre>';
print_r($cmd);
echo '</pre>';

echo '<br>';
echo '<br>';

$kalimat = "123456789";
$sub_kalimat = substr($kalimat, -3);
echo $sub_kalimat;

global $conn2;
$sql = mysqli_query($conn2, "SELECT
                                nip,
                                nama,
                                count(CASE WHEN STATUS = 'open' THEN register ELSE NULL END) as open,
                                count(CASE WHEN STATUS = 'proses' THEN register ELSE NULL END) as proses,
                                count(CASE WHEN STATUS = 'selesai' THEN register ELSE NULL END) as selesai
                            from
                                tb_pengaduan");
$totAduan = mysqli_fetch_assoc($sql);

print '<pre>';
print_r($output);
print '</pre>';

echo $output['open'];
echo substr($_SERVER['PHP_SELF'], 10, 10);