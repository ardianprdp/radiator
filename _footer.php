      <!-- Modal Version -->
      <div class="modal fade" id="modalVersion">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <p class="modal-title">Versi aplikasi </p>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- Timelime example  -->
              <div class="col-md-12">
                <!-- The time line -->
                <div class="timeline">
                  <?php
                  $nip = $_SESSION['nip'];
                  $versi = mysqli_query($conn2, "SELECT * FROM changelog ORDER BY id DESC");
                  while ($ver = mysqli_fetch_assoc($versi)) { ?>
                    <!-- timeline time label -->
                    <div class="time-label">
                      <span class="bg-blue"><?= $ver['versi']; ?></span>
                    </div>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <div>
                      <i class="fas fa-clock bg-gray"></i>
                      <div class="timeline-item">
                        <span class="time"><i class="fas fa-clock"></i> <?= $ver['tgl']; ?></span>
                        <h3 class="timeline-header"><b class="text-primary"><?= $ver['dev']; ?></b> <?= $ver['upd']; ?></h3>

                        <div class="timeline-body">
                          <?= $ver['detail']; ?>
                        </div>
                        <?php if ($_SESSION['nip'] == $ver['nip']) { ?>
                          <div class="timeline-footer">
                            <a class="btn btn-danger btn-sm" href="clDel.php?<?= 'id=' . $ver['id'] ?>">Delete</a>
                          </div>
                        <?php } ?>
                      </div>
                    </div>
                    <!-- END timeline item -->

                  <?php } ?>
                </div>


              </div>
            </div>
            <!-- /.timeline -->
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- End Modal Version -->

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <strong>Copyright &copy; 2020 <a href="#">Kerang Ajaib</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
          <b><a href="" data-toggle="modal" data-target="#modalVersion"> Version</b> <?= getVersi();?> </a>
        </div>
      </footer>
      </div>
      <!-- ./wrapper -->

      <!-- REQUIRED SCRIPTS -->
      <!-- jQuery -->
      <script src="<?= base_url(); ?>/_assets/plugins/jquery/jquery.min.js"></script>
      <!-- Bootstrap -->
      <script src="<?= base_url(); ?>/_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- overlayScrollbars -->
      <script src="<?= base_url(); ?>/_assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
      <!-- AdminLTE App -->
      <script src="<?= base_url(); ?>/_assets/dist/js/adminlte.js"></script>

      <!-- DataTables -->
      <script src="<?= base_url(); ?>/_assets/plugins/datatables/jquery.dataTables.min.js"></script>
      <script src="<?= base_url(); ?>/_assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
      <script src="<?= base_url(); ?>/_assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
      <script src="<?= base_url(); ?>/_assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
      <script src="<?= base_url(); ?>/_assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
      <script src="<?= base_url(); ?>/_assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
      <script src="<?= base_url(); ?>/_assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

      <!-- Select2 -->
      <script src="<?= base_url(); ?>/_assets/plugins/select2/js/select2.full.min.js"></script>

      <!-- OPTIONAL SCRIPTS -->
      <script src="<?= base_url(); ?>/_assets/dist/js/demo.js"></script>

      <!-- Toastr -->
      <script src="<?= base_url(); ?>/_assets/plugins/toastr/toastr.min.js"></script>

      <!-- PAGE PLUGINS -->
      <!-- jQuery Mapael -->
      <script src="<?= base_url(); ?>/_assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
      <script src="<?= base_url(); ?>/_assets/plugins/raphael/raphael.min.js"></script>
      <script src="<?= base_url(); ?>/_assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>
      <script src="<?= base_url(); ?>/_assets/plugins/jquery-mapael/maps/usa_states.min.js"></script>
      <!-- ChartJS -->
      <script src="<?= base_url(); ?>/_assets/plugins/chart.js/Chart.min.js"></script>
      <!-- Sweet Alert -->
      <script src="<?= base_url(); ?>/_assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
      <script>
        $(document).ready(function() {
          $("#regAduan").DataTable({

            dom: 'Bfrtip',
            buttons: [
              'copy', 'csv', 'excel', 'pdf', 'print'
            ]
          });

        });
      </script>


      </body>

      </html>