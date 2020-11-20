<?php 
   include_once('../_header.php');
   include_once('../_sidebar.php');

   if(isset($_POST['submit'])){

      $tgl      = date("Y-m-d");
      $nip      = $_SESSION['nip'];
      $nama     = $_SESSION['nama'];
      $seksi    = $_SESSION['seksi'];
      $kategori = $_POST['kategori'];
      $detail   = $_POST['detail'];
      $sts      = 'open';

      $sql="INSERT INTO tb_pengaduan (tgl, nip, nama, seksi, kategori, detail_aduan, status ) VALUES ('$tgl', '$nip', '$nama', '$seksi', '$kategori', '$detail', '$sts')";

      if(!mysqli_query($conn2, $sql)) 
      {
          die('Error: ' . mysqli_error($conn2));
      }

      else
      {
          echo '<script language="javascript">';
          echo 'alert("Aduan berhasil diinput!"); location.href="aduan.php"';
          echo '</script>';
      }  
    }
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
               <div class="card card-primary">
                  <div class="card-header">
                     <h3 class="card-title">Input Aduan</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form role="form" method="post" action="aduan.php">
                     <div class="card-body">
                        <div class="form-group row">
                            <input type="text" class="form-control" placeholder="<?= $_SESSION['nama']; ?>" disabled>
                        </div>
                        <div class="form-group row">
                           <label class="col-form-label">Kategori</label>
                            <select name="kategori" class="form-control select2">
                              <option selected="selected" disabled>Pilih</option>
                              <?php
                                // query untuk menampilkan propinsi
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
                <h3 class="card-title">Summary Aduan</h3> 
                  <span class="right badge badge-info">
                    s.d. tanggal 
                    <?php
                      $tgl = mysqli_query($conn2, "SELECT max(tgl) as tgl_terakhir from tb_pengaduan"); 
                      $tgl_akhir = mysqli_fetch_assoc($tgl);
                      echo $tgl_akhir['tgl_terakhir'];
                    ?>
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
                      <th style="text-align: center; width: 300px">Progress</th>
                      <th style="text-align: center; width: 40px">%</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      $query1 = mysqli_query($conn2, 
                        "SELECT
                          kategori,
                          count(detail_aduan) as jumlah,
                          count(case when status = 'open' then 1 else null end) as sts_open,
                          count(case when status = 'proses' then 1 else null end) as sts_proses,
                          count(case when status = 'selesai' then 1 else null end) as sts_selesai	
                        from
                          `db304 220`.tb_pengaduan
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
                        <td><div class="btn-group btn-group-sm">
                          <a href="#" class="btn btn-info"><i class="fas fa-search"></i></a>
                        </div></td>
                      </tr>

                    <?php
                    } ?>
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
<?php include_once('../_footer.php') ?>

