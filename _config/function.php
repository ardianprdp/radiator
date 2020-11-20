<?php
    // koneksi
    $conn1 = mysqli_connect('localhost', 'root', '', 'mpninfo_v09');

    
    // fungsi base url
    function base_url($url = null) {
        $base_url = "http://10.3.10.22/radiator";
        if($url != null) {
            return $base_url."/".$url;
        } else {
            return $base_url;
        }
    }
    
    // Mendapatkan IP pengunjung menggunakan getenv()
    function get_client_ip() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'IP tidak dikenali';
        return $ipaddress;
    }

    // Menghitung seluruh pegawai
    function getAllPegawai() {
        global $conn1;
        $sql = mysqli_query($conn1, "SELECT nama as jml FROM pegawai WHERE tahun = 2020");
        return $sql -> num_rows;
    }


    function popup() {
        echo '
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>
        ';
    }
?>