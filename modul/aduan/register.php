<?php
include_once('../../_header.php');
include_once('../../_sidebar.php');
include_once('../../_config/function.php');
include_once('../../_config/function-aduan.php');

cekUser($_SESSION['seksi']);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <div class="content-header">
   </div>
   <!-- Main content -->
   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
         <a href="index.php" class="btn btn-md btn-outline-primary btn-block mb-3 md">Kembali</a>
         <div class="row">
            <div class="col-md-12">
               <div class="card">
                  <div class="card-body p-0">
                     <table id="example" class="table table-bordered table-striped">
                        <thead>
                           <tr>
                              <th style="width: 10px">No</th>
                              <th style="text-align: center">Penanggung Jawab</th>
                              <th style="text-align: center">Open</th>
                              <th style="text-align: center">Proses</th>
                              <th style="text-align: center">Selesai</th>
                              <th style="text-align: center">Total Aduan</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php regAduanPJ(); ?>
                        </tbody>
                     </table>
                  </div>
                  <!-- /.card-body -->
               </div>
               <!-- /.card -->
            </div>
            <!-- /.col -->
         </div>
         <!-- /.row -->
         <div class="card">
            <div class="card-header">
               <h3 class="card-title">Register permasalahan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
               <table id="regAduan" class="table table-bordered table-striped">
                  <thead>
                     <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>User</th>
                        <th>Detail Aduan</th>
                        <th>OC</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php regAduan(); ?>
                  </tbody>
               </table>
            </div>
            <!-- /.card-body -->
         </div>
         <!-- /.card -->

      </div><!-- /.container-fluid -->
   </section>
   <!-- /.content -->

   <!-- Main content -->

   <!-- /.content -->

   <!--/. container-fluid -->
   </section>
   <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include_once('../../_footer.php') ?>