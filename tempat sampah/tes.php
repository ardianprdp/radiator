<?php
include "_config/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <button id="first">Title Only</button>
  <button class="second">Title and Text</button>
  <button class="third">Title, Text and Icon</button>
  <p><?= lastUpdate();?></p>

  <br>
  <?php echo $_SERVER['AUTH_USER'];?>
  <!-- Sweet Alert -->
  <script src="<?= base_url(); ?>/_assets/plugins/sweetalert/sweetalert2.all.min.js"></script>

  <script>
    document.querySelector("#first").addEventListener('click', function() {
      Swal.fire("Our First Alert");
    });

    document.querySelector(".second").addEventListener('click', function() {
      Swal.fire("Our First Alert", "With some body text!");
    });

    document.querySelector(".third").addEventListener('click', function() {
      Swal.fire("Our First Alert", "With some body text and success icon!", "success");
    });

    Swal.mixin({
      input: 'text',
      confirmButtonText: 'Lanjut &rarr;',
      showCancelButton: true,
      progressSteps: ['1', '2']
    }).queue([{
        title: 'Kirim Aduan',
        text: 'kategori'
      },
      'Detail aduan'
    ]).then((result) => {
      if (result.value) {
        const answers = JSON.stringify(result.value)
        Swal.fire({
          title: 'Aduan berhasil dikirim!',
          html: `
        Register aduan anda ... berisi:
        <pre><code>${answers}</code></pre>
      `,
          confirmButtonText: 'Oke!'
        })
      }
    })
  </script>
</body>

</html>