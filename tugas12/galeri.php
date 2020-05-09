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
	<div class="body_gal">
		<div class="header">
			<img src="image/logoUnud.png" width="205px">
			<h2>Perpustakaan Universitas Udayana</h2>
		</div>
		<div class="menu">
			<?php
				include("menu.php");
			?>
		</div>
		<div class="c_galeri">
			<div class="g_left">
				<h3>Kategori</h3>
				<ul>
					<li><a href="#">Buku Text</a></li>
					<li><a href="#">Majalah</a></li>
					<li><a href="#">Skripsi</a></li>
					<li><a href="#">Tesis</a></li>
				</ul>
				<br><br>
				<h3>Artikel Populer</h3>
				<ul>
					<li><a href="#">Desain WEB</a></li>
					<li><a href="#">HTML</a></li>
					<li><a href="#">CSS</a></li>
					<li><a href="#">Lain-lain</a></li>
				</ul>
			</div>
				
			<div class="g_right">
				<div class="search">
					<form action="" method="POST">
						<select name="pilihan" class="select">
							<option value="">Select Filter</option>
							<option value="no_isbn">No ISBN</option>
							<option value="nama">Judul</option>
							<option value="penerbit">Penerbit</option>
							<option value="stok">Stok</option>
	                    </select>
						<input type="text" placeholder="Search.." name="cari">
						<button type="submit" name="submit" value="cari" id="cari">Cari</button>
						<br><br>
						<table width="650px" cellpadding="0">
							<tr>
				                <th>No.</th>
				                <th>NO ISBN<br>
				                	<button type="submit" value="ASC" name="no_isbn">ASC</button>
				                	<button type="submit" value="DESC" name="no_isbn">DESC</button>
				                	<!-- <input type="submit" class="button" value="ASC" name="no_isbn">
				                	<input type="submit" class="button" value="DESC" name="no_isbn"> -->
				                </th>
				                <th>Judul Buku <br>
				                	<button type="submit" value="ASC" name="nama">ASC</button>
				                	<button type="submit" value="DESC" name="nama">DESC</button>
				                	<!-- <input type="submit" class="button" value="ASC" name="nama">
				                	<input type="submit" class="button" value="DESC" name="nama"> -->
				                </th>
				                <th>Penerbit Buku <br>
				                	<button type="submit" value="ASC" name="penerbit">ASC</button>
				                	<button type="submit" value="DESC" name="penerbit">DESC</button>

				                	<!-- <input type="submit" class="button" value="ASC" name="penerbit">
				                	<input type="submit" class="button" value="DESC" name="penerbit"> -->
				                </th>
				                <th>Stok<br>
				                	<button type="submit" value="ASC" name="stok">ASC</button>
				                	<button type="submit" value="DESC" name="stok">DESC</button>
				                	<!-- <input type="submit" class="button" value="ASC" name="stok">
				                	<input type="submit" class="button" value="DESC" name="stok"> -->
				                </th>
				            </tr>

				             <?php
					          $no = 1;
					          $sort = "";
					          if(empty($sort))
					          {
					               $tampil = $dat->tampil();
					          }
					          if (isset($_POST["no_isbn"]))
					          {
					              $sort =  $_POST["no_isbn"]; 
					              $tampil = $dat->tampil_urutan($sort,"no_isbn");  
					          }
					          if (isset($_POST["nama"]))
					          {
					              $sort =  $_POST["nama"]; 
					              $tampil = $dat->tampil_urutan($sort,"nama");  
					          }
					          if (isset($_POST["penerbit"]))
					          {
					              $sort =  $_POST["penerbit"]; 
					              $tampil = $dat->tampil_urutan($sort,"penerbit"); 
					          }
					          if (isset($_POST["stok"]))
					          {
					              $sort =  $_POST["stok"]; 
					              $tampil = $dat->tampil_urutan($sort,"stok");    
					          }
					          if(isset($_POST['submit']))
					          {
					              $cari = $_POST['cari'];
					              $column =  $_POST['pilihan'];
					              if($cari!="" AND $column!="")
					              {
					                  $tampil = $dat->tampil_saring($cari,$column);
					              }  
					          }
					          while($data = $tampil->fetch_object())
					          {
					            ?>
					            <tr>
					              <th><?php echo $no++ ?></th>
					              <td><?php echo $data->no_isbn; ?></td>
					              <td><?php echo $data->nama; ?></td>
					              <td><?php echo $data->penerbit; ?></td>
					              <td><?php echo $data->stok; ?></td>
					            </tr>
					          <?php
					          }
					        ?>
						</table>
					</form>
				</div>
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