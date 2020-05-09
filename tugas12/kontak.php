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
			<table width="500px">
				<tr>
					<td rowspan="5">
						<img src="image/me.png" width="140px">
					</td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:Putu Isthu Canistya Chandra</td>
				</tr>
				<tr>
					<td>Nim</td>
					<td>:1708561041</td>
				</tr>
				<tr>
					<td>Email</td>
					<td>:isthucanistya16@gmail.com</td>
				</tr>
				<tr>
					<td>Whatsapp</td>
					<td>:081338623910</td>
				</tr>
			</table>
		</div>
		<div class="footer">
			<p>&copy; Copyright 2020. All Rights Reserved</p>
			<p>Program Studi Informatika, Universitas Udayana</p>
		</div>
	</div>
	</center>
</body>
</html>