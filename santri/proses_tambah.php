<?php
session_start();

if (isset($_SESSION['email'])) {

include '../koneksi/koneksi.php';
$nama   		= $_POST['nama'];
$password   	= md5($_POST['password']);
$email  		= $_POST['email'];
$tanggallahir 	= $_POST['tanggallahir'];

$sql = "insert into santri (nama, password, email, tanggallahir)values ('$nama','$password','$email','$tanggallahir')";
mysqli_query($connect,$sql);
header('location:index.php');

} else {
	header('location:../login/login.php');
}
?>
