<?php
include_once('_header.php');
include_once('_sidebar.php');
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="content-header">
    </div>
    <!-- Main content -->

    <!-- Anda tidak berhak -->
    <!-- Main content -->
    <section class="content">
        <div class="error-page">
            <h2 class="headline text-warning"> <b>403</b> </h2>

            <div class="error-content">
                <h2><i class="fas fa-exclamation-triangle text-warning"></i> Hayo! mo kemana ges </h2>

                <h3>
                    Kamu ndak boleh masuk sini yaa. rahasia bingiiitt..
                    Sumonggo, <a href="home.php">bali wae... </a>
                </h3>

                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="ini tidak berfungsi">

                    <div class="input-group-append">
                        <button type="submit" name="submit" class="btn btn-warning"><i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
                <!-- /.input-group -->
            </div>
            <!-- /.error-content -->
        </div>
        <!-- /.error-page -->
    </section>
    <!-- /.content -->

    <!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include_once('_footer.php')
?>