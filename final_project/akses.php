<?php
	if (!isset($_SESSION['login_user']) || !isset($_SESSION['akses']) || !isset($_SESSION['id_user'])){
	    $user='NULL';
	    $akses='NULL';
	    $id ='NULL';
	}else{
		$user = $_SESSION['login_user'];
		$akses = $_SESSION['akses'];
		$id = $_SESSION['id_user'];
	}

// if(!isset($_SESSION['akses'])){
// 	echo '<script language="javascript">alert("mohon login terlebih dahulu"); document.location="login.php";</script>';
// }
?>

