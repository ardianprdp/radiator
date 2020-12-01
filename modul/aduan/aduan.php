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
   <section class="content">
      <div class="container-fluid">
         <!-- Info boxes -->
         <div class="row">
            <!-- left column -->
            <div class="col-md-3">
               <!-- general form elements -->
               <?php tampilAduan($_SESSION['seksi']);?>
               <div class="card card-primary">
                  <div class="card-header">
                     <h3 class="card-title">Input Aduan</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form role="form" method="post" action="<?php tambahAduan();?>">
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
                                while ($data = mysqli_fetch_assoc($query))
                                { ?>
                                <option value="<?= $data['kategori'] ?>"><?= $data['kategori'] ?></option>
                                
                              <?php } ?>
                            </select>                           
                        </div>
                        <div class="form-group row">
                           <label class="col-form-label">Detail Aduan</label>
                              <textarea type="text" name="detail" class="form-control" placeholder="isi detail aduan" rows="4"></textarea>
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
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Summary aduan saya</h3> 
                  <span class="right badge badge-info">
                    s.d. tanggal 
                    <?php  getTglAkhirAduan() ;?>
                  </span>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-sm">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th style="text-align: center">Kategori</th>
                      <th style="text-align: center">Jumlah Aduan</th>
                      <th style="text-align: center; width: 400px">Progress</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      $user   = $_SESSION['nip'];
                      $query1 = mysqli_query($conn2, 
                        "SELECT
                          kategori,
                          count(detail_aduan) as jumlah,
                          count(case when status = 'open' then 1 else null end) as sts_open,
                          count(case when status = 'proses' then 1 else null end) as sts_proses,
                          count(case when status = 'selesai' then 1 else null end) as sts_selesai	
                        from
                          tb_pengaduan
                        where not kategori = '' and nip = '$user'
                        group by
                          kategori");
                      while($r = mysqli_fetch_assoc($query1)) {
                    ?>
                      <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $r['kategori']; ?></td>
                        <td style="text-align: center;"><?= $r['jumlah']; ?></td>
                        <td>
                          <div class="progress progress-sm">
                              <div class="progress-bar bg-green" role="progressbar" aria-volumenow="<?= $r['sts_selesai']/$r['jumlah']*100; ?>" aria-volumemin="0" aria-volumemax="100" style="width: <?= $r['sts_selesai']/$r['jumlah']*100; ?>%" data-toggle="tooltip" data-placement="top" title="<?= $r['sts_selesai']/$r['jumlah']*100; ?>%">
                              </div>
                          </div>
                          <small>
                            <span class="badge bg-danger"><?= $r['sts_open']; ?> Open</span>
                            <span class="badge bg-warning"><?= $r['sts_proses']; ?> Proses</span>
                            <span class="badge bg-primary"><?= $r['sts_selesai']; ?> Selesai</span>
                          </small>
                        </td>
                      </tr>

                    <?php
                    } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

            <!-- register aduan -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                
                <h3 class="card-title"><button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i></button>Register aduan saya</h3> 
                <div class="card-tools">
                  <span data-toggle="tooltip" title="<?php getAduanUser($_SESSION['nip']) ;?> Aduan" class="badge badge-primary">Total aduan saya : <?php getAduanUser($_SESSION['nip']) ;?></span>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
              <table class="table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Detail Aduan</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $no = 1;
                    $user = $_SESSION['nip'];
                    $sql2 = mysqli_query($conn2, "SELECT * FROM tb_pengaduan WHERE nip = '$user' ORDER BY tgl DESC");
                    while ($a = mysqli_fetch_assoc($sql2)) {
                  ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $a['kategori'] ?></td>
                    <td><?= $a['detail_aduan'] ?></td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>

              <!-- /.card-body -->
            </div>
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
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()
    })
  </script>
<?php include_once('../../_footer.php') ?>

