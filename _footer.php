    <!-- Main Footer -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2020 <a href="#">Kerang Ajaib</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b><a href="" data-toggle="modal" data-target="#modalVersion"> Version</b> <?= getVersi(); ?> </a>
      </div>
    </footer>
    </div>
    <!-- ./wrapper -->


    <!-- Modal -->
    <!-- Modal Proxy -->
    <div class="modal fade" id="modalProxy">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Konfigurasi proxy browser </h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="input-group">Klik tombol berwarna biru!</div>
            <div class="col-sm-12 input-group">
              <span class="input-group-btn">
                <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="copy to clipboard" onclick="myFunction1()">IE / Chrome</button>
              </span>
              <input id="chrome" type="text" class="form-control" readonly="readonly" value="10.*; emaildjp; kepegawaian-djp; portaldjp; sikka-djp; bospn; spnapp1; eregkpp; eregkpp2; *.intranet.pajak.go.id; sidjp; sidjpwf; *.kpp">
            </div>
            <br>
            <div class="col-sm-12 input-group">
              <span class="input-group-btn">
                <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="copy to clipboard" onclick="myFunction2()">Mozilla Firefox</button>
              </span>
              <input id="firefox" type="text" class="form-control" readonly="readonly" value="localhost, 127.0.0.1, 10.0.0.0/8, naskpp, bospn, spnapp1, sidjp, sidjp5, sidjp7, sidjp9, sidjp10, appportal, sidjpwf, amnesti-pajak, elearning-djp, emaildjp, djponline, efiling, dmsviewerdjp, notifikasidatantpn, ereg, ereg2, helpmi, tpt-sidjpnine, alket, aktivasiefin, sapujagat, rekamspt, kepegawaian-djp, sikka-djp, sikeu-djp, eregkpp, eregkpp2, e-nofa, persil, billing-djp, billing-batch, monitoringspt, kompatriot, monitoring, portaldjp, p2humas, opdp, todolist-oc, dropbox, dropbox1, dropbox2, dropbox3, dropbox4, dropbox5, ras-sidjp, lasisonline, dashboard, rikpen, tkb-djp, kitsda, transformasi-kelembagaan, wwwsiptb, penyuluhan, pendukung-upddp, bimsis, ebimtek, pengaudanpajak, .kpp, approweb.intranet.pajak.go.id, mandor-djp, sso.sidjpnine.intranet.pajak.go.id">
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- End Modal Proxy -->

    <!-- Modal Login -->
    <div class="modal fade" id="modal-primary">
      <div class="modal-dialog">
        <div class="modal-content bg-primary">
          <div class="modal-header">
            <h4 class="modal-title">Login menggunakan akun MPN-Info</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
          </div>
          <form action="auth/login.php" method="post">
            <div class="modal-body">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Username" autofocus name="user">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Password" name="pass">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="submit" name="login" class="btn btn-outline-light">Login</button>
            </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- End Modal Login -->

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
                    <span class="bg-blue">versi <?= $ver['versi']; ?></span>
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

    <!-- End Modal -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="<?= base_url(); ?>/_assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url(); ?>/_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
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
      function myFunction1() {
        var copyText = document.getElementById("chrome");
        copyText.select();
        document.execCommand("copy");
        alert("Text berhasil dikopi, silahkan paste pada setting proxy browser");
      };

      function myFunction2() {
        var copyText = document.getElementById("firefox");
        copyText.select();
        document.execCommand("copy");
        alert("Text berhasil dikopi, silahkan paste pada setting proxy browser");
      };

      $(window).on('load', function() {
        $('#OneDayModal').modal('show');
      });

      $(document).ready(function() {
        $("#regAduan").DataTable({

          dom: 'Bfrtip',
          buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
          ]
        });

        $('#iptable').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });

      });
    </script>