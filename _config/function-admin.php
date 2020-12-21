<?php
// koneksi dikantor
// $conn1 = mysqli_connect('10.3.10.227', 'user', 'view', 'mpninfo_v09');
// $conn2 = mysqli_connect('10.3.10.220', 'root', '', 'db304');

// koneksi dilaptop
$conn1 = mysqli_connect('localhost', 'root', '', 'mpninfo_v09');
$conn2 = mysqli_connect('localhost', 'root', '', 'db304');

// ----------------------------------------------------------------------------------------------------

// tampil tabel IP Address pegawai
function tabel_ip()
{
    global $conn2;
    $no     = 1;
    $sql    =   "SELECT a.nip,
                    a.nama,
                    b.ip,
                    b.hostname 
                FROM
                    pegawai a
                LEFT JOIN ipaddress b
                    ON a.nip = b.nip
                WHERE
                    tahun = 2020
                    ORDER BY a.seksi, a.jabatan, a.nip";
    $query  =   mysqli_query($conn2, $sql);
    
    while ($ip = mysqli_fetch_assoc($query)) {

        echo '<tr>
                <td>' . $no++ . '</td>
                <td><a href="admin.php?ip=' . $ip['nip'] . '&nama=' . $ip['nama'] . '"</a>' . $ip['nama'] . '</td>
                <td>' . $ip['ip'] . '</td>
                <td>' . $ip['hostname'] . '</td>
              </tr>
        ';
    }
}

function update_ip($nip, $nama)
{
    global $conn2;
    $query = mysqli_query($conn2, "SELECT a.nip,
                                        a.nama,
                                        a.seksi,
                                        b.ip,
                                        b.hostname 
                                    FROM
                                        pegawai a
                                    LEFT JOIN ipaddress b
                                        ON a.nip = b.nip
                                    WHERE
                                        a.tahun = 2020 
                                        AND a.nip = '$nip'");

    if ($user = mysqli_fetch_assoc($query)) {
        echo '
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-warning card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Update IP Address Pegawai</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">User</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" value="'. $nip .'">
                                </div>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" value="'. $nama .'">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">IP Address</label>
                                <div class="col-sm-3">
                                <input type="text" class="form-control" value="'. $user['ip'] .'">
                                </div>
                                <label class="col-sm-2 col-form-label" style="text-align: right">Hostname</label>
                                <div class="col-sm-5">
                                    <input type="email" class="form-control" value="'. $user['hostname'] .'">
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-danger float-right">Simpan</button>
                        </div>
                        <!-- /.card-footer -->
                        </form>
                    </div>
                </div>
            </div>
            ';
    }
}
