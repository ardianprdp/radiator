<?php 
   include_once('../../_header.php');
   include_once('../../_sidebar.php');
   include_once('../../function.php');

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <div class="content-header">
   </div>
   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
         <!-- Info boxes -->
         <div class="row">
            <!-- left column -->
            <div class="col-md-6">
               <!-- general form elements -->
               <div class="card card-primary">
                  <div class="card-header">
                     <h3 class="card-title">Input Aduan</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form role="form" method="post" action="">
                     <div class="card-body">
                        <div class="form-group row">
                           <label class="col-sm-2 col-form-label">Aduan</label>
                           <div class="col-sm-10">
                              <input type="text" name="aduan" class="form-control" placeholder="isi aduan">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label class="col-sm-2 col-form-label">Detail Aduan</label>
                           <div class="col-sm-10">
                              <textarea type="text" name="aduan2" class="form-control" placeholder="isi detail aduan" rows="4"></textarea>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="input-group">
                              <label class="col-sm-2 col-form-label">File</label>
                              <div class="custom-file col-sm-10">
                                 <input type="file" name="file" class="custom-file-input" id="customFile">
                                 <label class="custom-file-label">Pilih file...</label>
                              </div>
                           </div>
                     </div>
                  </div>
               <!-- /.card-body -->
               <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
               </div>
               </form>
            </div>
            <!-- /.card -->
         </div>

         <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Fixed Header Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>User</th>
                      <th>Date</th>
                      <th>Status</th>
                      <th>Reason</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>183</td>
                      <td>John Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-success">Approved</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>219</td>
                      <td>Alexander Pierce</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-warning">Pending</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>657</td>
                      <td>Bob Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-primary">Approved</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>175</td>
                      <td>Mike Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-danger">Denied</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>134</td>
                      <td>Jim Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-success">Approved</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>         
      </div>
      <!-- /.row -->
  </div>
<!--/. container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include_once('../../_footer.php') ?>