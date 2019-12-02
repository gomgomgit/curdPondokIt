<?php
session_start();

if (isset($_SESSION['email'])) {

include '../koneksi/koneksi.php';
$ID    		= $_POST['id'];
$nama    	= $_POST['nama'];
$password   = md5($_POST['password']);
$email  	= $_POST['email'];
$ttl	 	= $_POST['tanggallahir'];

$sql = "UPDATE santri SET nama = '$nama', password = '$password', email = '$email', tanggallahir = '$ttl' WHERE id = '$ID'";
mysqli_query($connect,$sql);
header('location:index.php');

} else {
	header('location:../login/login.php');
}
?>
