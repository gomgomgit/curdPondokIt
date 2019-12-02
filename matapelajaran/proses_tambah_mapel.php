<?php
session_start();

if (isset($_SESSION['email'])) {

include '../koneksi/koneksi.php';
$mapel	= $_POST['mapel'];

$sql = "INSERT INTO matapelajaran (mapel) VALUES ('$mapel')";
mysqli_query($connect, $sql);
header('location:index.php');

} else {
	header('location:../login/login.php');
} 

?>
