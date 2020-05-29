<ul>
	<?php

		if($_SESSION['akses'] == NULL){
			?>
				<li><a href="index.php?halaman=home">Home</a></li>
				<li><a href="index.php?halaman=tentang">Tentang</a></li>
				<li><a href="index.php?halaman=galeri">Galeri Buku</a></li>
				<li><a href="index.php?halaman=kontak">Kontak</a></li>
				<li><a href="login.php">Login</a></li>
			<?php
		}elseif($_SESSION['akses'] == 'admin'){
			?> 
				<li><a href="index.php?halaman=home">Home</a></li>
				<li><a href="index.php?halaman=tentang">Tentang</a></li>
				<li><a href="index.php?halaman=galeri">Galeri Buku</a></li>
				<li><a href="index.php?halaman=peminjaman">Peminjaman Buku</a></li>
				<li><a href="index.php?halaman=kontak">Kontak</a></li>
				<div class="dropdown">
					<button class="dropbtn"><?php echo $user."(".$akses.")";?>&#9660;
				    </button>
				    <div class="dropdown-content">
				      <a href="index.php?halaman=profile">Edit Profile</a>
				      <a href="proses/logout.php" onclick="return confirm('Yakin Keluar?')">Logout</a>
				    </div>
				</div>
				
			<?php
		}elseif($_SESSION['akses'] == 'superadmin'){
			?> 
				<li><a href="index.php?halaman=home">Home</a></li>
				<li><a href="index.php?halaman=tentang">Tentang</a></li>
				<li><a href="index.php?halaman=galeri">Galeri Buku</a></li>
				<li><a href="index.php?halaman=peminjaman">Peminjaman Buku</a></li>
				<li><a href="index.php?halaman=kontak">Kontak</a></li>
				<div class="dropdown">
					<button class="dropbtn"><?php echo $user."(".$akses.")";?>&#9660;
				    </button>
				    <div class="dropdown-content">
				      <a href="index.php?halaman=profile">Edit Profile</a>
				      <a href="proses/logout.php" onclick="return confirm('Yakin Keluar?')">Logout</a>
				    </div>
				</div>
			<?php
		}elseif ($_SESSION['akses'] == 'user') {
			?>
				<li><a href="index.php?halaman=home">Home</a></li>
				<li><a href="index.php?halaman=tentang">Tentang</a></li>
				<li><a href="index.php?halaman=galeri">Galeri Buku</a></li>
				<li><a href="index.php?halaman=peminjaman">Peminjaman Buku</a></li>
				<li><a href="index.php?halaman=kontak">Kontak</a></li>
				<div class="dropdown">
					<button class="dropbtn"><?php echo $user."(".$akses.")";?>&#9660;
				    </button>
				    <div class="dropdown-content">
				      <a href="index.php?halaman=profile">Edit Profile</a>
				      <a href="proses/logout.php" onclick="return confirm('Yakin Keluar?')">Logout</a>
				    </div>
				</div>
			<?php
		}
	?>
</ul>