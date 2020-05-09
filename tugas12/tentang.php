<?php
	include("koneksi.php");
	include("akses.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan Universitas Udayana</title>
	<?php
		if($_SESSION['akses'] == 'admin'){
			?><link rel="stylesheet" type="text/css" href="style/style1.css"><?php
		}elseif ($_SESSION['akses'] == 'pengguna') {
			?><link rel="stylesheet" type="text/css" href="style/style.css"><?php
		}
	?>
</head>
<body>
	<center>
	<div class="body">
		<div class="header">
			<img src="image/logoUnud.png" width="205px">
			<h2>Perpustakaan Universitas Udayana</h2>
		</div>
		<div class="menu">
			<?php
				include("menu.php");
			?>
		</div>
		<div class="c_tentang">
			<p>Perpustakaan Universitas Udayana ini merupakan Perpustakaan Online yang tentunya siap melayani. Sistem layanan yang digunakan di perpustakaan adalah sistem layanan terbuka (open access), dimana pengunjung dapat langsung memanfaatkan koleksi dan meminjamnya. Sistem ini diterapkan pada koleksi buku teks, sedangkan koleksi lainya seperti majalah,referensi, skripsi, tesis, disertasi dan lapen tidak dapat dipinjamkan.</p>
		</div>
		<div class="footer">
			<p>&copy; Copyright 2020. All Rights Reserved</p>
			<p>Program Studi Informatika, Universitas Udayana</p>
		</div>
	</div>
	</center>
</body>
</html>