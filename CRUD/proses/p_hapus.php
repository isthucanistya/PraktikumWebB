<?php 
	include '../koneksi.php';
	$nim = $_GET['nim'];
	mysqli_query($koneksi, "DELETE FROM biodata WHERE nim='$nim'")or die(mysqli_error());
	echo'<script language = "javascript">alert("Berhasil Menghapus Data!"); document.location="../index.php";</script>';
?>