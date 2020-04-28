<?php
include ('../koneksi.php');
    if(isset($_POST['submit'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];

        // Insert user data into table
        $input = mysqli_query($koneksi, "INSERT INTO biodata VALUES('$nim','$nama','$alamat')") or die($koneksi->error);
        if ($input) {
           echo'<script language = "javascript">alert("Berhasil Menambahkan Data!"); document.location="../form_insert.php";</script>';
        }
    }
?>