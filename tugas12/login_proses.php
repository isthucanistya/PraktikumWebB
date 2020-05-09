<?php
include('koneksi.php');
include('function.php');
$conn = new Koneksi();
$dat = new Data($conn);

if (isset($_POST['submit'])) {

	$user = $_POST['username'];
	$pass = $_POST['password'];
	$tampil = $dat->login($user,$pass);
    $fetch = mysqli_fetch_assoc($tampil);
	if ($fetch==0) {
		echo '<script language="javascript">alert("Username dan Password belum terdaftar!"); document.location="login.php";</script>';
	}else{
		
		$_SESSION['login_user'] = $fetch['nama']; 
		$_SESSION['akses']		= $fetch['akses'];
			
			if ($fetch['akses'] == "admin") {
				$_SESSION['akses'] = "admin";
			}else if ($fetch['akses'] =="pengguna") {
				$_SESSION['akses'] = "pengguna";
			}
				

		echo '<script>document.location="index.php";</script>';
	}

}

?>