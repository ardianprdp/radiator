<?php
include_once('../../_header.php');
include_once('../../_sidebar.php');
include_once('../../_config/function.php');
include_once('../../_config/function-aduan.php');

inputLog($_SESSION['nip'], $_SESSION['nama'], $_SESSION['seksi'], "OPEN", "MODUL ADUAN", $_SERVER["REMOTE_ADDR"]);

$user = $_SESSION['nip'];
$sql = mysqli_query($conn2, "SELECT
                              nip,
                              nama,
                              count(CASE WHEN STATUS = 'open' THEN register ELSE NULL END) as open,
                              count(CASE WHEN STATUS = 'proses' THEN register ELSE NULL END) as proses,
                              count(CASE WHEN STATUS = 'selesai' THEN register ELSE NULL END) as selesai
                              from
                              tb_pengaduan
                              where
                              nip = '$user'");
$totAduan = mysqli_fetch_assoc($sql);

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <br>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-12">
          <div class="callout callout-info">
            <h5>Perhatian!</h5>
            <p>Aduan yang diinput pada form dibawah akan segera ditindaklanjuti.
              <br>Apabila terdapat permasalahan yang <span class="badge badge-danger"><b>Urgent</b></span> harap disampaikan secara langsung untuk dapat ditangani. Terima kasih... :D</p>
          </div>
        </div>
        <!-- left column -->
        <div class="col-md-3">
          <!-- general form elements -->
          <?php tampilAduan($_SESSION['seksi']); ?>
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Input Aduan</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post" action="tambah.php">
              <div class="card-body">
                <div class="form-group row">
                  <input type="text" class="form-control" placeholder="<?= $_SESSION['nama']; ?>" disabled>
                </div>
                <div class="form-group row">
                  <label class="col-form-label">Kategori</label>
                  <select name="kategori" class="form-control select2">
                    <option selected="selected" disabled>Pilih</option>
                    <?php
                    // query untuk menampilkan kategori
                    $query = mysqli_query($conn2, "SELECT DISTINCT(kategori) FROM dim_aduan");
                    while ($data = mysqli_fetch_assoc($query)) { ?>
                      <option value="<?= $data['kategori'] ?>"><?= $data['kategori'] ?></option>

                    <?php } ?>
                  </select>
                </div>
                <div class="form-group row">
                  <label class="col-form-label">Detail Aduan</label>
                  <textarea type="text" name="detail" class="form-control" placeholder="isi detail aduan" rows="3"></textarea>
                </div>
                <!-- <div class="form-group">
                           <div class="input-group">
                              <label class="col-sm-2 col-form-label">File</label>
                              <div class="custom-file col-sm-10">
                                 <input type="file" name="file" class="custom-file-input" id="customFile">
                                 <label class="custom-file-label">Pilih file...</label>
                              </div>
                           </div>
                        </div> -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>

        <div class="col-md-9">
          <!-- register aduan -->
          <div class="card card-primary card-outline card-tabs">
            <div class="card-header p-0 pt-1">
              <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                <li class="pt-2 px-3">
                  <h3 class="card-title">Aduan</h3>
                </li>
                <?php if ($_SESSION['seksi'] == 'Seksi PDI') { ?>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-two-home-tab" data-toggle="pill" href="#tabTindaklanjut" role="tab" aria-controls="tabTindaklanjut" aria-selected="true"><b class="text-danger">Tindaklanjuti</b> <span class="badge badge-danger"><?= $totAduan['open']; ?></span></a>
                  </li>
                <?php } ?>
                <li class="nav-item">
                  <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill" href="#tabAduan" role="tab" aria-controls="tabAduan" aria-selected="true">Open <span class="badge badge-primary"><?= $totAduan['open']; ?></span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-tabs-two-profile-tab" data-toggle="pill" href="#tabProses" role="tab" aria-controls="tabProses" aria-selected="false">Proses <span class="badge badge-warning"><?= $totAduan['proses']; ?></span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-tabs-two-messages-tab" data-toggle="pill" href="#tabSelesai" role="tab" aria-controls="tabSelesai" aria-selected="false">Selesai<span class="badge badge-success"><?= $totAduan['selesai']; ?></span></a>
                </li>
              </ul>
            </div>

            <div class="card-body p-0">
              <div class="tab-content" id="custom-tabs-two-tabContent">
                <div class="tab-pane fade show" id="tabTindaklanjut" role="tabpanel" aria-labelledby="tabTindaklanjut-tab">

                  <div class="card-body table-responsive p-0" style="height: 500px;">
       4            <table class="table table-head-fixed text-nowrap">
                      <thead>
                        <tr>
                          <th style="width: 5px"></th>
                          <th style="width: 100px">Register</th>
                          <th style="width: 150px; text-align: center;">Kategori</th>
                          <th style="text-align: center;">Detail Aduan</th>
                          <th style="text-align: center;"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1;
                        $user = $_SESSION['nip'];
                        $sql2 = mysqli_query($conn2, "SELECT * FROM tb_pengaduan WHERE status = 'open' ORDER BY id DESC");
                        while ($a = mysqli_fetch_assoc($sql2)) {
                        ?>
                          <tr>
                            <td>
                              <?php switch ($a['status']) {
                                case "selesai":
                                  echo '<i class="fas fa-check"></i></a>';
                                  break;
                                case "proses":
                                  echo '<i class="fas fa-spinner"></i></a>';
                                  break;
                                default:
                                  echo '<i class="fas fa-minus"></i></a>';
                              } ?>

                            </td>
                            <td>
                              <?php if ($a['status'] == "selesai") {
                                echo '<a style="text-decoration: underline;" href="aduan.php?id=' . $a["id"] . '">' . $a['register'] . '</a>';
                              } else {
                                echo $a['register'];
                              } ?>
                            </td>
                            <td><?= $a['kategori'] ?></td>
                            <td><?= $a['detail_aduan'] ?></td>
                            <td class="text-right py-0 align-middle">
                              <div class="btn-group btn-group-sm">
                                <?php if ($a['status'] != "selesai") {
                                  echo '<a href="aduan.php?id=' . $a['id'] . '" class="btn btn-info"><i class="fas fa-edit"></i></a>';
                                } ?>
                                <?php if ($a['status'] == "open") {
                                  echo '<a href="hapus.php?id=' . $a['id'] . '" onclick="return checkDelete()" class="btn btn-danger" )><i class="fas fa-trash"></i></a>';
                                } ?>
                              </div>
                            </td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>


                </div>
                <div class="tab-pane fade show active" id="tabAduan" role="tabpanel" aria-labelledby="tabAduan-tab">

                  <div class="card-body table-responsive p-0" style="height: 400px;">
                    <table class="table table-head-fixed text-nowrap">
                      <thead>
                        <tr>
                          <th style="width: 5px"></th>
                          <th style="width: 100px">Register</th>
                          <th style="width: 150px; text-align: center;">Kategori</th>
                          <th style="text-align: center;">Detail Aduan</th>
                          <th style="text-align: center;"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1;
                        $user = $_SESSION['nip'];
                        $sql2 = mysqli_query($conn2, "SELECT * FROM tb_pengaduan WHERE nip = '$user'  AND status = 'open' ORDER BY id DESC");
                        while ($a = mysqli_fetch_assoc($sql2)) {
                        ?>
                          <tr>
                            <td>
                              <?php switch ($a['status']) {
                                case "selesai":
                                  echo '<i class="fas fa-check"></i></a>';
                                  break;
                                case "proses":
                                  echo '<i class="fas fa-spinner"></i></a>';
                                  break;
                                default:
                                  echo '<i class="fas fa-minus"></i></a>';
                              } ?>

                            </td>
                            <td>
                              <?php if ($a['status'] == "selesai") {
                                echo '<a style="text-decoration: underline;" href="aduan.php?id=' . $a["id"] . '">' . $a['register'] . '</a>';
                              } else {
                                echo $a['register'];
                              } ?>
                            </td>
                            <td><?= $a['kategori'] ?></td>
                            <td><?= $a['detail_aduan'] ?></td>
                            <td class="text-right py-0 align-middle">
                              <div class="btn-group btn-group-sm">
                                <?php if ($a['status'] != "selesai") {
                                  echo '<a href="aduan.php?id=' . $a['id'] . '" class="btn btn-info"><i class="fas fa-edit"></i></a>';
                                } ?>
                                <?php if ($a['status'] == "open") {
                                  echo '<a href="hapus.php?id=' . $a['id'] . '" onclick="return checkDelete()" class="btn btn-danger" )><i class="fas fa-trash"></i></a>';
                                } ?>
                              </div>
                            </td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>


                </div>
                <div class="tab-pane fade" id="tabProses" role="tabpanel" aria-labelledby="tabProses-tab">
                  <div class="card-body table-responsive p-0" style="height: 400px;">
                    <table class="table table-head-fixed text-nowrap">
                      <thead>
                        <tr>
                          <th style="width: 5px"></th>
                          <th style="width: 100px">Register</th>
                          <th style="width: 150px; text-align: center;">Kategori</th>
                          <th style="text-align: center;">Detail Aduan</th>
                          <th style="text-align: center;"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1;
                        $user = $_SESSION['nip'];
                        $sql2 = mysqli_query($conn2, "SELECT * FROM tb_pengaduan WHERE nip = '$user'  AND status = 'proses' ORDER BY id DESC");
                        while ($a = mysqli_fetch_assoc($sql2)) {
                        ?>
                          <tr>
                            <td>
                              <?php switch ($a['status']) {
                                case "selesai":
                                  echo '<i class="fas fa-check"></i></a>';
                                  break;
                                case "proses":
                                  echo '<i class="fas fa-spinner"></i></a>';
                                  break;
                                default:
                                  echo '<i class="fas fa-minus"></i></a>';
                              } ?>

                            </td>
                            <td>
                              <?php if ($a['status'] == "selesai") {
                                echo '<a style="text-decoration: underline;" href="aduan.php?id=' . $a["id"] . '">' . $a['register'] . '</a>';
                              } else {
                                echo $a['register'];
                              } ?>
                            </td>
                            <td><?= $a['kategori'] ?></td>
                            <td><?= $a['detail_aduan'] ?></td>
                            <td class="text-right py-0 align-middle">
                              <div class="btn-group btn-group-sm">
                                <?php if ($a['status'] != "selesai") {
                                  echo '<a href="aduan.php?id=' . $a['id'] . '" class="btn btn-info"><i class="fas fa-edit"></i></a>';
                                } ?>
                                <?php if ($a['status'] == "open") {
                                  echo '<a href="hapus.php?id=' . $a['id'] . '" onclick="return checkDelete()" class="btn btn-danger" )><i class="fas fa-trash"></i></a>';
                                } ?>
                              </div>
                            </td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="tab-pane fade" id="tabSelesai" role="tabpanel" aria-labelledby="tabSelesai-tab">
                  <div class="card-body table-responsive p-0" style="height: 400px;">
                    <table class="table table-head-fixed text-nowrap">
                      <thead>
                        <tr>
                          <th style="width: 5px"></th>
                          <th style="width: 100px">Register</th>
                          <th style="width: 150px; text-align: center;">Kategori</th>
                          <th style="text-align: center;">Detail Aduan</th>
                          <th style="text-align: center;"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1;
                        $user = $_SESSION['nip'];
                        $sql2 = mysqli_query($conn2, "SELECT * FROM tb_pengaduan WHERE nip = '$user'  AND status = 'selesai' ORDER BY id DESC");
                        while ($a = mysqli_fetch_assoc($sql2)) {
                        ?>
                          <tr>
                            <td>
                              <?php switch ($a['status']) {
                                case "selesai":
                                  echo '<i class="fas fa-check"></i></a>';
                                  break;
                                case "proses":
                                  echo '<i class="fas fa-spinner"></i></a>';
                                  break;
                                default:
                                  echo '<i class="fas fa-minus"></i></a>';
                              } ?>

                            </td>
                            <td>
                              <?php if ($a['status'] == "selesai") {
                                echo '<a style="text-decoration: underline;" href="aduan.php?id=' . $a["id"] . '">' . $a['register'] . '</a>';
                              } else {
                                echo $a['register'];
                              } ?>
                            </td>
                            <td><?= $a['kategori'] ?></td>
                            <td><?= $a['detail_aduan'] ?></td>
                            <td class="text-right py-0 align-middle">
                              <div class="btn-group btn-group-sm">
                                <?php if ($a['status'] != "selesai") {
                                  echo '<a href="aduan.php?id=' . $a['id'] . '" class="btn btn-info"><i class="fas fa-edit"></i></a>';
                                } ?>
                                <?php if ($a['status'] == "open") {
                                  echo '<a href="hapus.php?id=' . $a['id'] . '" onclick="return checkDelete()" class="btn btn-danger" )><i class="fas fa-trash"></i></a>';
                                } ?>
                              </div>
                            </td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.card-body -->
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!--/. container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
  function checkDelete() {
    return confirm('Waaahhh aku mau dihapus dong :(');
  };
</script>
<?php include_once('../../_footer.php') ?>