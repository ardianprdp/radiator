<?php
include "_config/koneksi.php";
include "_config/function.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php cekPassword(); ?>
</body>

</html>

<a href="" class="btn btn-sm btn-secondary float-right">Anda login dengan PC : <?= gethostbyaddr($_SERVER['REMOTE_ADDR']) ?></a>