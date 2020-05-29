<div class="peminjaman">
	<?php
	if ($akses=='admin' || $akses=='superadmin') {
		$tampil = $dat->tampil_allpeminjaman();
	}elseif ($akses=='user') {
		$tampil = $dat->tampil_peminjaman($id);
	}
?>
	<br><h3 style="color: #2e6fa7;">Data Peminjaman</h3><br>
	<?php
		if ($akses=='user') {
			?>
				<a href="index.php?halaman=tambah_pinjam"><label style="background: #2e6fa7;color: white;padding: 8px;">Tambah Peminjaman Buku</label></a><br><br>
			<?php
		}
	?>
	<table border="1" class="tbl_peminjaman">
		<tr>
			<th>No.</th>
			<th>ID Peminjaman</th>
			<th>Nama Buku</th>
			<th>Tanggal Pinjam</th>
			<th>Tangal Kembali</th>
			<?php
				if ($akses=='admin') {
					?><th>Nama Peminjam</th><?php
				}
			?>
			<th>Status</th>
			<?php
				if ($akses=='admin') {
					?><th>Opsi</th><?php
				}
			?>
			
		</tr>
		<?php
		$no = 1;
		while($data = $tampil->fetch_object())
		{
		?>
			<tr>
				<th><?php echo $no++ ?></th>
				<td><?php echo $data->id_peminjaman ?></td>
				<td><?php echo $data->judul_buku; ?></td>
				<td><?php echo $data->tgl_pinjam; ?></td>
				<td><?php echo $data->tgl_kembali; ?></td>
				<?php
					if ($akses=='admin') {
						?><td><?php echo $data->nama; ?></td><?php
					}
				?>
				<td><?php echo $data->status; ?></td>
				<?php
					if ($akses=='admin') {
						?>
						<td>
							<button 
							<?php if ($data->status!='belum diketahui') {
								echo "disabled='disabled'";
							}?> class="setuju" name="terima" data-class="<?php echo $data->id_buku?>" data-id="<?php echo $data->id_peminjaman?>" >Terima</button> ||
							<button 
							<?php if ($data->status!='belum diketahui') {
								echo "disabled='disabled'";
							}?>
							class="tolak" name="tolak" data-id="<?php echo $data->id_peminjaman?>" >Tolak</button>
						</td><?php
					}
				?>
			</tr>

			<?php
		}
		?>
		
	</table>
<script type="text/javascript">
   $(document).on('click','.setuju',function(){
        var id = $(this).attr('data-id');
        var id_buku = $(this).attr('data-class');
        $.ajax({
          method: "POST",
          url: "proses/edit_pinjam.php",
          data: { id_peminjaman:id, id_buku:id_buku , type:"update_pinjam"},
          
        });
      });
   $(document).on('click','.tolak',function(){
        var id = $(this).attr('data-id');
        $.ajax({
          method: "POST",
          url: "proses/edit_pinjam.php",
          data: { id_peminjaman:id , type:"update_tolak"},
          
        });
      });
</script>
</div>