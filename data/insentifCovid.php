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
            <a href="#">Inesntif COVID</a>
         </li>
      </ul>
   </div>
   <!--/row-->
   <div class="row">
      <div class="box col-md-12">
         <div class="box-inner">
            <div class="box-header well">
               <h2><i class="glyphicon glyphicon-th"></i> Data Permohonan Insentif COVID</h2>
               <div class="box-icon">
                  <a href="#" class="btn btn-setting btn-round btn-default"><i
                     class="glyphicon glyphicon-cog"></i></a>
                  <a href="#" class="btn btn-minimize btn-round btn-default"><i
                     class="glyphicon glyphicon-chevron-up"></i></a>
                  <a href="#" class="btn btn-close btn-round btn-default"><i
                     class="glyphicon glyphicon-remove"></i></a>
               </div>
            </div>
            <div class="box-content">
               <ul class="nav nav-tabs" id="myTab">
                  <li class="active"><a href="#info">Summary</a></li>
                  <li><a href="#pph21">PPh 21</a></li>
                  <li><a href="#pph22">PPh 22</a></li>
                  <li><a href="#pph23">PPh 23</a></li>
                  <li><a href="#pph25">PPh 25</a></li>
                  <li><a href="#pp23">PP 23</a></li>
               </ul>
               <div id="myTabContent" class="tab-content">
                  <!-- Summary -->
                  <div class="tab-pane active" id="info">
                     <h3>Summary
                        <small>...</small>
                     </h3>
                     <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                     </p> -->
                     <table id="" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                           <thead>
                              <tr>
                                 <th rowspan="2" text-align="center">No</th>
                                 <th rowspan="2" text-align="center">NPWP</th>
                                 <th rowspan="2" text-align="center">Nama WP</th>
                                 <th rowspan="2" text-align="center">KLU</th>
                                 <th rowspan="2" text-align="center">Sektor</th>
                                 <th rowspan="2" text-align="center">AR</th>
                                 <th rowspan="2" text-align="center">Seksi</th>
                                 <th colspan="6" text-align="center">Tanggal Permohonan</th>
                                 <th colspan="6" text-align="center">Status Permohonan</th>
                                 <th colspan="2" text-align="center">Pelaporan Realisasi</th>
                                 <th colspan="4" text-align="center">Realisasi PPh 21 (Rp)</th>
                                 <th rowspan="2" text-align="center">Total Realisasi (Rp)</th>
                                 <th colspan="4" text-align="center">Realisasi PP 23 (Rp)</th>
                                 <th rowspan="2" text-align="center">Total Realisasi (Rp)</th>
                              </tr>
                              <tr>
                                 <th>PPh 21</th>
                                 <th>PPh 22</th>
                                 <th>PPh 22-DN</th>
                                 <th>PPh 23</th>
                                 <th>PPh 25</th>
                                 <th>PPh Final</th>
                                 <th>PPh 21</th>
                                 <th>PPh 22</th>
                                 <th>PPh 22-DN</th>
                                 <th>PPh 23</th>
                                 <th>PPh 25</th>
                                 <th>PPh Final</th>
                                 <th>PPh 21</th>
                                 <th>PP 23</th>
                                 <th>April</th>
                                 <th>Mei</th>
                                 <th>Juni</th>
                                 <th>Juli</th>
                                 <th>April</th>
                                 <th>Mei</th>
                                 <th>Juni</th>
                                 <th>Juli</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                                 $no = 1;
                                 $query = mysqli_query($conn1, "SELECT * FROM insentif_covid_summary");
                                 while($data = mysqli_fetch_array($query)) {
                                 ?>
                              <tr>
                                 <td><?= $no++ ?></td>
                                 <td class="center"><?= $data['npwp'];?></td>
                                 <td class="center"><?= $data['nama'];?></td>
                                 <td class="center"><?= $data['klu'];?></td>
                                 <td class="center"><?= $data['sektor'];?></td>
                                 <td class="center"><?= $data['ar'];?></td>
                                 <td class="center"><?= $data['seksi'];?></td>
                                 <td class="center"><?= $data['tgl_pph21'];?></td>
                                 <td class="center"><?= $data['tgl_pph22'];?></td>
                                 <td class="center"><?= $data['tgl_pph22dn'];?></td>
                                 <td class="center"><?= $data['tgl_pph23'];?></td>
                                 <td class="center"><?= $data['tgl_pph25'];?></td>
                                 <td class="center"><?= $data['tgl_pphfinal'];?></td>
                                 <td class="center"><?= $data['sts_pph21'];?></td>
                                 <td class="center"><?= $data['sts_pph22'];?></td>
                                 <td class="center"><?= $data['sts_pph22dn'];?></td>
                                 <td class="center"><?= $data['sts_pph23'];?></td>
                                 <td class="center"><?= $data['sts_pph25'];?></td>
                                 <td class="center"><?= $data['sts_pphfinal'];?></td>
                                 <td class="center"><?= $data['lapor_realisasi_pph21'];?></td>
                                 <td class="center"><?= $data['lapor_realisasi_pp23'];?></td>
                                 <td class="center"><?= number_format($data['realisasi_pph21_apr']) ;?></td>
                                 <td class="center"><?= number_format($data['realisasi_pph21_mei']) ;?></td>
                                 <td class="center"><?= number_format($data['realisasi_pph21_jun']) ;?></td>
                                 <td class="center"><?= number_format($data['realisasi_pph21_jul']) ;?></td>
                                 <td class="center"></td>
                                 <td class="center"><?= number_format($data['realisasi_pp23_apr']) ;?></td>
                                 <td class="center"><?= number_format($data['realisasi_pp23_mei']) ;?></td>
                                 <td class="center"><?= number_format($data['realisasi_pp23_jun']) ;?></td>
                                 <td class="center"><?= number_format($data['realisasi_pp23_jul']) ;?></td>
                                 <td class="center"></td>
                              </tr>
                              <?php } ?>
                           </tbody>
                        </table>
                  </div>
                  <!-- Summary selesai -->
                  
                  <!-- PPh 21 -->
                  <div class="tab-pane" id="pph21">
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
                                       echo '<span class="label-danger label label-default">ditolak</span>';
                                       } ?>
                                 </td>
                              </tr>
                              <?php } ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <!-- PPh 21 selesai -->

                  <!-- PPh 22 -->
                  <div class="tab-pane" id="pph22">
                     <div class="box-content">
                        <div class="alert alert-info">Update data per: <span class="label-warning label label-default"> 
                           <?php
                              $query = mysqli_query($conn1, "SELECT MAX(tgl_surat) AS tgl_terakhir FROM insentif_covid_pph22");
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
                                 $query = mysqli_query($conn1, "SELECT * FROM insentif_covid_pph22 ORDER BY tgl_surat");
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
                                    <?php if ($data['ket_pemberitahuan'] == "SKB PPh 22 Impor disetujui by KLU") {
                                       echo '<span class="label-success label label-default">disetujui</span>';
                                       } else {
                                       echo '<span class="label-danger label label-default">ditolak</span>';
                                       } ?>
                                 </td>
                              </tr>
                              <?php } ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <!-- PPh 22 selesai -->

                  <!-- PPh 23 -->
                  <div class="tab-pane" id="pph23">
                     <div class="box-content">
                        <div class="alert alert-info">Update data per: <span class="label-warning label label-default"> 
                           <?php
                              $query = mysqli_query($conn1, "SELECT MAX(tgl_surat) AS tgl_terakhir FROM insentif_covid_pph23");
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
                                 <th>Seksi</th>
                                 <th>KLU</th>
                                 <th>Status</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                                 $no = 1;
                                 $query = mysqli_query($conn1, "SELECT * FROM insentif_covid_pph23 ORDER BY tgl_surat");
                                 while($data = mysqli_fetch_array($query)) {
                                 ?>
                              <tr>
                                 <td><?= $no++ ?></td>
                                 <td class="center"><?= $data['tgl_surat'] . " | " . $data['no_surat'];?></td>
                                 <td class="center"><?= $data['npwp'];?></td>
                                 <td class="center"><?= $data['nama_wp'];?></td>
                                 <td class="center"><?= $data['seksi']?></td>
                                 <td class="center"><?= $data['klu'];?></td>
                                 <td class="center">
                                    <?php if ($data['ket_pemberitahuan'] == "SKB PPh 23 disetujui") {
                                       echo '<span class="label-success label label-default">disetujui</span>';
                                       } else {
                                       echo '<span class="label-danger label label-default">ditolak</span>';
                                       } ?>
                                 </td>
                              </tr>
                              <?php } ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <!-- PPh 23 selesai -->

                  <!-- PPh 25 -->
                  <div class="tab-pane" id="pph25">
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
                                 <th>Seksi</th>
                                 <th>KLU</th>
                                 <th>Status</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                                 $no = 1;
                                 $query = mysqli_query($conn1, "SELECT * FROM insentif_covid_pph25 ORDER BY tgl_surat");
                                 while($data = mysqli_fetch_array($query)) {
                                 ?>
                              <tr>
                                 <td><?= $no++ ?></td>
                                 <td class="center"><?= $data['tgl_surat'] . " | " . $data['no_surat'];?></td>
                                 <td class="center"><?= $data['npwp'];?></td>
                                 <td class="center"><?= $data['nama_wp'];?></td>
                                 <td class="center"><?= $data['seksi'];?></td>
                                 <td class="center"><?= $data['klu'];?></td>
                                 <td class="center">
                                    <?php if ($data['ket_pemberitahuan'] == "Pengurangan PPh 25 disetujui") {
                                       echo '<span class="label-success label label-default">disetujui</span>';
                                       } else {
                                       echo '<span class="label-danger label label-default">ditolak</span>';
                                       } ?>
                                 </td>
                              </tr>
                              <?php } ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <!-- PPh 25 selesai -->

                  <!-- PP 23 -->
                  <div class="tab-pane" id="pp23">
                     <div class="box-content">
                        <div class="alert alert-info">Update data per: <span class="label-warning label label-default"> 
                           </span>
                        </div>
                        <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                           <thead>
                              <tr>
                                 <th>No</th>
                                 <th>NPWP | Nama WP</th>
                                 <th>Masa</th>
                                 <th>KLU</th>
                                 <th>Nilai</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                                 $no = 1;
                                 $query = mysqli_query($conn1, "SELECT * FROM insentif_covid_pp23_realisasi ORDER BY nama_wp, masa_pajak");
                                 while($data = mysqli_fetch_array($query)) {
                                 ?>
                              <tr>
                                 <td><?= $no++ ?></td>
                                 <td class="center"><?= $data['npwp'] . " | " . $data['nama_wp'];?></td>
                                 <td class="center"><?= $data['masa_pajak'];?></td>
                                 <td class="center"><?= $data['klu'];?></td>
                                 <td class="center" style="text-align: right"><?= number_format($data['nilai_real']) ;?></td>
                                 </td>
                              </tr>
                              <?php } ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <!-- PP 23 selesai -->

                  <div class="tab-pane" id="messages">
                     <h3>Messages
                        <small>small text</small>
                     </h3>
                     <p>Sample paragraph.</p>
                     <p>Your custom text.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--/span-->
   <!-- content ends -->
</div>
<!--/#content.col-md-0-->
</div><!--/fluid-row-->
<hr>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <h3>Settings</h3>
         </div>
         <div class="modal-body">
            <p>Here settings can be configured...</p>
         </div>
         <div class="modal-footer">
            <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
            <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
         </div>
      </div>
   </div>
</div>
<?php
   include "_footer.php";
   ?>