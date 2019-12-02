<?php
session_start();
include '../koneksi/koneksi.php';
$email	= $_POST['email'];
$pass	= md5($_POST['pass']);

if (!null == ($email && $pass)) {
	$sql	= "select * from santri where email='".$email . "' AND password='".$pass."'";
	$result	= mysqli_query($connect, $sql);
	if (mysqli_num_rows($result)>0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['email'] = $email;

		header('location:../santri/index.php');
	} else {
		echo "Email atau Password anda salah";
	}

} else {
	echo "Silahkan isi form login terlebih dahulu";
}
?>