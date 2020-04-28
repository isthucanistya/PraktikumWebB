<?php
include('koneksi.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pagination-1708561041</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center>
		<h1>Data Buku</h1>
		<div class="isi">
			<?php
	  			$halaman = 5;
	 			$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
	  			$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
	 			$result = mysqli_query($koneksi,"SELECT * from buku");
	  			$total = mysqli_num_rows($result);
	  			$pages = ceil($total/$halaman);            
	  			$query = mysqli_query($koneksi,"SELECT * from buku LIMIT $mulai, $halaman")or die($koneksi->error);
	  			$no =$mulai+1;	
	  			while ($data = mysqli_fetch_assoc($query)) {
	   			 ?>
				<div class="main">
					<table>
						<tr>
							<td>No. ISBN</td>
							<td>:</td>
							<td><?php echo $data['no_isbn'];?></td>
						</tr>
						<tr>
							<td width="100px">Nama Buku</td>
							<td width="10">:</td>
							<td width="400px"><?php echo $data['nama'];?></td>
						</tr>
						<tr>
							<td>Harga</td>
							<td>:</td>
							<td><?php echo $data['harga'];?></td>
						</tr>
					</table>
				</div>
				<?php
				}
		  		?>
		</div>

		<br>

		<div class="tombol">
			<ul>
				<?php for ($i=1; $i<=$pages ; $i++){ 
				?>
					<li>
		  				<button>
		  					<a href="?halaman=<?php echo $i; ?>"><?php echo "Page $i" ?></a>
		  				</button>
			  		</li>
		  		
		  		<?php 
		  		} 
		  		?>	
	  		</ul>
		</div>
	</center>
</body>
</html>