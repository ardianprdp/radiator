<?php
   include "_header.php";
   include "_sidebar.php";
?>

<div id="content" class="col-lg-10 col-sm-10">
   <!-- content starts -->
   <div>
      <ul class="breadcrumb">
         <li>
            <a href="#">Home</a>
         </li>
         <li>
            <a href="#">Tables</a>
         </li>
      </ul>
   </div>
   <div class="row">
      <div class="box col-md-12">
         <div class="box-inner">
            <div class="box-header well" data-original-title="">
               <h2><i class="glyphicon glyphicon-user"></i> Data Permohonan Insentif PPh 21</h2>
               <div class="box-icon">
                  <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
                  <a href="#" class="btn btn-minimize btn-round btn-default"><i
                     class="glyphicon glyphicon-chevron-up"></i></a>
                  <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
               </div>
            </div>
            <div class="box-content">
               <div class="alert alert-info">Update data per: <span class="label-warning label label-default"> 
               <?php
                    $query = mysqli_query($conn1, "SELECT MAX(tgl_surat) AS tgl_terakhir FROM insentif_covid_pph21");
                    while($data = mysqli_fetch_array($query)) {
                        echo $data['tgl_terakhir'];
                    }
               ?></span>
               </div>
               <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                  <thead>
                     <tr>
                        <th>No</th>
                        <th>Tgl Surat | No Surat</th>
                        <th>NPWP</th>
                        <th>Nama WP</th>
                        <th>Seksi | AR</th>
                        <th>KLU</th>
                        <th>Status</th>
                     </tr>
                  </thead>
                  <tbody>
                    <?php
                        $no = 1;
                        $query = mysqli_query($conn1, "SELECT * FROM insentif_covid_pph21 ORDER BY tgl_surat");
                        while($data = mysqli_fetch_array($query)) {
                    ?>
                     <tr>
                        <td><?= $no++ ?></td>
                        <td class="center"><?= $data['tgl_surat'] . " | " . $data['no_surat'];?></td>
                        <td class="center"><?= $data['npwp'];?></td>
                        <td class="center"><?= $data['nama_wp'];?></td>
                        <td class="center"><?= $data['seksi'] . " | " . $data['nama_ar'];?></td>
                        <td class="center"><?= $data['klu'];?></td>
                        <td class="center">
                        <?php if ($data['ket_pemberitahuan'] == "DTP PPh 21 disetujui") {
                            echo '<span class="label-success label label-default">disetujui</span>';
                        } else {
                            echo '<span class="label-danger label label-default">itolak</span>';
                        } ?>
                        </td>
                     </tr>
                        <?php } ?>
                </tbody>
               </table>
            </div>
         </div>
      </div>
      <!--/span-->
   </div>
   <!-- content ends -->
</div>

<?php
   include "_footer.php";
?>