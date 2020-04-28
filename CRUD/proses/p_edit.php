<?php
include('../koneksi.php');

    if(isset($_POST['update'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];

        $update = mysqli_query($koneksi, "UPDATE biodata set nama='$nama', alamat='$alamat' WHERE nim='$nim'") or die($koneksi->error);
        if ($update) {
           echo'<script language = "javascript">alert("Berhasil Meng-Update Data!"); document.location="../index.php";</script>';
        }
    }

?>