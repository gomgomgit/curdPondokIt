<?php
session_start();
if (isset($_SESSION['email'])) {
include '../koneksi/koneksi.php';
$ID    				= $_POST['id'];
$san    			= $_POST['namasantri'];
$mat  				= $_POST['mapelsantri'];
$nilai_angka  		= $_POST['nilai_angka'];

if ($nilai_angka = 100) {
	$nilai_huruf = "S";
	} else $nilai_huruf = "X";

$sql = "UPDATE matapelajaransantri SET santri_id = '$san', matapelajaran_id = '$mat', nilai_angka = '$nilai_angka', nilai_huruf = '$nilai_huruf' WHERE id = '$ID'";
mysqli_query($connect,$sql);
header ('location:index.php');

} else {
	header('location:../login/login.php');
} 
?>
