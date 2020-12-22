<?php
  include_once "_config/koneksi.php";
  // inputLog($_SESSION['nip'], $_SESSION['nama'], $_SESSION['seksi'], "OPEN", "BUKA MODUL PENGAWASAN", $_SERVER["REMOTE_ADDR"]);
  
  $sql  = "select 
            q.jns_wp,
            count(q.npwp) as terdaftar,
            count(case when q.status_wp = 'Aktif' then q.status_wp else null end) as aktif,
            count(case when q.status_cabang = 'Pusat' then q.status_cabang else null end) as pusat,
            count(case when q.status_cabang = 'Cabang' then q.status_cabang else null end) as cabang,
            count(q.status_ta) as ta,
            sum(q.spt_nihil_2018) as 18_nihil,
            sum(q.spt_kb_2018) as 18_kb,
            sum(q.spt_lb_2018) as 18_lb,
            sum(q.spt_nihil_2019) as 19_nihil,
            sum(q.spt_kb_2019) as 19_kb,
            sum(q.spt_lb_2019) as 19_lb,
            count(q.mpn18) as mpn18,
            count(q.mpn19) as mpn19,
            count(q.mpn20) as mpn20
          from (select
              a.npwp,
              a.nama_wp,
              a.status_wp,
              case when right(a.npwp, 1) = 0 then 'Pusat' else 'Cabang' end as status_cabang,
              e.jenis as 'jns_wp',
              a.tgl_daftar,
              a.nip_ar,
              a.nama_ar,
              a.seksi,
              b.status as status_ta,
              c.spt_nihil_2018,
              c.spt_kb_2018,
              c.spt_lb_2018,
              c.spt_nihil_2019,
              c.spt_kb_2019,
              c.spt_lb_2019,
              d.mpn18,
              d.mpn19,
              d.mpn20
            from
              masterfile_sidjp a
            left join wpta b 
              on a.npwp = b.npwp
            left join ( 
                select
                  concat(npwp, kpp, cabang) as npwp,
                  count(case when status = 'Nihil' and tahun = 2018 then nomor else null end) as spt_nihil_2018,
                  count(case when status = 'Kurang Bayar' and tahun = 2018 then nomor else null end) as spt_kb_2018,
                  count(case when status = 'Lebih Bayar' and tahun = 2018 then nomor else null end) as spt_lb_2018,
                  count(case when status = 'Nihil' and tahun = 2019 then nomor else null end) as spt_nihil_2019,
                  count(case when status = 'Kurang Bayar' and tahun = 2019 then nomor else null end) as spt_kb_2019,
                  count(case when status = 'Lebih Bayar' and tahun = 2019 then nomor else null end) as spt_lb_2019
                from
                  masterspt m
                where
                  jenis in ('SPT Tahunan PPh Orang Pribadi',
                  'SPT Tahunan PPh Badan')
                  and pembetulan = 0
                group by
                  npwp ) c
              on a.npwp = c.npwp
            left join ( 
                select
                  concat(npwp, kpp, cabang) as npwp,
                  sum(case when tahunbayar = 2018 then nominal else null end) as mpn18,
                  sum(case when tahunbayar = 2019 then nominal else null end) as mpn19,
                  sum(case when tahunbayar = 2020 then nominal else null end) as mpn20
                from
                  mpn
                where 
                  tahunbayar in (2018, 2019, 2020)
                group by
                  npwp ) d
              on a.npwp = d.npwp
            left join ( 
                select
                  distinct concat(npwp, kpp, cabang) as npwp,
                  case when klu in ('96301', '96302', '96303', '96304', '96305') then 'OP Karyawan'
                    else jenis end as jenis
                from
                  masterfile ) e
              on a.npwp = e.npwp) q
            where 
              q.nip_ar = 060091209
            group by 
              q.jns_wp ";
  $query = mysqli_query($conn1, $sql);
  $data  = mysqli_fetch_assoc($query);

  echo '<pre>';
  print_r($data); 
  echo '</pre>';

  die;

  ?>