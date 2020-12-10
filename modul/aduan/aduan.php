<?php
include_once('../../_header.php');
include_once('../../_sidebar.php');
include_once('../../_config/function.php');
include_once('../../_config/function-aduan.php');

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
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">No Aduan</label>
                            <div class="col-sm-3">
                                <input type="text" hidden name="id" value="<?= $id ?>">
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
                        <div class="form-group">
                            <label>Status</label>
                            <input class="form-control" disabled value="<?= $ngadu['status'] ?>">
                        </div>
                        <?php if ($ngadu['status'] == 'selesai') { ?>
                            <hr>

                        <?php } ?>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="row">
                    <div class="col-12">
                        <a href="../aduan/" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
            <?php if ($_SESSION['seksi'] == 'Seksi PDI' && $ngadu['status'] != 'selesai') { ?>
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Proses Aduan</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <form role="form" method="post" action="update.php">
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="text" hidden name="id" value="<?= $id ?>">

                                    <label for="inputStatus">OC / Penanggung Jawab</label>
                                    <select name="pj" class="form-control custom-select">
                                        <option selected disabled>Pilih</option>
                                        <?php getPJ(); ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Solusi Permasalahan</label>
                                    <textarea class="form-control" name="solusi" rows="4" placeholder="isi solusi permasalahan"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Status</label>
                                    <select name="status" class="form-control custom-select">
                                        <option selected disabled>Pilih</option>
                                        <option>Proses</option>
                                        <option>Selesai</option>
                                    </select>
                                </div>
                                <button type="submit" name="update" class="btn btn-primary float-right">Simpan </button>
                            </div>
                        </form>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            <?php  } ?>
            <?php if ($ngadu['status'] == 'selesai') { ?>
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tindaklanjut Aduan</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Tgl Proses</label>
                                <input disabled class="form-control" value="<?= $ngadu['tgl_selesai'] ?>">
                            </div>
                            <div class="form-group">
                                <label>OC / Penanggung Jawab</label>
                                <input disabled class="form-control" value="<?= $ngadu['nip_pj'] ?> - <?= $ngadu['nama_pj'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Solusi Permasalahan</label>
                                <textarea type="text" disabled class="form-control" rows="5"><?= $ngadu['solusi'] ?></textarea>
                            </div>


                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            <?php  } ?>
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