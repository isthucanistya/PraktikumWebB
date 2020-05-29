<?php
    require_once('koneksi.php');
    require_once('function.php');
    include('akses.php');
    $conn = new Koneksi();
    $dat = new Data($conn);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan Universitas Udayana</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<script src="jquery.js"></script>
	<!-- <script src="style/jquery-3.5.0.min.js"></script>
	<script type="text/javascript" src="style/jquery-1.11.1.js"></script> -->
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
		
		<?php
			if (!isset($_REQUEST['halaman'])) {
				include "main/home.php";
			}
			if (isset($_REQUEST['halaman'])) {
				switch ($_REQUEST['halaman']) {
					case 'home':
						include "main/home.php" ;
					break;
					case 'tentang':
						include "main/tentang.php" ;
					break;
					case 'galeri':
			
						include "main/galeri.php" ;
					break;
					case 'kontak':
						include "main/kontak.php" ;
					break;
					case 'login':
						include "main/login.php" ;
					break;
					case 'profile':
						include "main/profile.php";
					break;
					case 'tambah_buku':
						include "main/tambah_buku.php";
					break;
					case 'peminjaman':
						include "main/peminjaman.php";
					break;
					case 'tambah_pinjam':
						include "main/tambah_peminjaman.php";
					break;
					// case 'proses_pinjam':
					// 	include "proses/edit_pinjam.php";
					// break;
				}
			}

		?>
		<div class="footer">
			<p>&copy; Copyright 2020. All Rights Reserved</p>
			<p>Program Studi Informatika, Universitas Udayana</p>
		</div>
	</div>
	</center>
	<script>
		function menu(){
			$.get( "home.php", function( data ) {
			  $( "#content" ).html( data );
			  alert( "Load was performed." );
			});
		}
	</script>
</body>
</html>