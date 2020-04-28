<?php
	include('koneksi.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD-1708561041</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="form">
		<h1>Edit Biodata</h1>
		<?php
			$nim = $_GET['nim'];
			$query = mysqli_query($koneksi,"select * from biodata where nim='$nim'") or die(mysqli_error());
			$nomor = 1;
			while($data = mysqli_fetch_array($query)){
		?> 
		<form action="proses/p_edit.php" method="POST">
			<center>
				<table>
					<tr>
						<td>NIM</td>
						<td>:</td>
						<td><input type="text" name="nim" required="required" value="<?php echo $data['nim']; ?>"></td>
					</tr>
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td><input type="text" name="nama" required="required" value="<?php echo $data['nama']; ?>"></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td><textarea name="alamat" required="required" class="alamat"><?php echo $data['alamat']; ?></textarea></td>
					</tr>
				</table>
			</center>
			<button type="submit" value="submit" name="update" class="button">UPDATE</button>
			<a href="index.php"><button type="button" value="kembali" class="button">BATAL</button></a>
		</form>
		<?php
			}
		?>
	</div>
</body>
</html>