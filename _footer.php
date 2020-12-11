    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <strong>Seksi PDI &copy; 2020 <a href="#">Ard</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b><a href=""> Version</b> 0.0.1 </a>
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