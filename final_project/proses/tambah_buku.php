<?php
include('../koneksi.php');
include('../function.php');
$conn = new Koneksi();
$dat = new Data($conn);

$isbn = $_POST['isbn'];
$judul= $_POST['judul_buku'];
$tahun = $_POST['tahun_buku'];
$stok = $_POST['stok_buku'];
$kategori = $_POST['kategori'];
$id_penerbit = $_POST['id_penerbit'];
$id_rak = $_POST['id_rak'];

$tampil = $dat->proses_tambahbuku($isbn,$judul,$tahun,$stok,$kategori,$id_penerbit,$id_rak);
echo "ok";

?>