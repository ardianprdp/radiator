
    <?php include_once('_header.php') ?>
    <?php include_once('_sidebar.php') ?>

   <!-- Jumlah Pegawai 2020 -->
   <?php $sql = $conn1->query("SELECT nama FROM pegawai WHERE tahun = 2020");
      $jml_pegawai = $sql -> num_rows;
   ?>

   <!-- Jumlah AR 2020 -->
   <?php $sql = $conn1->query("SELECT nama FROM pegawai WHERE tahun = 2020 and jabatan = 5");
      $jml_ar = $sql -> num_rows;
   ?>

            <div id="content" class="col-lg-10 col-sm-10">
               <!-- content starts -->
               <div>
                  <ul class="breadcrumb">
                     <li>
                        <a href="#">Home</a>
                     </li>
                     <li>
                        <a href="#">Dashboard</a>
                     </li>
                  </ul>
               </div>
               <div class=" row">
                  <div class="col-md-3 col-sm-3 col-xs-6">
                     <a data-toggle="tooltip" title="? pegawai aktif" class="well top-block" href="#">
                        <i class="glyphicon glyphicon-user blue"></i>
                        <div>Jumlah Pegawai</div>
                        <div><?= $jml_pegawai ?></div>
                        <span class="notification">?</span>
                     </a>
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-6">
                     <a data-toggle="tooltip" title="4 ar aktif" class="well top-block" href="#">
                        <i class="glyphicon glyphicon-star green"></i>
                        <div>Jumlah AR</div>
                        <div><?= $jml_ar ?></div>
                        <span class="notification green">4</span>
                     </a>
                  </div>

               </div>
               <div class="row">
                  <div class="box col-md-12">
                     <div class="box-inner">
                        <div class="box-header well">
                           <h2><i class="glyphicon glyphicon-info-sign"></i> Pengumuman</h2>
                           <div class="box-icon">
                              <a href="#" class="btn btn-setting btn-round btn-default"><i
                                 class="glyphicon glyphicon-cog"></i></a>
                              <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                 class="glyphicon glyphicon-chevron-up"></i></a>
                              <a href="#" class="btn btn-close btn-round btn-default"><i
                                 class="glyphicon glyphicon-remove"></i></a>
                           </div>
                        </div>
                        <div class="box-content row">
                           <div class="col-lg-9 col-md-12">
                              <h1>Selamat datang di Portal Data, <br>
                                 <small>berisi kumpulan data perpajakan hasil pengolahan atau masih mentah.</small>
                              </h1>
                              <!-- <p>It's a live demo of the template. I have created Charisma to ease the repeat work I have to do on my
                                 projects. Now I re-use Charisma as a base for my admin panel work and I am sharing it with you
                                 :)
                              </p>
                              <p><b>All pages in the menu are functional, take a look at all, please share this with your
                                 followers.</b>
                              </p> -->

                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- content ends -->
            </div>
            <!--/#content.col-md-0-->
         </div>
         <!--/fluid-row-->

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
         
    <?php include_once('_footer.php') ?>