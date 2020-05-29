<?php
include('../koneksi.php');
include('../function.php');
$conn = new Koneksi();
$dat = new Data($conn);

if (isset($_POST['submit'])) {

	$user = $_POST['username'];
	$pass = $_POST['password'];
	$tampil = $dat->login($user,$pass);
    $fetch = mysqli_fetch_assoc($tampil);
	if ($fetch==0) {
		echo '<script language="javascript">alert("Username dan Password belum terdaftar!"); document.location="../login.php";</script>';
	}else{
		echo "ok";
		
		$_SESSION['id_user'] = $fetch['id_user']; 
		$_SESSION['login_user'] = $fetch['nama']; 
		$_SESSION['akses']		= $fetch['nama_akses'];
			
			if ($fetch['akses'] == "superadmin") {
				$_SESSION['akses'] = "superadmin";
			}elseif ($fetch['akses'] == "admin") {
				$_SESSION['akses'] = "admin";
			}elseif ($fetch['akses'] =="user") {
				$_SESSION['akses'] = "user";
			}
		// echo '<script>document.location="../index.php";</script>';
	}

}

?>