<div class="tambah_buku">
<br><h3 style="color: #2e6fa7">Tambah Buku</h3><br>
<form id="tambah_buku" method="POST">
	<table>
        <tr>
            <td>ISBN</td>
            <td>
                <input type="text" name="isbn" id="isbn" required=""/>
            </td>
        </tr>
        <tr>
            <td>Judul Buku</td>
            <td>
                <input type="text" name="judul_buku" id="judul_buku" required=""/>
            </td>
        </tr>
        <tr>
            <td>Tahun Buku</td>
            <td>
                <input type="text" name="tahun_buku" id="tahun_buku" required=""/>
            </td>
        </tr>
        <tr>
            <td>Stok Buku</td>
            <td>
                <input type="text" name="stok_buku" id="stok_buku" required=""/>
            </td>
        </tr>
        <tr>
            <td>Kategori</td>
            <td>
                <input type="text" name="kategori" id="kategori" required="" />
            </td>
        </tr>

        <tr>
            <td>Penerbit</td>
            <td>
                <?php
                $tampil = $dat->tampil_datapenerbit();
                echo "<select name='id_penerbit' id='id_penerbit'>";
                while ($data = $tampil->fetch_object()) {
                    echo "<option value=".$data->id_penerbit.">".$data->nama_penerbit."</option>";
                }
                    echo "</select>";
                ?>
            </td>
        </tr>
        <tr>
            <td>Rak</td>
            <td>
                <?php
                $tampil = $dat->tampil_datarak();
                echo "<select name='id_rak' id='id_rak'>";
                while ($data = $tampil->fetch_object()) {
                    echo "<option value=".$data->id_rak.">".$data->nama_rak."</option>";
                }
                    echo "</select>";
                ?>
            </td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr>
            <td></td>
            <td>
                <input class="button" type="submit" name="simpan" id="simpan" value="Simpan" />
                <a href="index.php?halaman=galeri"><button class="button" type="button" id="cancelButton">Batal</button></a>
            </td>
        </tr>
    </table>
</form><br><br><br>
</div>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#simpan").click(function(){
            var data = $('#tambah_buku').serialize();
            $.ajax({
                type: 'POST',
                url: "proses/tambah_buku.php",
                data: data,
                success: function() {
                    console.log(response);
                }
            });
        });
    });
</script>