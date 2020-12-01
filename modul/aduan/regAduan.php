<?php
include_once('../../_header.php');
include_once('../../_sidebar.php');
include_once('../../_config/function.php');
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <div class="content-header">
   </div>
   <!-- Main content -->
   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <div class="card">
                  <div class="card-body p-0">
                     <table class="table">
                        <thead>
                           <tr>
                              <th style="width: 10px">No</th>
                              <th>Penanggung Jawab</th>
                              <th>Open</th>
                              <th>Proses</th>
                              <th>Selesai</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>1.</td>
                              <td>Update software</td>
                              <td>
                                 <div class="progress progress-xs">
                                    <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                 </div>
                              </td>
                              <td><span class="badge bg-danger">55%</span></td>
                           </tr>
                           <tr>
                              <td>2.</td>
                              <td>Clean database</td>
                              <td>
                                 <div class="progress progress-xs">
                                    <div class="progress-bar bg-warning" style="width: 70%"></div>
                                 </div>
                              </td>
                              <td><span class="badge bg-warning">70%</span></td>
                           </tr>
                           <tr>
                              <td>3.</td>
                              <td>Cron job running</td>
                              <td>
                                 <div class="progress progress-xs progress-striped active">
                                    <div class="progress-bar bg-primary" style="width: 30%"></div>
                                 </div>
                              </td>
                              <td><span class="badge bg-primary">30%</span></td>
                           </tr>
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
               <table id="example1" class="table table-bordered table-striped">
                  <thead>
                     <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>Trident</td>
                        <td>Internet
                           Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                     </tr>
                     <tr>
                        <td>Trident</td>
                        <td>Internet
                           Explorer 5.0
                        </td>
                        <td>Win 95+</td>
                        <td>5</td>
                        <td>C</td>
                     </tr>
                     <tr>
                        <td>Trident</td>
                        <td>Internet
                           Explorer 5.5
                        </td>
                        <td>Win 95+</td>
                        <td>5.5</td>
                        <td>A</td>
                     </tr>
                     <tr>
                        <td>Trident</td>
                        <td>Internet
                           Explorer 6
                        </td>
                        <td>Win 98+</td>
                        <td>6</td>
                        <td>A</td>
                     </tr>
                     <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 7</td>
                        <td>Win XP SP2+</td>
                        <td>7</td>
                        <td>A</td>
                     </tr>
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

<script>
   $(function() {
      $("#example1").DataTable({
         "responsive": true,
         "autoWidth": false,
      });
      $('#example2').DataTable({
         "paging": true,
         "lengthChange": false,
         "searching": false,
         "ordering": true,
         "info": true,
         "autoWidth": false,
         "responsive": true,
      });
   });
</script>

<?php include_once('../../_footer.php') ?>