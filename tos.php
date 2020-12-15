<?php
$cmd = shell_exec('arp -a');
$cmd = preg_split('/[\n]  /', $cmd);

echo '<pre>';
print_r($cmd);
echo '</pre>';

echo '<br>';
echo '<br>';

$kalimat = "123456789";
$sub_kalimat = substr($kalimat,-3);
echo $sub_kalimat;