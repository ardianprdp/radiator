<?php
include_once('../../_header.php');
include_once('../../_sidebar.php');
include_once('../../_config/function.php');
include_once('../../_config/function-aduan.php');

cekUser($_SESSION['seksi']);
$id = $_GET['id'];
$sql = mysqli_query($conn2, "SELECT * FROM tb_pengaduan WHERE id = '$id'");
$ngadu = mysqli_fetch_assoc($sql);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="content-header">
    </div>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Tukang Ngadu</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="update-aduan.php" method="post"></form>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">No Aduan</label>
                                <div class="col-sm-3">
                                    <input type="text" disabled class="form-control" hidden value="<?= $ngadu['id'] ?>">
                                    <input type="text" disabled class="form-control" value="<?= $ngadu['register'] ?>">
                                </div>
                                <div class="col-sm-7">
                                    <input type="text" disabled class="form-control" value="<?= $ngadu['tgl'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">User</label>
                                <div class="col-sm-10">
                                    <input type="text" disabled class="form-control" value="<?= $ngadu['nip'] ?> - <?= $ngadu['nama'] ?>">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>Kategori</label>
                                <input class="form-control" disabled value="<?= $ngadu['kategori'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Detail Aduan</label>
                                <textarea type="text" disabled class="form-control" rows="5"><?= $ngadu['detail_aduan'] ?></textarea>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="row">
                    <div class="col-12">
                        <a href="aduan.php" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Proses Aduan</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputStatus">OC / Penanggung Jawab</label>
                            <select class="form-control custom-select">
                                <option selected disabled>Pilih</option>
                                <?php getPJ(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Solusi Permasalahan</label>
                            <textarea class="form-control" rows="4" placeholder="isi solusi permasalahan"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputStatus">Status</label>
                            <select class="form-control custom-select">
                                <option selected disabled>Pilih</option>
                                <option>Proses</option>
                                <option>Close</option>
                            </select>
                        </div>
                        <input type="submit" value="Simpan" class="btn btn-primary float-right">
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>

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