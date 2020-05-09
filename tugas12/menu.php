<ul>
	<?php
		if($_SESSION['akses'] == 'admin'){
			?> 
				<li><a href="index.php">Home</a></li>
				<li><a href="tentang.php">Tentang</a></li>
				<li><a href="galeri.php">Galeri Buku</a></li>
				<li><a href="kontak.php">Kontak</a></li>
				<li><a href="logout.php" onclick="return confirm('Yakin Keluar?')">Logout</a></li>

				<li style="float: right;"><a href="#"><?php echo $user."(".$akses.")";?></a></li>
			<?php
		}elseif ($_SESSION['akses'] == 'pengguna') {
			?>
				<li><a href="index.php">Home</a></li>
				<li><a href="tentang.php">Tentang</a></li>
				<li><a href="galeri.php">Galeri Buku</a></li>
				<li><a href="kontak.php">Kontak</a></li>
				<li><a href="logout.php" onclick="return confirm('Yakin Keluar?')">Logout</a></li>

				<li style="float: right;"><a href="#"><?php echo $user."(".$akses.")";?></a></li>
			<?php
		}
	?>
</ul>