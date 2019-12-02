<?php
	session_start();

	if (isset($_SESSION['email'])) {

	include '../koneksi/koneksi.php';
	$ID		= $_POST['id'];
	$mapel	= $_POST['mapel'];

	$sql = "UPDATE matapelajaran SET mapel = '$mapel' WHERE id = '$ID'";
	mysqli_query($connect, $sql);
	header('location:index.php');
	
	} else {
	header('location:../login/login.php');
	} 
?>
