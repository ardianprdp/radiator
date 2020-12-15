<?php
$cmd = shell_exec('arp -a');
$cmd = preg_split('/[\n]/', $cmd);

echo '<pre>';
print_r($cmd);
echo '</pre>';

echo '<pre>';
print_r(preg_split('/[\n]  /', $cmd));
echo '</pre>';

?>