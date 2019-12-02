<?php
session_start();
if (isset($_SESSION'email'])) {
include "../koneksi/koneksi.php";

$santri_id = $_POST['namasantri'];
$matapelajaran_id = $_POST['mapelsantri'];
$nilai_angka = $_POST['nilai_angka'];

if ($nilai_angka === 100) {
	$nilai_huruf = "S";
	} elseif ($nilai_angka < 100 && $nilai_angka >= 80) {
	$nilai_huruf = "A";
	} else {$nilai_huruf = "X";}
				
$sql = "INSERT INTO matapelajaransantri(santri_id, matapelajaran_id, nilai_angka, nilai_huruf) VALUES ('$santri_id', '$matapelajaran_id', '$nilai_angka', '$nilai_huruf')";

$result = mysqli_query($connect, $sql);
header('location:index.php');

} else {
	header('location:../login/login.php');
} 
