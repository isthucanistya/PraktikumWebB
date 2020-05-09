<?php
$user = $_SESSION['login_user'];
$akses = $_SESSION['akses'];

if(!isset($_SESSION['akses'])){
	echo '<script language="javascript">alert("mohon login terlebih dahulu"); document.location="login.php";</script>';
}
?>