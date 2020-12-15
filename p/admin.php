<?php
include_once('../_header.php');
include_once('../_sidebar.php');

inputLog($_SESSION['nip'], $_SESSION['nama'], $_SESSION['seksi'], "OPEN", "BUKA MENU ADMIN", $_SERVER["REMOTE_ADDR"]);

?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">

    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Menu admin</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div id="accordion">
                <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h4 class="card-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#updateAplikasi">
                        Input update aplikasi
                      </a>
                    </h4>
                  </div>
                  <div id="updateAplikasi" class="panel-collapse collapse in">
                    <div class="row">
                      <div class="col-md-8">
                        <form action="clAdd.php" method="post">
                          <div class="card-body">
                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Versi Aplikasi</label>
                              <div class="col-sm-8">
                                <input type="text" name="versi" class="form-control" placeholder="update versi">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Update Aplikasi</label>
                              <div class="col-sm-8">
                                <input type="text" name="update" class="form-control" placeholder="update aplikasi">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Developer</label>
                              <div class="col-sm-8">
                                <input type="text" name="developer" class="form-control" placeholder="nama pengembang" value="<?= $_SESSION['nip'] == '815101289' ? 'ardianprdp' : '';?>">
                              </div>
                            </div>
                            <hr>
                            <div class="form-group">
                              <label>Detail Update</label>
                              <textarea class="form-control" name="detail" rows="4" placeholder="detail update aplikasi"></textarea>
                            </div>
                            <div class="form-group">
                              <button type="submit" name="submit" class="btn btn-primary float-right">Simpan</button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="col-md-4">
                        <div class="card-body">
                          <div class="callout callout-info">
                            <h5>Update terakhir</h5>
                            <p><?php lastUpdate(); ?></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card card-success">
                  <div class="card-header">
                    <h4 class="card-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                        Import Data
                      </a>
                    </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse">
                    <div class="card-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                      3
                      wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                      laborum
                      eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                      nulla
                      assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                      nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                      beer
                      farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                      labore sustainable VHS.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
      <!-- END ACCORDION & CAROUSEL-->

    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include_once('../_footer.php') ?>