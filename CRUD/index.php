<?php
	include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD-1708561041</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="body">
		<center><h2>DATA BIODATA</h2></center><br>
		<label><a href="form_insert.php" class="tambah">Tambah Biodata+</a></label>
		<center>
			<table border="1" class="table">
				<tr>
					<th>No</th>
					<th>NIM</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Opsi</th>		
				</tr>
				<?php 
					$tampil = mysqli_query($koneksi, "SELECT * FROM biodata")or die(mysqli_error());
					$nomor = 1;
					while($data = mysqli_fetch_array($tampil)){
					?>
					<tr>
						<td><?php echo $nomor++; ?></td>
						<td><?php echo $data['nim']; ?></td>
						<td><?php echo $data['nama']; ?></td>
						<td><?php echo $data['alamat']; ?></td>
						<td>
							<a class="edit" href="form_edit.php?nim=<?php echo $data['nim']; ?>">Edit</a> |
							<a class="hapus" href="proses/p_hapus.php?nim=<?php echo $data['nim']; ?>" onclick="return confirm('Anda yakin mau menghapus data ?')">Delete</a>
						</td>
					</tr>
				<?php } ?>
			</table>
		</center>
	</div>
</body>
</html>