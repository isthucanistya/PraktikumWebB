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
					<option value="id_buku">ID Buku</option>
					<option value="isbn">No ISBN</option>
					<option value="judul_buku">Judul</option>
					<option value="kategori">Kategori</option>
					<option value="nama_penerbit">Penerbit</option>
					<option value="stok_buku">Stok</option>
                </select>
				<input type="text" placeholder="Search.." name="cari">
				<button type="submit" name="submit" value="cari" id="cari">Cari</button>
				<br><br>
				<?php
					if ($akses=='admin') {
						?>
							<div class="tambah">
								<a href="index.php?halaman=tambah_buku" style="color: white;">
									<label style="background: #2e6fa7;padding: 6px;">Tambah Data Buku</label>
								</a>
						</div>

						<?php
					}

				?>
				
				<table width="850px" cellpadding="0" class="tbl_galeri">
					<tr class="tbl_galeri">
		                <th class="tbl_galeri">No.</th>
		                <th>ID Buku<br>
		                	<button type="submit" value="ASC" name="id_buku">ASC</button>
		                	<button type="submit" value="DESC" name="id_buku">DESC</button>
		                	
		                </th>
		                <th>NO ISBN<br>
		                	<button type="submit" value="ASC" name="isbn">ASC</button>
		                	<button type="submit" value="DESC" name="isbn">DESC</button>
		                	
		                </th>
		                <th>Judul Buku <br>
		                	<button type="submit" value="ASC" name="nama">ASC</button>
		                	<button type="submit" value="DESC" name="nama">DESC</button>
		                	
		                </th>
		                <th>Kategori Buku <br>
		                	<button type="submit" value="ASC" name="kategori">ASC</button>
		                	<button type="submit" value="DESC" name="kategori">DESC</button>

		                </th>
		                <th>Penerbit Buku <br>
		                	<button type="submit" value="ASC" name="penerbit">ASC</button>
		                	<button type="submit" value="DESC" name="penerbit">DESC</button>

		                </th>
		                <th>Stok<br>
		                	<button type="submit" value="ASC" name="stok_buku">ASC</button>
		                	<button type="submit" value="DESC" name="stok_buku">DESC</button>
		                </th>
		                <th>Detail</th>
		            </tr>

		             <?php
			          $no = 1;
			          $sort = "";
			          if(empty($sort))
			          {
			               $tampil = $dat->tampil();
			          }
			          if (isset($_POST["id_buku"]))
			          {
			              $sort =  $_POST["id_buku"];
			              $tampil = $dat->tampil_urutan($sort,"id_buku");  
			          }
			          if (isset($_POST["isbn"]))
			          {
			              $sort =  $_POST["isbn"]; 
			              $tampil = $dat->tampil_urutan($sort,"isbn");  
			          }
			          if (isset($_POST["judul_buku"]))
			          {
			              $sort =  $_POST["judul_buku"]; 
			              $tampil = $dat->tampil_urutan($sort,"judul_buku");  
			          }
			          if (isset($_POST["kategori"]))
			          {
			              $sort =  $_POST["kategori"]; 
			              $tampil = $dat->tampil_urutan($sort,"kategori"); 
			          }
			          if (isset($_POST["penerbit"]))
			          {
			              $sort =  $_POST["penerbit"]; 
			              $tampil = $dat->tampil_urutan($sort,"nama_penerbit"); 
			          }
			          if (isset($_POST["stok_buku"]))
			          {
			              $sort =  $_POST["stok_buku"]; 
			              $tampil = $dat->tampil_urutan($sort,"stok_buku");    
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
			            <tr class="tbl_galeri">
							<th><?php echo $no++ ?></th>
							<td class="tbl_galeri"><?php echo $data->id_buku; ?></td>
							<td class="tbl_galeri"><?php echo $data->isbn; ?></td>
							<td class="tbl_galeri"><?php echo $data->judul_buku; ?></td>
							<td class="tbl_galeri"><?php echo $data->kategori; ?></td>
							<td class="tbl_galeri"><?php echo $data->nama_penerbit; ?></td>
							<td class="tbl_galeri"><?php echo $data->stok_buku; ?></td>
							<td class="tbl_galeri">
				            <a id="popup" href="<?php echo $data->id_buku?>">Lihat</a>
				                <div class="popup" data-id="<?php echo $data->id_buku ?>">
				             		<?php
				             			$id=$data->id_buku;
				             			$t_detail = $dat->detail_buku($id);
				             			
				             		?>   	
				                    <div class="window">
				                    <a href="#" class="close-button" title="Close" style="color: white">X</a>
				                    <br>
				                    <div class="isi_des">
				                    	<center>
				                    	<h3 class="jdl_detail">Detail Buku</h3><br>
				                     	<table class="tb_detail" border="0">
				                     		<?php
				                     		while($d_detail = $t_detail->fetch_object())
			          						{
			          						?>
				                     		<tr>
				                     			<td>ID Buku</td>
				                     			<td>:</td>
				                     			<td><?php echo $d_detail->id; ?></td>
				                     		</tr>
				                     		<tr>
				                     			<td>No ISBN</td>
				                     			<td>:</td>
				                     			<td><?php echo $d_detail->isbn; ?></td>
				                     		</tr>
				                     		<tr>
				                     			<td>Judul Buku</td>
				                     			<td>:</td>
				                     			<td><?php echo $d_detail->judul_buku; ?></td>
				                     		</tr>
				                     		<tr>
				                     			<td>Tahun Buku</td>
				                     			<td>:</td>
				                     			<td><?php echo $d_detail->tahun_buku; ?></td>
				                     		</tr>
				                     		<tr>
				                     			<td>Kategori</td>
				                     			<td>:</td>
				                     			<td><?php echo $d_detail->kategori; ?></td>
				                     		</tr>
				                     		<tr>
				                     			<td>ID Rak</td>
				                     			<td>:</td>
				                     			<td><?php echo $d_detail->id_rak; ?></td>
				                     		</tr>
				                     		<tr>
				                     			<td>Nama Rak</td>
				                     			<td>:</td>
				                     			<td><?php echo $d_detail->nama_rak; ?></td>
				                     		</tr>
				                     		<tr>
				                     			<td>Penerbit</td>
				                     			<td>:</td>
				                     			<td><?php echo $d_detail->penerbit; ?></td>
				                     		</tr>
				                     		<tr>
				                     			<td>Stok Buku</td>
				                     			<td>:</td>
				                     			<td><?php echo $d_detail->stok_buku; ?></td>
				                     		</tr>

				                     	</table>
				                     	</center>
					                     	<?php
					                    	}
					                    ?>
				                    </div>
				                    </div>
				                    
				                </div>
				            </td>
			            </tr>
			          <?php
			          }
			        ?>
				</table>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
 $(document).ready(function(){
    $('a#popup').click(function(){
      var id = $(this).attr('href');
      $('.popup[data-id="'+id+'"').css({'visibility' : 'visible'});
      return false;
    })

    $('.close-button').click(function(){
      $('.popup').css({'visibility' : 'hidden'});
    })
 });
</script>