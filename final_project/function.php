<?php
    class Data{
        private $mysqli;
        public function __construct($conn)
        {
            $this->mysqli = $conn;
        }

        public function tampil($id=null){
            $db = $this->mysqli->connection;
            $sql = "SELECT b.id_buku, b.isbn, b.judul_buku,b.kategori, p.nama_penerbit AS nama_penerbit, b.stok_buku FROM buku b JOIN penerbit p WHERE b.id_penerbit = p.id_penerbit ";
            $query = $db->query($sql) or die($db->error);
            return $query;
        }
        public function tampil_urutan($sort,$field){
            $db = $this->mysqli->connection;
            $sql = "SELECT b.id_buku, b.isbn, b.judul_buku,b.kategori, p.nama_penerbit AS nama_penerbit, b.stok_buku FROM buku b JOIN penerbit p WHERE b.id_penerbit = p.id_penerbit ORDER BY $field $sort";
            $query = $db->query($sql) or die($db->error);
            return $query;
        }
        public function tampil_saring($q,$column){
            $db = $this->mysqli->connection;
            $sql = "SELECT b.id_buku, b.isbn, b.judul_buku,b.kategori, p.nama_penerbit AS nama_penerbit, b.stok_buku FROM buku b JOIN penerbit p WHERE b.id_penerbit = p.id_penerbit AND $column LIKE '%$q%'";
            $query = $db->query($sql) or die($db->error);
            return $query;
        }
        public function login($user,$pass){
            $db = $this->mysqli->connection;
            $sql = "SELECT u.id_user,u.nama, u.username, u.password, a.nama_akses FROM user u JOIN akses a WHERE u.id_akses=a.id_akses AND u.username = '$user' AND u.password = '$pass' ";
            $query = $db->query($sql) or die($db->error);
            return $query;   
        }
        public function detail_buku($id){
            $db = $this->mysqli->connection;
            $sql = "SELECT b.id_buku AS id, b.isbn, b.judul_buku, b.tahun_buku, b.kategori,r.id_rak AS id_rak,r.nama_rak AS nama_rak, p.nama_penerbit AS penerbit, b.stok_buku FROM buku b JOIN penerbit p JOIN rak r WHERE b.id_penerbit = p.id_penerbit AND r.id_rak = b.id_rak AND b.id_buku='$id'";
            $query = $db->query($sql) or die($db->error);
            return $query;              
        }

        public function daftar($nama, $alamat, $tlp, $username, $pass, $id_akses){
            $db = $this->mysqli->connection;
            $sql = "INSERT INTO user VALUES ('','$nama','$alamat','$tlp','$username','$pass','$id_akses')";
            $query = $db->query($sql) or die($db->error);
            return $query;   
        }
        public function edit_profile($id){
            $db = $this->mysqli->connection;
            $sql = "SELECT * FROM user WHERE id_user='$id'";
            $query = $db->query($sql) or die($db->error);
            return $query;              
        }
        public function p_edit_profile($id_user, $nama, $alamat, $tlp, $username, $pass, $id_akses){
            $db = $this->mysqli->connection;
            $sql = "UPDATE user SET nama='$nama', alamat='$alamat', no_tlp='$tlp', username='$username', password='$pass' WHERE id_user='$id_user'";
            $query = $db->query($sql) or die($db->error);
            return $query;              
        }
        public function tampil_peminjaman($id){
            $db = $this->mysqli->connection;
            $sql = "SELECT p.id_peminjaman, p.tgl_pinjam, p.tgl_kembali, p.status,b.id_buku, b.judul_buku, u.nama FROM peminjaman p JOIN buku b JOIN user u WHERE p.id_buku=b.id_buku AND p.id_user=u.id_user AND p.id_user='$id';";
            $query = $db->query($sql) or die($db->error);
            return $query;              
        }
        public function tampil_allpeminjaman($id=null){
            $db = $this->mysqli->connection;
            $sql = "SELECT p.id_peminjaman, p.tgl_pinjam, p.tgl_kembali, p.status, b.id_buku, b.judul_buku, u.nama FROM peminjaman p JOIN buku b JOIN user u WHERE p.id_buku=b.id_buku AND p.id_user=u.id_user;";
            $query = $db->query($sql) or die($db->error);
            return $query;              
        }
        public function tampil_databuku($id=null){
            $db = $this->mysqli->connection;
            $sql = "SELECT * FROM buku WHERE stok_buku!=0";
            $query = $db->query($sql) or die($db->error);
            return $query;              
        }
        public function tampil_datapenerbit($id=null){
            $db = $this->mysqli->connection;
            $sql = "SELECT * FROM penerbit";
            $query = $db->query($sql) or die($db->error);
            return $query;              
        }
        public function tampil_datarak($id=null){
            $db = $this->mysqli->connection;
            $sql = "SELECT * FROM rak";
            $query = $db->query($sql) or die($db->error);
            return $query;              
        }
        public function proses_pinjam($id_buku,$tgl_pinjam,$tgl_kembali,$status,$id_user){
            $db = $this->mysqli->connection;
            $sql = "INSERT INTO peminjaman VALUES ('','$tgl_pinjam','$tgl_kembali','$status','$id_buku','$id_user')";
            $query = $db->query($sql) or die($db->error);
            return $query;              
        }
        public function proses_tambahbuku($isbn,$judul,$tahun,$stok,$kategori,$id_penerbit,$id_rak){
            $db = $this->mysqli->connection;
            $sql = "INSERT INTO buku VALUES ('','$isbn','$judul','$tahun','$stok','$kategori','$id_penerbit','$id_rak')";
            $query = $db->query($sql) or die($db->error);
            return $query;              
        }

        public function proses_setuju($id_peminjaman,$id_buku){
            $db = $this->mysqli->connection;
            $sql = "UPDATE peminjaman SET status='setujui' WHERE id_peminjaman='$id_peminjaman'";
                if ($sql) {
                    $update = "UPDATE buku SET stok_buku=stok_buku-1 WHERE id_buku=$id_buku";
                    $queryupdate = $db->query($update) or die($db->error);
                }
            $query = $db->query($sql) or die($db->error);
            return $query;              
        }
        public function proses_tolak($id_peminjaman){
            $db = $this->mysqli->connection;
            $sql = "UPDATE peminjaman SET status='tolak' WHERE id_peminjaman='$id_peminjaman'";
            $query = $db->query($sql) or die($db->error);
            return $query;              
        }
        
    }
?>