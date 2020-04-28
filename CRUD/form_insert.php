<!DOCTYPE html>
<html>
<head>
	<title>CRUD-1708561041</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="form">
		<h1>Form Tambah Biodata</h1>
		<form action="proses/p_insert.php" method="POST">
			<center>
				<table width="300">
					<tr>
						<td>NIM</td>
						<td>:</td>
						<td><input type="text" name="nim" required="required"></td>
					</tr>
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td><input type="text" name="nama" required="required"></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td><textarea name="alamat" required="required" class="alamat"></textarea></td>
					</tr>
				</table>
			</center>
			<button type="submit" value="submit" name="submit" class="button">SUBMIT</button>
			<a href="index.php"><button type="button" value="kembali" class="button">BATAL</button></a>
		</form>
	</div>
</body>
</html>