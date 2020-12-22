  <?php
  include_once "_header.php";
  // inputLog($_SESSION['nip'], $_SESSION['nama'], $_SESSION['seksi'], "OPEN", "BUKA MODUL PENGAWASAN", $_SERVER["REMOTE_ADDR"]);
  
  // $sql  = "select 
  //           q.jns_wp,
  //           count(q.npwp) as terdaftar,
  //           count(case when q.status_wp = 'Aktif' then q.status_wp else null end) as aktif,
  //           count(case when q.status_cabang = 'Pusat' then q.status_cabang else null end) as pusat,
  //           count(case when q.status_cabang = 'Cabang' then q.status_cabang else null end) as cabang,
  //           count(q.status_ta) as ta,
  //           sum(q.spt_nihil_2018) as 18_nihil,
  //           sum(q.spt_kb_2018) as 18_kb,
  //           sum(q.spt_lb_2018) as 18_lb,
  //           sum(q.spt_nihil_2019) as 19_nihil,
  //           sum(q.spt_kb_2019) as 19_kb,
  //           sum(q.spt_lb_2019) as 19_lb,
  //           count(q.mpn18) as mpn18,
  //           count(q.mpn19) as mpn19,
  //           count(q.mpn20) as mpn20
  //         from (select
  //             a.npwp,
  //             a.nama_wp,
  //             a.status_wp,
  //             case when right(a.npwp, 1) = 0 then 'Pusat' else 'Cabang' end as status_cabang,
  //             e.jenis as 'jns_wp',
  //             a.tgl_daftar,
  //             a.nip_ar,
  //             a.nama_ar,
  //             a.seksi,
  //             b.status as status_ta,
  //             c.spt_nihil_2018,
  //             c.spt_kb_2018,
  //             c.spt_lb_2018,
  //             c.spt_nihil_2019,
  //             c.spt_kb_2019,
  //             c.spt_lb_2019,
  //             d.mpn18,
  //             d.mpn19,
  //             d.mpn20
  //           from
  //             masterfile_sidjp a
  //           left join wpta b 
  //             on a.npwp = b.npwp
  //           left join ( 
  //               select
  //                 concat(npwp, kpp, cabang) as npwp,
  //                 count(case when status = 'Nihil' and tahun = 2018 then nomor else null end) as spt_nihil_2018,
  //                 count(case when status = 'Kurang Bayar' and tahun = 2018 then nomor else null end) as spt_kb_2018,
  //                 count(case when status = 'Lebih Bayar' and tahun = 2018 then nomor else null end) as spt_lb_2018,
  //                 count(case when status = 'Nihil' and tahun = 2019 then nomor else null end) as spt_nihil_2019,
  //                 count(case when status = 'Kurang Bayar' and tahun = 2019 then nomor else null end) as spt_kb_2019,
  //                 count(case when status = 'Lebih Bayar' and tahun = 2019 then nomor else null end) as spt_lb_2019
  //               from
  //                 masterspt m
  //               where
  //                 jenis in ('SPT Tahunan PPh Orang Pribadi',
  //                 'SPT Tahunan PPh Badan')
  //                 and pembetulan = 0
  //               group by
  //                 npwp ) c
  //             on a.npwp = c.npwp
  //           left join ( 
  //               select
  //                 concat(npwp, kpp, cabang) as npwp,
  //                 sum(case when tahunbayar = 2018 then nominal else null end) as mpn18,
  //                 sum(case when tahunbayar = 2019 then nominal else null end) as mpn19,
  //                 sum(case when tahunbayar = 2020 then nominal else null end) as mpn20
  //               from
  //                 mpn
  //               where 
  //                 tahunbayar in (2018, 2019, 2020)
  //               group by
  //                 npwp ) d
  //             on a.npwp = d.npwp
  //           left join ( 
  //               select
  //                 distinct concat(npwp, kpp, cabang) as npwp,
  //                 case when klu in ('96301', '96302', '96303', '96304', '96305') then 'OP Karyawan'
  //                   else jenis end as jenis
  //               from
  //                 masterfile ) e
  //             on a.npwp = e.npwp) q
  //           where 
  //             q.nip_ar = 060091209
  //           group by 
  //             q.jns_wp ";
  // $query = mysqli_query($conn1, $sql);
  // $data  = mysqli_fetch_assoc($query);

  // echo '<pre>';
  // print_r($data); 
  // echo '</pre>';

  // die;

  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <i>
              <h1 class="m-0 text-dark"> Selamat datang, <?= $_SESSION['nama']; ?>
            </i></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">Infografis Wajib Pajak</h3>
                <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-download"></i>
                  </a>
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-bars"></i>
                  </a>
                </div>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle table-hover table-sm table-bordered">
                  <thead>
                    <tr>
                      <th rowspan="2" style="text-align: center;">No</th>
                      <th rowspan="2" style="text-align: center;">Jenis WP</th>
                      <th rowspan="2" style="text-align: center;">Terdaftar</th>
                      <th rowspan="2" style="text-align: center;">Aktif</th>
                      <th colspan="2" style="text-align: center;">Status Aktif</th>
                      <th rowspan="2" style="text-align: center;">Ikut TA</th>
                      <th colspan="3" style="text-align: center;">Lapor SPT 2018</th>
                      <th colspan="3" style="text-align: center;">Lapor SPT 2019</th>
                      <th rowspan="2" style="text-align: center;">Bayar 2019</th>
                      <th rowspan="2" style="text-align: center;">Bayar 2020</th>
                    </tr>
                    <tr>
                      <th style="text-align: center;">Pusat</th>
                      <th style="text-align: center;">Cabang</th>
                      <th style="text-align: center;">Nihil</th>
                      <th style="text-align: center;">KB</th>
                      <th style="text-align: center;">LB</th>
                      <th style="text-align: center;">Nihil</th>
                      <th style="text-align: center;">KB</th>
                      <th style="text-align: center;">LB</th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                    </tr>
                    <tr>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                    </tr>
                    <tr>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                    </tr>
                    <tr>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                    </tr>
                    <tr>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                      <td>#</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

          </div>
          <!-- /.card -->

        </div>
        <div class="row">
          <div class="col-lg-6">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>

                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p>

                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>

                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div><!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title m-0">Featured</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title m-0">Featured</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  <?php include "_footer.php" ?>