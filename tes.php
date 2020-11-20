<?php
 include "_config/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
      <!-- Theme style -->
      <link rel="stylesheet" href="<?= base_url() ;?>/_assets/dist/css/adminlte.min.css">
</head>
<body>
  
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



  <!-- jQuery -->
  <script src="<?= base_url() ;?>/_assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url() ;?>/_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script>
    $(window).on('load', function(){        
      $('#myModal').modal('show');
      }); 
  </script>
</body>
</html>