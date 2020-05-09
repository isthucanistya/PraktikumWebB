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
		<div class="content">
			<div class="c_left">
				<h3>Artikel Populer</h3>
				<ul>
					<li><a href="#">Desain WEB</a></li>
					<li><a href="#">HTML</a></li>
					<li><a href="#">CSS</a></li>
					<li><a href="#">Lain-lain</a></li>
				</ul>
			</div>
			<div class="c_right">
				<p style="font-weight: bold; font-size: 17pt"><?php echo "Selamat datang,     ". $user."(".$akses.")";?></p>
				<p>Dalam Perpustakaan Online Berbasis WEB dibawah naungan Universitas Udayana. Perpustakaan yang mempunyai koleksi buku sebagian besar dalam bentuk format digital dan yang bisa diakses dengan komputer.</p>
				<p>Ayo, manfaatkan layanan ini untuk menambah ilmumu!</p>
			</div>
		</div>
		<div class="footer">
			<p>&copy; Copyright 2020. All Rights Reserved</p>
			<p>Program Studi Informatika, Universitas Udayana</p>
		</div>
	</div>
	</center>
</body>
</html>