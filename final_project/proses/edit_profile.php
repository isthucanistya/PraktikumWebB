<?php
include('../koneksi.php');
include('../function.php');
$conn = new Koneksi();
$dat = new Data($conn);

$id_user = $_POST['id_user'];
$nama = $_POST['nama'];
$alamat= $_POST['alamat'];
$tlp = $_POST['no_tlp'];
$username = $_POST['username'];
$pass = $_POST['password'];
$id_akses = $_POST['id_akses'];

$tampil = $dat->p_edit_profile($id_user, $nama, $alamat, $tlp, $username, $pass, $id_akses);
echo "berhasil";

// if (isset($_POST['submit'])) {
// 	;

// }
// 	if ($tampil) {
// 	echo "ok";
// 	// echo'<script language = "javascript">alert("Berhasil Men-Daftar!"); document.location="../index.php";</script>';
// }
?>